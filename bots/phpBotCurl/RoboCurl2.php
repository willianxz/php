<?php
header("Content-Type: text/html; charset=UTF-8",true); // PARA NÃO APARECEREM CARACTERES ESTRANHOS!
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RoboCurl2
 *
 * @author Willian
 */
class RoboCurl2 {
    //put your code here
    
    
    private $url;
    private $busca;
    
    
  
    
    function __construct($url, $busca) {
        $this->url = $url;
        $this->busca = $busca;
    }

    function getUrl() {
        return $this->url;
    }

    function getBusca() {
        return $this->busca;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setBusca($busca) {
        $this->busca = $busca;
    }


    function BuscarTexto(){
        $ch = curl_init(); // Iniciamos a biblioteca Curl.
        curl_setopt($ch, CURLOPT_URL, $this->url); // Aqui pedimos para ir até o site globo.
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);// Aqui pedimos para seguir o redirecionamento, caso mude de url o site.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);// Aqui fazemos a requisição para podermos guardar o site inteiro.
        $resultado = curl_exec($ch);//Iremos executar o Curl 

        preg_match($this->busca, $resultado,$titulo); //Aqui transformamos todo o site em um Array e pegamos apenas o  que queremos.
        curl_close($ch);
        return $titulo;
    }
    
    function BuscarTexto2($url,$busca){
        $ch = curl_init(); // Iniciamos a biblioteca Curl.
        curl_setopt($ch, CURLOPT_URL, $url); // Aqui pedimos para ir até o site globo.
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);// Aqui pedimos para seguir o redirecionamento, caso mude de url o site.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);// Aqui fazemos a requisição para podermos guardar o site inteiro.
        $resultado = curl_exec($ch);//Iremos executar o Curl 

        preg_match($busca, $resultado,$titulo); //Aqui transformamos todo o site em um Array e pegamos apenas o  que queremos.
        curl_close($ch);
        return $titulo;
    }
    
}

$robo2 = new RoboCurl2('http://globo.com', '/<title>(.*?)<\/title>/i');
print_r ($robo2->BuscarTexto());

echo '<hr/>';

print_r($robo2->BuscarTexto2('http://globo.com', '@<div class="conteudo"><h2>(.*?)</h2></div>@')[0]);

echo '<hr/>';

print_r($robo2->BuscarTexto2('http://www.angeloni.com.br/super/produto?grupo=4039&idProduto=1268601', '@<span class="valorPrice">(.*?)<span class="decimais">(.*?)</span></span>@'));

        
     