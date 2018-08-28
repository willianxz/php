<?php

// ATENÇÃO SE FOR COLOCADO A SESSÃO_START() ANTES DOS INCLUDES DARÁ UM ERRO!!!!


  // carrega a definição da classe Cliente
  include_once("cliente.php");


  // inicia a sessão
  session_start();
  

 
  
  // carrega a instância da classe Cliente que está
  // na sessão
  $cliente = $_SESSION["cliente"];

  // Obtém o nome do cliente
  $nome = $cliente->obter_nome();

  // Exibe o resultado
  echo "O nome do cliente é: " . $nome;
?>