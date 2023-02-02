<?php

namespace core\classes;

use Exception;
use League\OAuth2\Client\Provider\Google;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\OAuthTokenProvider;

class EnviarEmail


{
    public function enviar_email_confirmacao_novo_cliente($email_cliente, $purl)
    {


        date_default_timezone_set('Europe/Lisbon');

        $link = BASE_URL . '?a=confirmar_email&purl=' . $purl;
     


        try{

     
        $mail = new PHPMailer();

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.gmail.com';

     
        // $mail->Port = 465;
        $mail->Port = 465;
        //Set the encryption mechanism to use:
        // - SMTPS (implicit TLS on port 465) or
        // - STARTTLS (explicit TLS on port 587)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->CharSet = 'UTF-8';
        $mail->SMTPAuth = true;

        $mail->AuthType = 'XOAUTH2';

     
        $email = EMAIL;
        $clientId = CLIENT_ID;
        $clientSecret = CLIENT_SECRET;

     
        $refreshToken = TOKEN;

   
        $provider = new Google(
            [
                'clientId' => $clientId,
                'clientSecret' => $clientSecret,
            ]
        );

     
        $mail->setOAuth(
            new OAuth(
                [
                    'provider' => $provider,
                    'clientId' => $clientId,
                    'clientSecret' => $clientSecret,
                    'refreshToken' => $refreshToken,
                    'userName' => $email,
                ]
            )
        );






    
        //For gmail, this generally needs to be the same as the user you logged in as
        $mail->setFrom(EMAIL, NAME);

        //Set who the message is to be sent to
        $mail->addAddress($email_cliente);

        //Set the subject line
        $mail->Subject = APP_NAME . ' - Confirmação de E-mail';

      
        $mensagem = '<p> Seja bem-vindo(a) ao nosso Studio de Beleza! </p>';
        $mensagem .= '<p> Para confirmar o teu email e ativar a tua conta, basta clicar neste link:  </p>';
        $mensagem .= '<p> <a href ="'. $link . '"> Confirmar Email </a></p>';
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body

        $mail->Body = $mensagem;
        $mail->CharSet = PHPMailer::CHARSET_UTF8;

        //Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';

        $mail->send();

    // Se envia o email, retorna verdadeiro
        return true;

    }catch(Exception $e){
    // Se não, retorna falso
        return false;
    }
       
         
     
    }
}
