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
        
       $query = "SELECT * FROM cliente"; // Selecionamos tudo da tabela cliente
             
        $result = mysqli_query($conectar, $query); //Executamos a query
       
         while($coluna = mysqli_fetch_assoc($result)){ //Devemos transformar toda a tabela em um array com essa função
           
          echo $coluna['nome'].'<hr/>'; //Mostramos a coluna que queremos mostrar.
      
         }
         mysqli_close($conectar); // Fechamos o banco de dados.
        
        ?>
    </body>
</html>
