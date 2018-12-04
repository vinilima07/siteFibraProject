<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
	//$mail->setLanguage('pt_br', '/PHPMailer-master/language/directory/');
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; 										  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'phpmailersend1@gmail.com';         // SMTP username
    $mail->Password = 'phpmailer1234';                    // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
	//$email->Port = 465

    //Recipients
    $mail->setFrom('phpmailersend1@gmail.com', 'NOME DA EMPRESA');
    $mail->addAddress(email, nome);     				    // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	//Content
    $mail->isHTML(false);                                    // Set email format to HTML
    $mail->Subject = assunto;
  	//$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = mensagem;

	if(!$mail->send()) {
    	echo 'Nao foi possível enviar a mensagem.<br>';
    	echo 'Erro: ' . $mail->ErrorInfo;
	} else {
	    echo 'Mensagem enviada.';
	}

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
