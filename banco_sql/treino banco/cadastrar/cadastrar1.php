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
        
        //$hostname = 'localhost';
        //$usuario = 'root';
        //$senha  = '';               //Entra com os dados de conex�o com o banco
        //$nomebanco = 'cadastro';
        
       // $conectar = mysqli_connect($hostname, $usuario, $senha, $nomebanco)or die('Erro ao conectar com o banco'); // Conectar com o banco
        
       //Essa parte do c�digo virou um arquivo de conex�o onde � chamado pelo include.
        
       $conectar = include '../arqconexaobanco/conectardb.php'; // Chamamos o arquivo de conex�o
       
       
        $query = "INSERT INTO cliente(nome)VALUES ('rildo')"; //Faz uma query de INSERT,N�O UTILIZAR O ID NUMA INSER��O,POIS � AUTO INCREMENT!!
        
        $result = mysqli_query($conectar, $query); //Executa a query
        
        if($result){ // Verifica se realmente funcionou
            echo 'cadastrado com sucesso!';
        }else{
            echo 'N�o foi possivel cadastrar';
        }
        
        mysqli_close($conectar); // Fecha a conex�o com o banco.
        
        
        //OBS: NA QUERY N�O DEVE CONTER O ID,QUANDO � AUTO INCREMENT!!!!!! SE N�O IR� DAR ERRO!
        
        ?>
    </body>
</html>
