
<?php 
//Em outras versões fazer o Zig lembrar tarefas marcadas.

function verificarPesquisa(){ //Fazer com base em nomes, exibir dados dos clientes.
    
    if(isset($_GET['q'])){
       
        $pesquisa = $_GET['q'];
        
        switch ($pesquisa) {
            case 'pesquisa':
                    
                echo "O que está digitado é: "."pesquisa, faça a sua pelo <a href='https://www.google.com.br/?gfe_rd=cr&ei=fku7V8S5NJKq8wfTzYPgAg'>google</a>.";
                break;
           
            case 'cachorro':
                echo "Os cachorro, eles são otimos animais de estimação!";
                echo "<img src='img/cachorro1.jpg'/>";
                break;
            
           case 'gato':
                echo "Os gatos, eles miam muito, são domésticos mas arranhão.";
                echo "<img src='img/gato1.jpg'/>";
                break;
            
           case 'tigre':
                echo "O que está digitado é: "."tigre, CUIDADO CORRA!";
                echo "<img src='img/tigre1.jpg'/>";
                break;
            
           case 'cobra':
                echo "Uma cobra!, espero que você não tenha sido picado, se não vá ao médico RAPIDO!";
                echo "<img src='img/cobra1.jpg'/>"; 
                break;
            
            case 'Willian Rosa Duarte':
                echo "Nome completo: Willian Rosa Duarte ";
                echo "Cpf: 0923032833 ";
                echo "Rg: 121212212 ";
                echo "Situação Financeira: Normal ";
                echo "Estado Civil: Solteiro ";
                echo "<img src='img/person1.jpg'/> ";
                break;
            
            case 'Bruno Bunn':
                echo "Nome completo: Bruno bunn";
                echo "Cpf: 0923032833 ";
                echo "Rg: 121212212 ";
                echo "Situação Financeira: Normal ";
                echo "Estado Civil: Solteiro ";
                echo "<img src='img/person2.jpg'/> ";
                break;
            
             case 'agenda':
                echo "28/08/2016 ";
                echo "Sair para passear, marcar consulta com dentista, estudar sobre programaçao ajax, fazer deveres </br>";
                echo "29/08/2016 ";
                echo "Ir ao cinema ";
                break;
            
            case 'a tocar':
                echo "Tocando musica";
                echo"
                <audio src='music/musica1.mid' controls autoplay loop>
                <p>Seu navegador não suporta o elemento audio </p>
                </audio>";
                break;
            
            
            case 'Quem é você':
                echo "Eu me chamo Zig, fui programado por uma pessoa chamada Willian, com o intuito de ajudar quem precisar.";               
                break;
            
            
            
           case 'ajuda':
                echo "Hmm...você precisa de ajuda, procure por um <a href='https://www.google.com.br/?gfe_rd=cr&ei=fku7V8S5NJKq8wfTzYPgAg'>manual</a> amigo!";
                echo "<a href='https://www.google.com.br/?gfe_rd=cr&ei=fku7V8S5NJKq8wfTzYPgAg'><img src='img/google1.jpg'/></a>";
                break;

            default:
                echo 'Eu não possuo bola de cristal amigo.';
                echo "<img src='img/prever1.jpg'/>";
                break;
        }
        
    }
    
    
}

?>




<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <title></title>
    </head>
    <body>
            <!-- CSS Styles -->
         <style>
           .speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0}
           .speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
           .speech img {float: right; width: 40px }
         </style>

         
         <div class="w3-container w3-margin-top">
         <!-- Search Form --> <!-- Para ficar no mesmo site, é só trocar o action pelo site e a resposta será enviada para o site em formato GET q=resposta -->
         <form id="labnol" method="get" action="">
           <div class="speech">
               <input type="text" name="q" id="transcript" placeholder="Speak" value="<?php if(isset($_GET['q'])){ echo $_GET['q'];}?>"/>
             <img onclick="startDictation()" src="//i.imgur.com/cHidSVu.gif" />
             <input type="submit" value="Enviar" class="w3-btn w3-ripple w3-hover-green w3-margin-top" width="100%"/>
           </div>
         </form>
         <?php verificarPesquisa();?>
         </div>
         
         
         
         
         
         
         
         
         
         
         

         <!-- HTML5 Speech Recognition API -->
         <script>
           function startDictation() {

             if (window.hasOwnProperty('webkitSpeechRecognition')) {

               var recognition = new webkitSpeechRecognition();

               recognition.continuous = false;
               recognition.interimResults = false;

               recognition.lang = "pt-br";
               recognition.start();

               recognition.onresult = function(e) {
                 document.getElementById('transcript').value
                                          = e.results[0][0].transcript;
                 recognition.stop();
                 document.getElementById('labnol').submit();
               };

               recognition.onerror = function(e) {
                 recognition.stop();
               };

             }
           }
         </script>
    </body>
</html>
