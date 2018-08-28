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
    </head>
    <body>
       
        
        <h1>Empresa tal</h1>
        
        
        <div id="menu">
            <li><a href='?pagina=lancamentos'>Lançamentos</a></li>
            <li><a href='?pagina=bancodados'>Banco de Dados</a></li>
            <li><a href='?pagina=programacao'>Programação</a></li>
            <li><a href='?pagina=internet'>Internet</a></li>
            <li><a href='?pagina=todas'>Todas as categorias</a></li>
        </div>
        
        
        <div id="conteudo">
            <?php include('inclusaoDinamicaMenus.php'); ?>
        </div>
        
        
        
        
    </body>
</html>
