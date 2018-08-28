<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title></title>
    </head>
    <body>
        <?php
        
        $hostname = 'localhost';
        $usuario = 'root';
        $senha = '';
        $nomedb = 'cadastro';
        
        $conexao = mysqli_connect($hostname, $usuario, $senha, $nomedb);
        
        if($conexao){
            return $conexao;
        }else{
            return 'Não foi possivel conectar com o banco,verifique o arquivo conectardb.php e altere os dados fornecidos.';
        }
        
        
        
        
        ?>
    </body>
</html>
