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
            $outlook_mail = new PHPMailer;
            $outlook_mail->IsSMTP();
            // Send email using Outlook SMTP server
            $outlook_mail->Host = 'smtp-mail.outlook.com';
            // port for Send email
            $outlook_mail->Port = 587;
            $outlook_mail->SMTPSecure = 'tls';
            $outlook_mail->SMTPDebug = 0;
            $outlook_mail->SMTPAuth = true;
            $outlook_mail->Username = EMAIL_OUT;
            $outlook_mail->Password = PASSWORD_OUT;
             
            $outlook_mail->From = EMAIL_OUT;
            $outlook_mail->FromName = 'Brena Teodoro';// frome name
            $outlook_mail->AddAddress($email_cliente);  // Add a recipient  to name
          
             
            $outlook_mail->IsHTML(true); // Set email format to HTML
             


            $mensagem = '<p> Seja bem-vindo(a) ao nosso Studio de Beleza! </p>';
            $mensagem .= '<p> Para confirmar o teu email e ativar a tua conta, basta clicar neste link:  </p>';
            $mensagem .= '<p> <a href ="'. $link . '"> Confirmar Email </a></p>';

            
            $outlook_mail->CharSet = PHPMailer::CHARSET_UTF8;
            $outlook_mail->Subject = APP_NAME . ' - Confirmação de E-mail';
            $outlook_mail->Body = $mensagem;
            $outlook_mail->send();



    // Se envia o email, retorna verdadeiro
        return true;

    }catch(Exception $e){
    // Se não, retorna falso
        return false;
    }
       
         
     
    }
}
