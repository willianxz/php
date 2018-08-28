        <?php //Perceba que desse modo não é necessario ter que redirecionar o usuario para a pagina...
 

/*
$gmtDate = gmdate("D, d M Y H:i:s");

header("Expires: {$gmtDate} GMT");
header("Last-Modified: {$gmtDate} GMT");
header("Cache-Control: no-cache, must-revalidate"); //Esses headeres aqui não importa..ele executa normalmente sem isso.
header("Pragma: no-cache");
header("Content-Type: text/html; charset=utf-8");*/
if(isset($_GET['fruta'])){ //Se existir um GET DE FRUTA, FAÇA:
    
    $frutaSelecionada = $_GET['fruta'];
    
    
    switch ($frutaSelecionada) {
        case 'laranja':
                echo '<h2>A fruta sorteada foi: Laranja</h2>';
                echo "<p>Este é o conteudo requisitado para demonstrar a inserção</p>";
                echo "<a href='http://www.mundoboaforma.com.br/wp-content/uploads/2015/02/Laranja-Pera-Organica.jpg'><img src='http://www.mundoboaforma.com.br/wp-content/uploads/2015/02/Laranja-Pera-Organica.jpg'/></a>";
         break;
        
        case 'maça':
                echo '<h2>A fruta sorteada foi: Maça</h2>';
                echo "<p>Este é o conteudo requisitado para demonstrar a inserção</p>";
                echo "<a href='http://www.belezaesaude.net.br/fotos/mega_noticias/mid/157.jpg'><img src='http://www.belezaesaude.net.br/fotos/mega_noticias/mid/157.jpg'/></a>";
         break;
     
         case 'jabuticaba':
                echo '<h2>A fruta sorteada foi: Jabuticaba</h2>';
                echo "<p>Este é o conteudo requisitado para demonstrar a inserção</p>";
                echo "<a href='http://www.flora.avph.com.br/jpg/jabuticabeira4.jpg'><img src='http://www.flora.avph.com.br/jpg/jabuticabeira4.jpg'/></a>";
         break;

        default:
            echo 'Você descobriu uma falha no sistema, parabéns meu amigo!';
            echo "<a href='http://4.bp.blogspot.com/-tJQgXYlW40o/UAmxbv70pbI/AAAAAAAAAEI/GNndSZy2toQ/s1600/besouro+1.gif'><img src='http://4.bp.blogspot.com/-tJQgXYlW40o/UAmxbv70pbI/AAAAAAAAAEI/GNndSZy2toQ/s1600/besouro+1.gif'/></a>";
            break;
    }
    
}




?>