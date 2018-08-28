<?php

// ATENÇÃO SE FOR COLOCADO A SESSÃO_START() ANTES DOS INCLUDES DARÁ UM ERRO!!!!
// 
// 
  // carrega a definição da classe Cliente
  require_once("cliente.php");
  
  // inicia a sessão
  session_start();
  
  // Cria uma instância da classe Cliente
  $cliente = new Cliente();

  // Define o nome do cliente
  $cliente->definir_nome("Osmar J. Silva");

  // coloca o objeto na sessão
  $_SESSION["cliente"] = $cliente;
  
  echo "Acesse testes2.php para obter os dados gravados. <a href='testes2.php'>Clique aqui </a>";
?>