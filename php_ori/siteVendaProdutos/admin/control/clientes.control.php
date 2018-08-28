<?php

	##Realiza a chamada do model de clientes##
	require_once "model/clientes.model.php";
	require_once 'model/cidades.model.php';

	class clientesControl{
	
		private $mCliente;
		private $mCidade;
		
		##METODO INVOCADO NA INSTANCIA DA CLASSE##
		function __construct(){
			##INSTANCIA A CLASSE CLIENTES PARA ESSE CONTROL##
			$this->mCliente = new clientesModel();
			$this->mCidade = new cidadesModel();
		}
		
		public function cadastrar(){
			
			##INICIO VERIFICA SE O POST NÃƒO ESTÃ� VAZIO##
			##VERIFICA SE O USUARIO CLICOU EM ENVIAR DO FORMULARIO##
			if( !empty($_POST) ){
			
				##INICIO ATRIBUIÃ‡ÃƒO DE VALORES AOS ATRIBUTOS DE CLIENTE##
				##MÃ‰TODO MÃ�GICO __set() CHAMADO DE FORMA IMPICITA##
				$this->mCliente->nome = $_POST['fnome'];
				$this->mCliente->data_nascimento = $_POST['fdata_nascimento'];
				$this->mCliente->renda = $_POST['frenda'];
				$this->mCliente->dependentes = (int) $_POST['fdependentes'];
				$this->mCliente->id_cidade = (int) $_POST['fid_cidade'];
				##FIM ATRIBUIÃ‡ÃƒO DE VALORES AOS ATRIBUTOS DE CLIENTE##
				
				##REALIZA CHAMADA DA MÃ‰TODO CADASTRAR DO MODEL CLIENTE##
				$res = $this->mCliente->cadastrar();
				
				##VERIFICA SE A RESPOSTA FOI TRUE OU FALSE
				if($res){
					Operacoes::alertaMsg("Cadastrado com sucesso!");
					Operacoes::redireciona("index.php?control=clientes&acao=listar");
				}else
					Operacoes::alertaMsg("Erro ao cadastrar!");
				
			}
			##FIM VERIFICA SE O POST NÃƒO ESTÃ� VAZIO##
			
			##CASO O USUÃ�RIO FIQUE NESTA PÃ�GINA##
			##REALIZA A INCLUSÃƒO DE VIEW QUE CONTEM O FORMULARIO DE CADASTRO##
			$matrizCidades = $this->mCidade->listar();
			include "view/clientes/cadastrar.php";
		
		}
		
		
		/**
		 * Responsavel pela integracao dos dados com layout
		 */
		public function listar(){
			$mdados = $this->mCliente->listar();
			include "view/clientes/listar.php";
		}
		
		public function editar(){ 
			
			$this->mCliente->id_cliente = $_GET['id_cliente'];
	
			if( !empty($_POST) ){

				$this->mCliente->nome = $_POST["fnome"];
				$this->mCliente->data_nascimento = $_POST['fdata_nascimento'];
				$this->mCliente->renda = $_POST['frenda'];
				$this->mCliente->dependentes = $_POST['fdependentes'];
				$this->mCliente->id_cidade = (int) $_POST['fid_cidade'];
				
				$res = $this->mCliente->editar();
				if($res){
					Operacoes::alertaMsg("Editado com sucesso");
					Operacoes::redireciona("index.php?control=clientes&acao=listar");
				} else {
					Operacoes::alertaMsg("Erro ao editar!");
				}
				
			}
			
					
			$mdados = $this->mCliente->visualizar();
			
			//Extrai as informacoes de $mdados
			$cliente = $mdados->fetch(PDO::FETCH_OBJ);
			
			$matrizCidades = $this->mCidade->listar();
			include "view/clientes/editar.php";			
			
		}
		
		public function excluir(){
			
			if( !empty($_POST) ){
				$this->mCliente->id_cliente = $_POST['fid_cliente'];
				
				$res = $this->mCliente->excluir();
				
				if($res){
					Operacoes::alertaMsg("Deletado com sucesso!");
					Operacoes::redireciona("index.php?control=clientes&acao=listar");
				} else {
					Operacoes::alertaMsg("Erro ao excluir cliente");
				}
			}
			
			//Resgatar da URL o id_cliente
			$this->mCliente->id_cliente = $_GET['id_cliente'];
			$mdados = $this->mCliente->visualizar();
			$cliente = $mdados->fetch(PDO::FETCH_OBJ);
			
			include 'view/clientes/excluir.php';
			
		}
	
	}

?>