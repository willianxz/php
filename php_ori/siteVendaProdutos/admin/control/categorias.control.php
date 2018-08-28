<?php

	require_once "model/categorias.model.php";
	
	class categoriasControl{
		
		private $modelCategorias;
		
		public function __construct(){
			//Instancia da classe model
			$this->modelCategorias = new categoriasModel();
		}
		
		public function cadastrarAction(){
			
			if(!empty($_POST)){
				$this->modelCategorias->nome = $_POST['fnome'];
				$res = $this->modelCategorias->cadastrar();
				if($res==true){
					header("location: index.php?control=categorias&acao=listar");
				} else {
					echo "<p class='erro'>Erro ao cadastrar</p>";
				}
			}
			
			include "view/categorias/cadastrar.php";
			
		}
		
		
		public function listarAction(){
			
			//Resgatar a lista de categorias do banco
			$dados = $this->modelCategorias->listar();
			//Incluir o html para listagem dos dados
			include "view/categorias/listar.php";
		}
		
		public function editarAction(){
			
			//Inserir o id_categoria no objeto
			$this->modelCategorias->id_categoria = $_GET['id_categoria'];
			
			if( !empty($_POST) ){
				$this->modelCategorias->nome = $_POST['fnome'];
				$this->modelCategorias->editar();
				header("location: index.php?control=categorias&acao=listar");
			}
			
			//Resgatar os dados da categoria
			$dados = $this->modelCategorias->ler();
			$categoria = $dados->fetch(PDO::FETCH_OBJ);
			
			//Incluir o foirmulario de edicao
			include "view/categorias/editar.php";			
		}
		
		public function excluirAction(){
			
			//Inserir o id_categoria no objeto
			$this->modelCategorias->id_categoria = $_GET['id_categoria'];
			
			if( !empty($_POST) ){
				$res = $this->modelCategorias->excluir();
				if($res == true)
					header("location: index.php?control=categorias&acao=listar");				
				else
					echo "<p class='erro'>Erro ao excluir!</p>";
			}
			
			//Resgatar os dados da categoria
			$dados = $this->modelCategorias->ler();
			$categoria = $dados->fetch(PDO::FETCH_OBJ);
			
			//Incluir o foirmulario de edicao
			include "view/categorias/excluir.php";
		}
		
	}

?>