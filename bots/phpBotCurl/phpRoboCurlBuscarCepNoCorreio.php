<?php


header("Content-Type: text/html; charset=UTF-8",true); // PARA NÃO APARECEREM CARACTERES ESTRANHOS!

function get_endereco($cep){

 	//Formatar o cep removendo caracteres não numericos:
	
	$cep = preg_replace("/[^0-9]/","",$cep);
	$url = "http://viacep.com.br/ws/$cep/xml";
	
	$xml = simplexml_load_file($url);
	return $xml;

}


$endereco = (get_endereco("37500405"));

echo '<h1>O que veio do objeto endereço: </h1>';
print_r($endereco);
echo '<hr/>';


echo '<h2>Cep: '.$endereco->cep.'</h2>';
echo '<h2>Logradouro: '.$endereco->logradouro.'</h2>';
echo '<h2>Complemento: '.$endereco->complemento.'</h2>';
echo '<h2>Bairro: '.$endereco->bairro.'</h2>';
echo '<h2>Localidade: '.$endereco->localidade.'</h2>';
echo '<h2>Uf: '.$endereco->uf.'</h2>';


//echo  $endereco->logradouro;
//echo  $endereco->bairro;



?>