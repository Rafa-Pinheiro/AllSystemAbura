<?php
	include_once("class.phpmailer.php");
	$destino = 'luiz.assini@etec.sp.gov.br'; //destino do link
	$subject = "[Ocorrência Registrada]"; //assunto no email

	
	$mail = new PHPMailer();
	$mail->SMTPDebug = 3;
	$mail->Debugoutput = 'html';

	$mail->setLanguage('pt-br');
	$mail->CharSet = 'UTF-8';

	$mail->isSMTP();
	$mail->Host = 'mail.integrador.profrodolfo.com.br';
	$mail->SMTPSecure = 'ssl';
	$mail->Username = '_mainaccount@integrador.profrodolfo.com.br';
	$mail->Password = '@senhaforte';
	$mail->Port = 465; //porta ssl do gmail 587
	$mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl"; //ssl ou tls
	$mail->setFrom('integrador@integrador.profrodolfo.com.br',"Abura System");
	$mail->addReplyTo('integrador@integrador.profrodolfo.com.br');
	$mail->addAddress($destino);
    $mail->Subject = $subject.' Acompanhamento!';
	$mail->isHTML(true);
	$mail->Body    = 'Este é um teste de envio de email autenticado!'; // conteudo do email

	if(!$mail->send()) {
		//echo 'Não foi possível enviar a mensagem.<br>';
		echo 'Erro: ' . $mail->ErrorInfo;
		return 0;
	} else {
		return 1;
		echo 'Mensagem enviada.';
	}
	$mail->ClearAllRecipients();