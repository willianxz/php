<?php

session_start();
		
	
	require_once "config/banco.class.php";
	require_once "config/operacoes.php";
	//Resgata parametros da URL quando existirem
			$control = (isset($_GET['control'])) ? $_GET['control'] : null;

			//Resgata a acao a ser realiza com o control
			$acao = (isset($_GET['acao'])) ? $_GET['acao'] : null;
			

	if (1==1) {

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
		<div id="central">
		<div id="geral">
			<div id="topo">
				
			</div>
			<div id="menu1">
				<ul>

					<li><a href="index.php"> Inicio </a> </li>
					<li><a href="index.php?control=categorias&acao=cadastrar"> Nova Categoria </a> </li>
					<li><a href="index.php?control=categorias&acao=listar"> Listar </a> </li>	
					<li><a href="index.php?control=projeto&acao=cadastrar"> Novo Projeto </a> </li>
					<li><a href="index.php?control=projeto&acao=listar"> Listar Projeto </a> </li>
				</ul>
			</div>
			<div id="menu2">
				
			</div>
			<div id="menu3">
				
			</div>

			<div id="conteudo">
				
				<!-- INSTANCIA DA CLASSE CONTROL -->
				<?php
				
			$pagina= (isset($_GET['pagina'] ) ) ? $_GET['pagina'] :null;
					
					if( $control!=null && $acao!=null && file_exists("control/$control.control.php") ){
					
						//Verificar qual objeto está sendo chamado
						if( $control == "categorias" ){
							
							require_once "control/categorias.control.php";	
							$control = new categoriasControl();
							# oque ele vai fazer
							if( $acao == "cadastrar" ){
								$control->cadastrarAction();
							} elseif($acao=="listar"){
								$control->listarAction();
							} elseif( $acao == "editar" ){
								$control->editarAction();
							} elseif( $acao == "excluir" ){
								$control->excluirAction();
							}
							
						}elseif ($control == "projeto") {
							require_once "control/projeto.control.php";	
							$control = new projetosControl();
							# oque ele vai fazer
							if( $acao == "cadastrar" ){
								$control->cadastrar();
							} elseif($acao=="listar"){
								$control->listar();
							} elseif( $acao == "editar" ){
								$control->editar();
							} elseif( $acao == "excluir" ){
								$control->excluir();
							}
						}elseif ($control == "clientes") {
							require_once "control/clientes.control.php";	
							$control = new clientesControl();
							# oque ele vai fazer
							if( $acao == "cadastrar" ){
								$control->cadastrar();
							} elseif($acao=="listar"){
								$control->listar();
							} elseif( $acao == "editar" ){
								$control->editar();
							} elseif( $acao == "excluir" ){
								$control->excluir();
							}
						}
						
						
					} else {
						include 'inicio.php';				
					}
					
			?>
			
		
		</div>
	
		<div id="rodape">
			Direitos Reservado &copy; <?php  echo date("Y");  ?>
		</div>
	</div>
	</div>
	</body>
	
</html>

<?php 



}else{
	Operacoes::redireciona("login.php");
}

	 ?>