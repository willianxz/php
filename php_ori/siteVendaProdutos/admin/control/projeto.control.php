<?php

	##Realiza a chamada do model de projetos##
	require_once "model/projetos.model.php";
	require_once 'model/categorias.model.php';

	class projetosControl{
	
		private $mProjetos;
		private $mCategoria;
		
		##METODO INVOCADO NA INSTANCIA DA CLASSE##
		function __construct(){
			##INSTANCIA A CLASSE CLIENTES PARA ESSE CONTROL##
			$this->mProjetos = new projetosModel();
			$this->mCategoria = new categoriasModel();
		}
		
		public function cadastrar(){
			
			##INICIO VERIFICA SE O POST NÃƒO ESTÃ� VAZIO##
			##VERIFICA SE O USUARIO CLICOU EM ENVIAR DO FORMULARIO##
			if( !empty($_POST) ){
			
				##INICIO ATRIBUIÃ‡ÃƒO DE VALORES AOS ATRIBUTOS DE CLIENTE##
				##MÃ‰TODO MÃ�GICO __set() CHAMADO DE FORMA IMPICITA##
				$this->mProjetos->nome = $_POST['fnome'];
				$this->mProjetos->valor = $_POST['fvalor'];
				$this->mProjetos->autor = $_POST['fautor'];
				$this->mProjetos->descricao = (int) $_POST['fdescricao'];
				$this->mProjetos->id_categoria = (int) $_POST['fid_categoria'];
				##FIM ATRIBUIÃ‡ÃƒO DE VALORES AOS ATRIBUTOS DE CLIENTE##
				
				##REALIZA CHAMADA DA MÃ‰TODO CADASTRAR DO MODEL CLIENTE##
				$res = $this->mProjetos->cadastrar();
				
				##VERIFICA SE A RESPOSTA FOI TRUE OU FALSE
				if($res){
					Operacoes::alertaMsg("Cadastrado com sucesso!");
					Operacoes::redireciona("index.php?control=projetos&acao=listar");
				}else
					Operacoes::alertaMsg("Erro ao cadastrar!");
				
			}
			##FIM VERIFICA SE O POST NÃƒO ESTÃ� VAZIO##
			
			##CASO O USUÃ�RIO FIQUE NESTA PÃ�GINA##
			##REALIZA A INCLUSÃƒO DE VIEW QUE CONTEM O FORMULARIO DE CADASTRO##
			$matrizCategorias = $this->mCategoria->listar();
			include "view/projetos/cadastrar.php";
		
		}
		
		
		/**
		 * Responsavel pela integracao dos dados com layout
		 */
		public function listar(){
			$mdados = $this->mProjetos->listar();
			include "view/projetos/listar.php";
		}
		
		public function editar(){ 
			
			$this->mProjetos->id_projeto = $_GET['id_projeto'];
	
			if( !empty($_POST) ){

				$this->mProjetos->nome = $_POST["fnome"];
				$this->mProjetos->valor = $_POST['fvalor'];
				$this->mProjetos->autor = $_POST['fautor'];
				$this->mProjetos->descricao = $_POST['fdescricao'];
				$this->mProjetos->id_categoria = (int) $_POST['fid_categoria'];
				
				$res = $this->mProjetos->editar();
				if($res){
					Operacoes::alertaMsg("Editado com sucesso");
					Operacoes::redireciona("index.php?control=projeto&acao=listar");
				} else {
					Operacoes::alertaMsg("Erro ao editar!");
				}
				
			}
			
					
			$mdados = $this->mProjetos->visualizar();
			
			//Extrai as informacoes de $mdados
			$projeto = $mdados->fetch(PDO::FETCH_OBJ);
			
			$matrizCategorias = $this->mCategoria->listar();
			include "view/projetos/editar.php";			
			
		}
		
		public function excluir(){
			
			if( !empty($_POST) ){
				$this->mProjetos->id_projeto = $_POST['fid_projeto'];
				
				$res = $this->mProjetos->excluir();
				
				if($res){
					Operacoes::alertaMsg("Deletado com sucesso!");
					Operacoes::redireciona("index.php?control=projeto&acao=listar");
				} else {
					Operacoes::alertaMsg("Erro ao excluir projeto");
				}
			}
			
			//Resgatar da URL o id_projeto
			$this->mProjetos->id_projeto = $_GET['id_projeto'];
			$mdados = $this->mProjetos->visualizar();
			$projeto = $mdados->fetch(PDO::FETCH_OBJ);
			
			include 'view/projetos/excluir.php';
			
		}
	
	}

?>