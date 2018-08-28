<?php   //Perceba que desse modo não é necessario ter que redirecionar o usuario para a pagina...

if(isset($_GET['insere'])){
    echo "<p>Este é o conteudo requisitado para demonstrar a inserção</p>";
    echo "<a href='https://s-media-cache-ak0.pinimg.com/originals/49/1c/d3/491cd3783c388a92f2696d80a6f0692f.jpg'><img src='https://s-media-cache-ak0.pinimg.com/originals/49/1c/d3/491cd3783c388a92f2696d80a6f0692f.jpg'/></a>";
    
}


if(isset($_GET['nome']) && isset($_GET['sobrenome'])){
    
   $nome = $_GET['nome'];
   $sobrenome = $_GET['sobrenome'];
   
   if(!empty($nome) && !empty($sobrenome)){
       echo "<p id='sucesso'>Dados enviados com sucesso!</p>"; //Poderia fazer um cadastramento completo no banco.
   }else{
       echo "<p id='falha'>Preencha todos os dados!</p>";
   }
    
    
}





?>
