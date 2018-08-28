<?php

	require_once "model/produtos.model.php";
	require_once 'model/categorias.model.php';

	class produtosControl{
	
		private $mProduto;
		private $mCategoria;
		
		
		function __construct(){
			
			$this->mProduto = new produtosModel();
			$this->mCategoria = new categoriasModel();
		}
		
		public function cadastrar(){
			
			
			if( !empty($_POST) ){
			
				
				$this->mProduto->nome = $_POST['fnome'];
				$this->mProduto->quantidade = $_POST['fquantidade'];
				$this->mProduto->valor = $_POST['fvalor'];
				$this->mProduto->descricao =  $_POST['fdescricao'];
				$this->mProduto->id_categoria =  $_POST['fid_categoria'];
				
				
				
				$res = $this->mProduto->cadastrar();
				
				
				if($res){
					Operacoes::alertaMsg("Cadastrado com sucesso!");
					Operacoes::redireciona("index.php?control=produtos&acao=listar");
				}else
					Operacoes::alertaMsg("Erro ao cadastrar!");
				
			}
			
			
			$matrizCategorias = $this->mCategoria->listar();
			include "view/produtos/cadastrarp.php";
		
		}
		
		
		
		public function listar(){
			$mdados = $this->mProduto->listar();
			include "view/produtos/listarp.php";
		}
		
		public function editar(){ 
			
			$this->mProduto->id_produto = $_GET['id_produto'];
	
			if( !empty($_POST) ){

				$this->mProduto->nome = $_POST["fnome"];
				$this->mProduto->quantidade = $_POST['fquantidade'];
				$this->mProduto->valor = $_POST['fvalor'];
				$this->mProduto->descricao = $_POST['fdescricao'];
				$this->mProduto->id_categoria =  $_POST['fid_categoria'];
				
				$res = $this->mProduto->editar();
				if($res){
					Operacoes::alertaMsg("Editado com sucesso");
					Operacoes::redireciona("index.php?control=produtos&acao=listar");
				} else {
					Operacoes::alertaMsg("Erro ao editar!");
				}
				
			}
			
					
			$mdados = $this->mProduto->visualizar();
			
			//Extrai as informacoes de $mdados
			$produto = $mdados->fetch(PDO::FETCH_OBJ);
			
			$matrizCategorias = $this->mCategoria->listar();
			include "view/produtos/editarp.php";			
			
		}
		
		public function excluir(){
			
			if( !empty($_POST) ){
				$this->mProduto->id_produto = $_POST['fid_produto'];
				
				$res = $this->mProduto->excluir();
				
				if($res){
					Operacoes::alertaMsg("Deletado com sucesso!");
					Operacoes::redireciona("index.php?control=produtos&acao=listar");
				} else {
					Operacoes::alertaMsg("Erro ao excluir produto");
				}
			}
			
			//Resgatar da URL o id_produto
			$this->mProduto->id_produto = $_GET['id_produto'];
			$mdados = $this->mProduto->visualizar();
			$produto = $mdados->fetch(PDO::FETCH_OBJ);
			
			include 'view/produtos/excluirp.php';
			
		}
	
	}

?>