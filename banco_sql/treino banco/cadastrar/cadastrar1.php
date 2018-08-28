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
        //$senha  = '';               //Entra com os dados de conexão com o banco
        //$nomebanco = 'cadastro';
        
       // $conectar = mysqli_connect($hostname, $usuario, $senha, $nomebanco)or die('Erro ao conectar com o banco'); // Conectar com o banco
        
       //Essa parte do código virou um arquivo de conexão onde é chamado pelo include.
        
       $conectar = include '../arqconexaobanco/conectardb.php'; // Chamamos o arquivo de conexão
       
       
        $query = "INSERT INTO cliente(nome)VALUES ('rildo')"; //Faz uma query de INSERT,NÃO UTILIZAR O ID NUMA INSERÇÃO,POIS É AUTO INCREMENT!!
        
        $result = mysqli_query($conectar, $query); //Executa a query
        
        if($result){ // Verifica se realmente funcionou
            echo 'cadastrado com sucesso!';
        }else{
            echo 'Não foi possivel cadastrar';
        }
        
        mysqli_close($conectar); // Fecha a conexão com o banco.
        
        
        //OBS: NA QUERY NÃO DEVE CONTER O ID,QUANDO É AUTO INCREMENT!!!!!! SE NÃO IRÁ DAR ERRO!
        
        ?>
    </body>
</html>
