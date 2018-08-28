<?php


header("Content-Type: text/html; charset=UTF-8",true); // PARA NÃO APARECEREM CARACTERES ESTRANHOS!

//Esse robo consegue pegar toda a pagina de um site.

$ch = curl_init(); // Iniciamos a biblioteca Curl.
curl_setopt($ch, CURLOPT_URL, "http://globo.com"); // Aqui pedimos para ir até o site globo.
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);// Aqui pedimos para seguir o redirecionamento, caso mude de url o site.
curl_exec($ch);//Iremos executar o Curl
curl_close($ch);//Iremos fechar o Curl



?>