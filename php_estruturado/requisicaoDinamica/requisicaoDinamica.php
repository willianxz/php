<?php //Perceba que desse modo não é necessario ter que redirecionar o usuario para a pagina...
 

/*
$gmtDate = gmdate("D, d M Y H:i:s");

header("Expires: {$gmtDate} GMT");
header("Last-Modified: {$gmtDate} GMT");
header("Cache-Control: no-cache, must-revalidate"); //Esses headeres aqui não importa..ele executa normalmente sem isso.
header("Pragma: no-cache");
header("Content-Type: text/html; charset=utf-8");*/
if(isset($_GET['insere'])){
    echo "<p>Este é o conteudo requisitado para demonstrar a inserção</p>";
    echo "<a href='https://s-media-cache-ak0.pinimg.com/originals/49/1c/d3/491cd3783c388a92f2696d80a6f0692f.jpg'><img src='https://s-media-cache-ak0.pinimg.com/originals/49/1c/d3/491cd3783c388a92f2696d80a6f0692f.jpg'/></a>";
    
}




?>