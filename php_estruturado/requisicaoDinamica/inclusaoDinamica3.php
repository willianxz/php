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
        
        <style>
            #sucesso{
                color: green;
            }
            
            #falha{
                color: red;
            }
            
            #menssagem{
                width: 100%;
                height:auto;
            }
            
        </style>
        
    </head>
    <body>
        
         <div id="menssagem">
            <?php include "requisicaoDinamica3.php";?>
        </div>
        
         <form action="" method="get">
            
            Nome: <input type="text" name="nome"/></br>
            Sobrenome: <input type="text" name="sobrenome"/>
            <input type="submit"/>                  
            
        </form>
        
        <a href="?insere=ok" id="click">Requisitar uma nave</a>
        
        
       
    </body>
</html>
