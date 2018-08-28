<?php

	require_once "config/banco.class.php";
	require_once "config/operacoes.php";

?>

<!Doctype html>
<html>
	<head>
		<title>Modelo MVC</title>
		<meta charset="utf8" />
		<!-- FAVICON -->
		<link rel="shortcut" href="favicon.ico" />
		
		<!-- CSS -->
		<link rel="stylesheet" href="css/estilo.css" />
		
		<!-- JS -->
		<script src="js/script.js" ></script>
	</head>
	
	<body>
	
		<div id="menu_horizontal">
			<a href="index.php">Inicio</a>
			<a href="index.php?control=clientes&acao=cadastrar">Novo Cliente</a>
			<a href="index.php?control=clientes&acao=listar">Listar Clientes</a>
			<a href="index.php?control=funcionarios&acao=cadastrar">Novo Funcionario</a>
			<a href="index.php?control=funcionarios&acao=listar">Listar Funcionarios</a>
			<a href="index.php?control=produtos&acao=cadastrar">Novo Produto</a>
			<a href="index.php?control=produtos&acao=listar">Listar Produtos</a>
		</div>
		
		
		
		
		<!-- INSTANCIA DA CLASSE CONTROL -->
		<?php
		
			//Resgata parametros da URL quando existirem
			$control = (isset($_GET['control'])) ? $_GET['control'] : null;

			//Resgata a acao a ser realiza com o control
			$acao = (isset($_GET['acao'])) ? $_GET['acao'] : null;
			
			if( $control!=null && $acao!=null && file_exists("control/$control.control.php") ){
			
				//include da classe control
				require_once "control/$control.control.php";
			
				//Instancia da classe control
				$control .= "Control";
				$controlObj = new $control();
			
				//chama método do control cadastrar
				$controlObj->$acao();
				
			} else {
				include 'inicio.php';				
			}
			
		?>
		
		
	
	</body>
	
</html>