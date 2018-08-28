<?php
//De:
$to      = 'willian_xzz@hotmail.com'; 

//Titulo do email:
$subject = 'Testando o envio de email html com duas copias ocultas!';

//Menssagem podendo ser em html:
$message = '
		<html>
			<head>
			 <title>Birthday Reminders for August</title>
			</head>
			<body>
			<p>Here are the birthdays upcoming in August João!</p>
			<table>
			 <tr>
			  <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
			 </tr>
			 <tr>
			  <td>Joe</td><td>3rd</td><td>August</td><td>1970</td>
			 </tr>
			 <tr>
			  <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
			 </tr>
			</table>
			</body>
		</html>
';

// Cabeçalho de configuração:
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";


//Aqui é colocado de quem esta enviando, com Bcc (Cópia oculta para outras pessoas):
$headers .= 'From: Anonymousxz<willianxzzx@gmail.com>' . "\r\n" .
    'Bcc: willian_rosa@estudante.sc.senai.br,willianxzzx@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


//Tentamos enviar e guardamos a resposta na variavel chamada $enviado:
$enviado = mail($to, $subject, $message, $headers);


//Se foi realmente enviado diga que foi, se não, diga que não foi:
if($enviado){
echo '<h1>Enviado!!</h1>';
}else{
    echo '<bold>Houve algum problema.</bold>';
}
?>