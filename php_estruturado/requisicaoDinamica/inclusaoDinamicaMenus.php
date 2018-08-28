
<?php


if(isset($_GET['pagina'])){
    
    $pagina = $_GET['pagina'];
    
    switch ($pagina) {
        case 'lancamentos':
            include('menus/lancamento.html');
            break;
        
        case 'bancodados':
            include('menus/bancodados.html');
            break;
        
        case 'programacao':
            include('menus/programacao.html');
            break;
        
        case 'internet':
            include('menus/internet.html');
            break;
        
        case 'todas':
            include('menus/todas.html');
            break;

    }    
    
    
}



?>