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
        
       $query = "DELETE FROM cliente WHERE id='4'"; // Lembre-se que a QUERY DELETE NÃO PRECISA FORNECER A COLUNA!!
       
       //$query = "DELETE FROM cliente WHERE id='4' AND nome='testar'"; // Para adicionar mais de uma causa,utilize o AND
       
       $result = mysqli_query($conectar, $query); //Executamos a query
       
       if($result){
           echo 'Deletado com sucesso!'; //Exibimos uma menssagem
       }else{
           echo 'Não foi possivel deletar este usuario!';
       }
       
       mysqli_close($conectar); // Fechamos o banco de dados.
        
        ?>
    </body>
</html>
