<?php

header("Content-Type: text/html; charset=UTF-8",true); // PARA NÃO APARECEREM CARACTERES ESTRANHOS!

//Esse robo consegue pegar toda a pagina de um site,colocala em um local e consegue pegar apenas o necessario.

$ch = curl_init(); // Iniciamos a biblioteca Curl.
curl_setopt($ch, CURLOPT_URL, "http://globo.com"); // Aqui pedimos para ir até o site globo.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);// Aqui pedimos para seguir o redirecionamento, caso mude de url o site.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);// Aqui fazemos a requisição para podermos guardar o site inteiro.
$resultado = curl_exec($ch);//Iremos executar o Curl 

preg_match('/<title>(.*?)<\/title>/i', $resultado,$titulo); //Aqui transformamos todo o site em um Array e pegamos apenas o  que queremos.
print_r($titulo);

// Usar esses @ ali é melhor para pegar o conteudo.
preg_match('@<div class="conteudo"><h2>(.*?)</h2></div>@', $resultado,$conteudo); //Aqui transformamos todo o site em um Array e pegamos apenas o  que queremos.
print_r($conteudo[0]);


curl_close($ch);//Iremos fechar o Curl


?>