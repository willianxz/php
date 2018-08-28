<?php

function validarEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


// Define uma variável para testar o validador
$input = "juliana@bol.com.br";
// Faz a verificação usando a função
if(validarEmail($input)){
    echo 'Email valido!';
}else{
    echo 'Email falso!';
}

?>