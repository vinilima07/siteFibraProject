<?php
	$to      = 'email';
	$subject = 'assunto';
	$message = 'mensagem';
	$headers = 'From: vinilima07@gmail.com' . "\r\n" .
	    'Reply-To: webmaster@example.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
?>
