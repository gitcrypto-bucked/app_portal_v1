<?php

namespace App\Http\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
set_time_limit ( 0 );
class MailController extends Controller
{

    /** @email com link de acesso para usuario cadastrar uma senha de acesso */
    public static function sendNewUserMail($to, $url, $name):bool
    {
        #$myValue = Config::get('file1.MASTER_KEY.SUB_KEY1');
        #$from = 'naoresponda@lowcost.com.br';
        $headers = 'FROM: '.self::from;
        $message = self::getNewUserTemplate( $url, $name);

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPDebug = 2;
        $mail->Host = self::smpt;
        $mail->Port = self::port;
        $mail->SMTPSecure = 'tls'; //important
        $mail->SMTPAuth = true;
        $mail->Username = self::from;
        $mail->Password = self::password;

        $mail->setFrom(self::from, 'Portal LowCost');
        $mail->addReplyTo($to, $name);
        $mail->addAddress($to, $name);
        $mail->AddEmbeddedImage(dirname(getcwd()).'/public/logo/logo.png', 'logoimg', 'logo.jpg');

        $mail->Subject = 'Cadastro de usuarios';
        $mail->Body = $message;
        $mail->IsHTML(true);
        if (!$mail->send()) {
//            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        } else {
//            echo 'The email message was sent.';
            return true;
        }

    }

    /**@retorna o corpo do email em html */
    private static function getNewUserTemplate( $url, $name):string
    {
        return '  <!DOCTYPE html>
            <html>
          <head>
          <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #customers td, #customers th {
          border: none ;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #F8F8F8;}

        #customers tr{background-color: #F8F8F8;}

        #customers th {
          padding-top: 20px;
          padding-bottom: 20px;
          text-align: left;
          background-color: #cfdadf ;
          color: black;
        }

        table tr th
        {
            font-size:14px;
        }

        th
        {
            width:100%;
        }



        .logo {
            width: 125px;
        }

        .button {
          font: bold 11px Arial;
          text-decoration: none;
          background-color:#0E86D4;
          color: white !important;
          padding: 12px 16px 12px 16px;
          border-radius:5px;
        }
        </style>
        </head>
        <body>


        <table id="customers">
          <tr>
            <th><img src="cid:logoimg" class="logo"  alt="PHPMailer"></th>

          </tr>
          <tr>
            <td></td>


          </tr>
          <tr>
            <td>Caro(a) '.$name.', seu cadastro no Portal LowCost foi realizado com sucesso!</td>


          </tr>
          <tr>
            <td>Clique no botão abaixo, para cadastrar uma senha.</td>

          </tr>
          <tr>
            <td></td>

          </tr>
          <tr>
           <td><a href="'.$url.'" target="_blank" class="button">Criar Senha</a></td>

          </tr>
           <tr>
            <td></td>

          </tr>
          <tr>
            <td>Att</td>

          </tr>

          <tr>
            <td>LowCost</td>

          </tr>
        </table>

        </body>
        </html>
        ';
    }

    /**@retorna o corpo do email em html */
    private static function getPasswordRecoverTemplate( $url, $name):string
    {
        return '  <!DOCTYPE html>
            <html>
          <head>
          <style>
        #customers {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #customers td, #customers th {
          border: none ;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #F8F8F8;}

        #customers tr{background-color: #F8F8F8;}

        #customers th {
          padding-top: 20px;
          padding-bottom: 20px;
          text-align: left;
          background-color: #cfdadf ;
          color: black;
        }

        table tr th
        {
            font-size:14px;
        }

        th
        {
            width:100%;
        }



        .logo {
            width: 125px;
        }

        .button {
          font: bold 11px Arial;
          text-decoration: none;
          background-color:#0E86D4;
          color: white !important;
          padding: 12px 16px 12px 16px;
          border-radius:5px;
        }
        </style>
        </head>
        <body>


        <table id="customers">
          <tr>
            <th><img src="cid:logoimg" class="logo"  alt="PHPMailer"></th>

          </tr>
          <tr>
            <td></td>


          </tr>
          <tr>
            <td>Caro(a) '.$name.', recebemos com sucesso seu pedido de recuperação de senha!</td>


          </tr>
          <tr>
            <td>Clique no botão abaixo, para cadastrar uma nova senha.</td>

          </tr>
          <tr>
            <td></td>

          </tr>
          <tr>
           <td><a href="'.$url.'" target="_blank" class="button">Criar Senha</a></td>

          </tr>
           <tr>
            <td></td>

          </tr>
          <tr>
            <td>Att</td>

          </tr>

          <tr>
            <td>LowCost</td>

          </tr>
        </table>

        </body>
        </html>
        ';
    }

    /**@email com url de acesso para resetar o email */
    public static function sendPasswordRecoverMail($to, $url, $name):bool
    {
        #$from = 'naoresponda@lowcost.com.br';
        $headers = 'FROM: '.self::from;
        $message = self::getPasswordRecoverTemplate( $url, $name);

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPDebug = 1;
        $mail->Host = self::smpt;
        $mail->Port = self::port;
        $mail->SMTPSecure = 'tls'; //important

        $mail->SMTPAuth = true;
        $mail->Username = self::from;
        $mail->Password = self::password;

        $mail->setFrom(self::from, 'Portal LowCost');
        $mail->addReplyTo($to, $name);
        $mail->addAddress($to, $name);
        $mail->AddEmbeddedImage(dirname(getcwd()).'/public/logo/logo.png', 'logoimg', 'logo.jpg');

        $mail->Subject = 'Cadastro de usuarios';
        $mail->Body = $message;
        $mail->IsHTML(true);
        if (!$mail->send()) {
//            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        }
        else
        {
//            echo 'The email message was sent.';
            return true;
        }
    }


    /** @var string configurações do servidor de email */
    private const smpt='smtp.office365.com';
    private const from = 'naoresponda@lowcost.com.br';
    private const password ='';
    private const port =587;
}
