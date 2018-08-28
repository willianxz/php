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
        
       $query = "SELECT * FROM cliente";
       
       //$query = "DELETE FROM cliente WHERE id='4'"; // Lembre-se que a QUERY DELETE NÃO PRECISA FORNECER A COLUNA!!
       
      
         $result = mysqli_query($conectar, $query); //Executamos a query
       
         while($test = mysqli_fetch_assoc($result)){
            
             $query2 = "DELETE FROM cliente WHERE id='".$test['id']."'";
             
             echo 'Id:          Nome: <br/>';
             echo $test['id'].'  '. $test['nome'];
             echo '<hr/>';
             
             $result2 = mysqli_query($conectar, $query2);     
             
             //Se não tiver dados para deletar irá resultar em um erro,devido a variavel acima.
         } 
           
          if($result2){
                 echo 'Todos os dados foram deletados!';
             }else{
                 echo 'Não foi possivel deletar do banco!';
             }
      
       
       mysqli_close($conectar); // Fechamos o banco de dados.
        
        ?>
    </body>
</html>
