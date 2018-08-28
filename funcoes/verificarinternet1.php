 <meta charset="UTF-8">
 
<?php

$dbc = include 'configdb.php';

if (!$sock = @fsockopen('www.google.com.br', 80, $num, $error, 5)){
    echo 'Sua internet está desconectada!</br>';
    echo 'Será gerado um novo arquivo de texto';
    $arquivo = fopen('meuarquivo.txt','w');
    if ($arquivo == false) die('Não foi possível criar o arquivo.');
    fwrite($arquivo, "Arquivo para testes");
    $arquivo = fclose($arquivo);
}else{
    echo 'Você está conectado a internet!';
}

$sql = "SELECT * FROM cliente";

$result = mysqli_query($dbc, $sql);


while($linha = mysqli_fetch_array($result)){
    echo '<h2>Cliente</h2>';
    echo $linha['idcliente'].'</br>';
    echo $linha['nome'].'</br>';
    echo '<hr/>';
    
}



?>  