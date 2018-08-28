<?php

header("Content-type: text/html; charset=utf-8");

//$Nome		= $_POST["Nome"];	// Pega o valor do campo Nome
$Fone		= $_POST["Fone"];	// Pega o valor do campo Telefone
$Email		= $_POST["Email"];	// Pega o valor do campo Email
$Nome       = strstr($Email, '@', true);
$Mensagem	= $_POST["Mensagem"];	// Pega os valores do campo Mensagem
// Para enviar o ARQUIVO, temos que fazer o upload
//conforme exemplo abaixo.




// Variável que junta os valores acima e monta o corpo do email

//$Vai 		= "Nome: $Nome\n\nE-mail: $Email\n\nTelefone: $Fone\n\nMensagem: $Mensagem\n";
$Vai = 'Segue em anexo o meu currículo, aguardo seu retorno, dês de já grato.';

require_once("phpmailer/class.phpmailer.php");

define('GUSER', 'queromaisvagas@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', 'ockr1055');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'tls';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;	
	//$mail->AddReplyTo('queromaisvagas@gmail.com', 'Email de Bcc');
	$mail->AddAddress($para);
	//$mail->AddAttachment('teste.pdf'); //Vamos tentar enviar esse anexo.
	$mail->AddAttachment( $_FILES['arquivo']['tmp_name'], $_FILES['arquivo']['name']);
	$mail->addBcc("willianxzzx@gmail.com");
	//$mail->addBcc("willian_rosa@estudante.sc.senai.br");	
	//$mail->addBcc("willian_xzz@hotmail.com");
	$mail->IsHTML(true);
	$mail->CharSet = "utf-8";


	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}

// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
//o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

echo $Nome;
 if (smtpmailer('queromaisvagas@gmail.com', $Email, $Nome, 'Solicitação de vaga de emprego', $Vai)) {

	//Header("location:http://www.dominio.com.br/obrigado.html"); // Redireciona para uma página de obrigado.
 	echo 'Foi enviado com sucesso!';
}
if (!empty($error)) echo $error;
?>