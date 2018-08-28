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
               $conectar = include '../arqconexaobanco/conectardb.php'; // Chamamos o arquivo de conexão

               $query = "UPDATE  cliente SET nome='will' WHERE id='1'"; //Utilize o where para alterar apenas o necessario.
               
               //$query = "UPDATE  cliente SET nome='will'"; SEM A CAUSA WHERE IRÁ ALTERAR TODOS OS DADOS DA COLUNA!
               
             
                   $result = mysqli_query($conectar, $query); // Executamos a query!
                   
                   if($result){
                   echo 'Atualizado com sucesso!'; //informamos o que aconteceu
                   }else{
                   echo 'Não foi possivel atualizar os dados!'; 
                   }
               
                mysqli_close($conectar); // Fechamos o banco!
        ?>
    </body>
</html>
