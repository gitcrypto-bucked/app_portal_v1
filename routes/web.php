<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/** retorna aceeso ao index.blade.php */
Route::get('/', function () {
    return view('index');
})->name('index');

/** se o usuario não esta logado envia para o login */
Route::group(['middleware' => 'guest'], function () {
    /** se o usuario não esta logado envia para o login page */
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
    /** ao postar o form login na login.blade.php os dados request são enviados para o controller User na função loginPost */
    Route::post('/login', [UserController::class, 'loginPost']);
});

/** acesso somente após login */
Route::group(['middleware' => 'auth'], function () {

    /** acesso a rota dashboard após login */
    Route::get('/dashboard', function ()
    {
        /** se user pertence a low cost envia para o dashboard @lowcost */
        if( Auth::user()->empresa=='lowcost')
        {
            return view('lowcost.dashboard');
        }
        /** se user não pertence a low cost envia para o dashboard @empresa */
        else
        {
            return view('auth.dashboard');
        }
    })->middleware(['auth', 'verified'])->name('dashboard');


    /**rota para logout de usuario */
    Route::get('logout', [UserController::class, 'destroy'])
        ->name('logout');

    /** se user pertence a low cost cria rota  para o ver as noticias*/
    Route::get('/list-news' , function(){
        if(Auth::user()->empresa=='lowcost')
        {
            return view('lowcost.shownews');
        }
    })->middleware(['auth', 'verified'])->name('list-news');

    /** se user pertence a low cost cria rota  para o cadastra noticia*/
    Route::get('/add-news' , function()
    {
        return view('lowcost.addnews');
    })->name('add-news');

    Route::post('/add_news', [\App\Http\Controllers\NewsController::class, 'addnews'])->name('add_news');

    Route::get('/rem_news', [\App\Http\Controllers\NewsController::class, 'removenews'])->name('rem_news');

    Route::get('/news-chart', [\App\Http\Controllers\ChartController::class, 'chartNoticias'])->name('news-chart');

    Route::get('/register-user', function ()
    {
        return view('auth.register-user');
    })->name('register-user');

    /** profile do usuario logado */
    Route::get('/user-profile', function (){
        return view('user.profile');
    })->name('user-profile');

    Route::post('/register', [UserController::class, 'register'])->name('register');

    Route::post('/update-user', [\App\Http\Controllers\UserController::class, 'updateUser'])->name('update-user');

});

Route::group(['middleware' => 'guest'], function ()
{
    //Rotas de acesso para que o usuario cadastrado consiga cadastrar sua senha de acesso.
    Route::get('/user-token/{token}', [\App\Http\Controllers\UserController::class, 'checkUserToken'])->name('user-token');
    //rota para cadastrar senha de usuario via link e token
    Route::post('/update-password', [\App\Http\Controllers\UserController::class, 'registerUserPassword'])->name('update-password');

    /** @rotas para recuperação de senha, desabilitadas */
    #Route::get('/forgot-password', [\App\Http\Controllers\UserController::class, 'forgotPassword'])->name('forgot-password');
    #Route::post('/password-recover',[\App\Http\Controllers\UserController::class, 'recoverPassword'])->name('password-recover');
});


