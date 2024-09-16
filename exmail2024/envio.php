<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username = 'sandroaf@gmail.com';     //SMTP username
    $mail->Password = ''; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $from = $_POST["iemail"];
    $nome = $_POST["inome"];
    $mail->setFrom($from, $nome);
    $mail->addAddress('sandroaf@unidavi.edu.br', 'Sandro Alencar Fernandes');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo($from,$nome);
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('img/anexo.png');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $assunto = $_POST['iassunto'];
    $mail->Subject = $assunto;
    $msg = "<h2>Minha Frase Personalizada</h2>Mensagem de: ".$nome." - ".$from."<br>";
    $msg = $msg."Telefone: ".$_POST["ifone"]."<br>";
    $msg = $msg."Assunto: ".$assunto."<br>";
    $msg = $msg."Mensagem: <br>".$_POST['tmensagem'];
    $mail->Body = $msg;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    //echo "<pre>";
    //var_dump($mail);
    //echo "</pre>";

    $mail->send();
    echo 'Mensagem Enviada com sucesso';
} catch (Exception $e) {
    echo "Mensagem não pode ser enviar. Erro: {$mail->ErrorInfo}";
}