<?php 

$frutas = array('laranja','maça','jabuticaba');


$sorte = rand(0, 2);


?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>img{ width: 100%;height: auto;} div{width: 500px; height:500px;}</style>
    </head>
    <body>
        <h1>Neste exemplo mostraremos como funcionaria um sorteio: </h1>
        <a href="?fruta=<?php echo $frutas[$sorte] ?>"  id="click">Clique aqui para sortear, requisitando o arquivo requisicaoDinamica2.php</a>
        
        <div id="insere_aqui">
            <?php include "requisicaoDinamica2.php";?><!-- Quando houver algum get, será exibido algo. -->
        </div>
    </body>
</html>
