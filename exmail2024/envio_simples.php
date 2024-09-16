<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();        
    $mail->Host = 'smtp.gmail.com';   
    $mail->SMTPAuth   = true;  
    $mail->Username = 'sandroaf@gmail.com'; 
    $mail->Password = '';//Preencher 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $mail->Port       = 465;  
    //Recipients
    $mail->setFrom("sandroaf@gmail.com", "Sandro - Mensagem Simples");
    $mail->addAddress('sandroaf@unidavi.edu.br', 'Sandro Alencar Fernandes'); 
    $mail->addAddress('sandro@arealocal.com.br');  
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    //Content
    $mail->isHTML(true);  
    $mail->Subject = 'Mensagem do site';
    $mail->Body = 'Seu Site lhe enviou essa mensagem. Parabéns';
    $mail->send();
    echo 'Mensagem Enviada com sucesso';
} catch (Exception $e) {
    echo "Mensagem não pode ser enviar. Erro: {$mail->ErrorInfo}";
}