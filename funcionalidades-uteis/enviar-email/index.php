<?php


//Senha: mc0BfI9*mm<
//Email: teste@zerobugs.com.br
//Host: smtp.zerobugs.com.br
//porta:587

//pesquisar pelos tipos de email que quer enviar exemplo: outlook phpmailer config



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try {
    // Configuração do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.office365.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'email'; 
    $mail->Password = 'senhaEmail'; 
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configurações do e-mail
    $mail->setFrom('Nome email', 'Seu nome'); 
    $mail->addAddress('Destinatario', 'Nome destinatario'); 

    $mail->isHTML(true);
    $mail->Subject = 'Assunto do E-mail';
    $mail->Body    = '<h1>Hello</h1>';

    // Enviar e-mail
    $mail->send();
    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo 'Erro ao enviar e-mail: ', $mail->ErrorInfo;
}






?>