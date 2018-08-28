<?php
$to      = 'willian_xzz@hotmail.com';
$subject = 'Testando o envio de email com duas copias ocultas!';
$message = 'hello world!';
$headers = 'From: Anonymousxz<willianxzzx@gmail.com>' . "\r\n" .
    'Bcc: willian_rosa@estudante.sc.senai.br,willianxzzx@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$enviado = mail($to, $subject, $message, $headers);

if($enviado){
echo '<h1>Enviado!!</h1>';
}else{
    echo '<bold>Houve algum problema.</bold>';
}
?>