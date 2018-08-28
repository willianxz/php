 <meta charset="UTF-8">
 
<?php

$hostname = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'testarsql';





$coneccao = mysqli_connect($hostname, $usuario, $senha, $database);


if($coneccao){
   return $coneccao;
}



?>
