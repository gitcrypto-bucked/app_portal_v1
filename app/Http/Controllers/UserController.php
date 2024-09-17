<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{

    //salva dados de cadastro de usuario, envia e-mail para o mesmo cadastrar a senha
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'confirm_email'=> 'required|same:email',
            'empresa'=>'required',
            'centrocusto'=>'required',
            'tipo'=>'required'
        ]);

        // insere o usuario na tabela users
        $created_at= date('Y-m-d H:i:s', time());

        DB::table('users')->insert(['name'=>$request->name,
                                          'email'=>$request->email,
                                          'password'=> md5(time()),
                                          'active'=>'1',
                                          'level' => $request->tipo,
                                          'created_at'=>$created_at,
                                          'empresa' => strtolower($request->empresa),
                                          'centro_de_custo' => strtolower($request->centrocusto)]);

        $token = md5(bin2hex(random_bytes(32))); // token de acesso para usuario cadastrar

        $created_at= date('Y-m-d H:i:s', time()); //data hora tabela password_reset_tokens

        DB::table('password_reset_tokens')->insert(['email'=>$request->email,'token'=>$token,'created_at'=>$created_at ]); //tabela do token de usuario

        $url = route("user-token",$token);  //gera o link do servidor

        if(MailController::sendNewUserMail($request->email, $url,$request->name))
        {
            return redirect('/register-user')->with('success', 'Cadastro Realizado com Sucesso!');
        }
        else return redirect('/register-user')->with('error', 'Erro ao enviar email, por favor contate o suporte.');
    }

    //usuario cadastrado, valida se o token de acesso é valido e envia para pagina de alterar senha
    public function checkUserToken(Request $request)
    {
        $token = $request->token;
        $user = DB::table('users')
            ->select(['users.name', 'users.email', 'users.empresa'])
            ->join('password_reset_tokens', 'users.email', '=', 'password_reset_tokens.email')
            ->where('password_reset_tokens.token', '=',$token)
            ->get();
        if(isset($user[0]) && !empty($user[0]))
        {
            return view("password-create",['user' =>  $user, 'token'=>$request->token]); //envia para view o usuario alterar a senha
        }
        if(!isset($user[0]) && empty($user[0]))
        {
            return view('expired-link');  // o usuario ja alterou a senha
        }
    }

    //usuario cadastrado, permite cadastrar senha de acesso via link
    public function registerUserPassword(Request $request)
    {
            $request->validate([
                'name' => 'required',
                'email' => 'email',
                'empresa'=>'required',
                'password' => 'required|min:8',
                'passwordConfirmation' => 'min:8',
            ]);

            if(strtolower($request->password )!= strtolower($request->passwordConfirmation))
            {
                return view("password-create")->with('error', 'A senha e confirmação de senha não coincidem!');
            }
            DB::table('users')->where('email', $request->email)->update(['empresa'=>$request->empresa, 'password'=> Hash::make($request->senha),]);
            DB::table('password_reset_tokens')->where('token','=',$request->token)->delete();

            return view("auth.login")->with('success', 'Senha Cadastrada com Sucesso!');
    }

    //retorna a view login ao request
    public function showLoginForm()
    {
        return view('auth.login');
    }

    //valida dados de login do usuario
    public function loginPost(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'empresa' => strtolower($request->empresa),
        ];
        if (Auth::attempt($credentials))
        {
            if(Auth::user()->active!=1)
            {
                return redirect('/login')->with('error', 'Usuário/Senha inválidos.');
            }
            return redirect()->intended('/dashboard');
        }
        return redirect('/login')->with('error', 'Usuário/Senha inválidos.');
    }

    //destroy  a sessão do usuario ao se deslogar e
    //redireciona para pagina de login
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    // Usuario cadastrado e logado Permite alterar sua senha
    public function updateUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users',
            'senha' => 'required|min:8',
            'confsenha' => 'min:8',
        ]);

        User::updated([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->senha),
        ]);
        return redirect('/user-profile')->with('success', 'Dados atualizados com sucesso.');

    }

    /**fluxo para recuperação de senha, */
    /**verifica se usuario está cadastrado e ativo*/
    /**@desabilitado  no router*/
    public function recoverPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|',
            'confirmEmail'=> 'required|same:email',
        ]);

        if(strtolower($request->email) !=strtolower($request->confirm_email))
        {
            return view('auth.password-recover')->with('error','O email informado não confere com o campo de confirmação!');
        }
        $user = DB::table('users')->select(' * ')->where(['email', $request->email],['ativo','1'])->get();
        if(isset($user[0]) && !empty($user[0]))
        {
            $token = md5(bin2hex(random_bytes(32))); // token de acesso para usuario cadastrar

            $created_at= date('Y-m-d H:i:s', time()); //data hora tabela password_reset_tokens

            DB::table('password_reset_tokens')->insert(['email'=>$request->email,'token'=>$token,'created_at'=>$created_at ]); //tabela do token de usuario

            $url = route("user-register",$token);  //gera o link do servidor
            if(MailController::sendPasswordRecoverMail($request->email, $url,$user[0]['name']))
            {
                return view('password-recover')->with('sucess','Foi enviado no e-mail informado um link para criar um nova senha');
            }
            else return view('password-recover')->with('error', 'Erro ao enviar email, por favor contate o suporte.');
        }
        else return view('password-recover')->with('error', 'Erro ao encontrar usuario cadastrado, por favor contate o suporte.');
    }

    public function forgotPassword():string
    {
        return view('password-recover');
    }
}
