<?php

	require_once "model/funcionarios.model.php";
	require_once "model/cidades.model.php";
	
	class funcionariosControl{
		
		private $mFuncionario;
		private $mCidade;
		
		function __construct(){
			
			$this->mFuncionario = new funcionariosModel();
			$this->mCidade = new cidadesModel();
		}
		
		public function cadastrar(){
			
			if( !empty($_POST) ){
				
				$this->mFuncionario->nome = $_POST['fnome'];
				$this->mFuncionario->data_nascimento = $_POST['fdata_nascimento'];
				$this->mFuncionario->salario = $_POST['fsalario'];
				$this->mFuncionario->cargo = $_POST['fcargo'];
				$this->mFuncionario->id_cidade = (int) $_POST['fid_cidade'];
				
				$res = $this->mFuncionario->cadastrar();
				
				if($res){
					Operacoes::alertaMsg("Cadastrado com sucesso!");
					Operacoes::redireciona("index.php?control=funcionarios&acao=listar");
				}else
					Operacoes::alertaMsg("Erro ao cadastrar!");
			}
			
			$matrizCidades = $this->mCidade->listar();
			include "view/funcionarios/cadastrar.php";
			
		}
		
			public function listar (){
				$mdados = $this->mFuncionario->listar();
				include "view/funcionarios/listar.php";
				
			}
			
			public function editar(){
				$this->mFuncionario->id_funcionario = $_GET['id_funcionario'];
				
				if( !empty($_POST) ){
				
					$this->mFuncionario->nome = $_POST["fnome"];
					$this->mFuncionario->data_nascimento = $_POST['fdata_nascimento'];
					$this->mFuncionario->salario = $_POST['fsalario'];
					$this->mFuncionario->cargo = $_POST['fcargo'];
					$this->mFuncionario->id_cidade = (int) $_POST['fid_cidade'];
				
					$res = $this->mFuncionario->editar();
					if($res){
						Operacoes::alertaMsg("Editado com sucesso");
						Operacoes::redireciona("index.php?control=funcionarios&acao=listar");
					} else {
						Operacoes::alertaMsg("Erro ao editar!");
			}
	}
	
				$mdados = $this->mFuncionario->visualizar();
				
				$funcionario = $mdados->fetch(PDO::FETCH_OBJ);
					
				$matrizCidades = $this->mCidade->listar();
				include "view/funcionarios/editar.php";
					
				}
				
				public function excluir(){
						
					if( !empty($_POST) ){
						$this->mFuncionario->id_funcionario = $_POST['fid_funcionario'];
				
						$res = $this->mFuncionario->excluir();
				
						if($res){
							Operacoes::alertaMsg("Deletado com sucesso!");
							Operacoes::redireciona("index.php?control=funcionarios&acao=listar");
						} else {
							Operacoes::alertaMsg("Erro ao excluir cliente");
						}
					}
					$this->mFuncionario->id_funcionario = $_GET['id_funcionario'];
					$mdados = $this->mFuncionario->visualizar();
					$funcionario = $mdados->fetch(PDO::FETCH_OBJ);
						
					include 'view/funcionarios/excluir.php';
						
					}
				}
					
?>
