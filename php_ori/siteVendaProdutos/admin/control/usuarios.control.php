<?php 

	require_once 'model/usuarios.model.php';
	


	
	class usuariosControl
	{

		private $mUsuarios;

		function __construct()
		{
			$this->mUsuarios = new usuariosModel();

		}





		public function cadastrar(){
			
			if( !empty($_POST) ){


				
				$this->mUsuarios->nome = $_POST['fnome'];
				$this->mUsuarios->email = $_POST['femail'];
				$this->mUsuarios->senha = $_POST['fsenha'];
				
				
				$res = $this->mUsuarios->cadastrar();
				
				if($res){
					Operacoes::alertaMsg("Cadastrado com sucesso!");
					Operacoes::redireciona("index.php?pagina=usuario&control=usuarios&acao=listar");
				}else{
					Operacoes::alertaMsg("Erro ao cadastrar!");
				}
				
			}
			
			include "view/usuarios/cadastrar.php";
			
		}

		public function listar(){
			$mdados = $this->mUsuarios->listar();
			include "view/usuarios/listar.php";
		
		}

		
		

		public function editar(){
			$this->mUsuarios->id_usuario = $_GET['id_usuario'];

			if( !empty($_POST) ){


				$this->mUsuarios->nome = $_POST['fnome'];
				$this->mUsuarios->email = $_POST['femail'];
				$this->mUsuarios->senha = $_POST['fsenha'];
				
				$res = $this->mUsuarios->editar();

				
				if($res){
					Operacoes::alertaMsg("Editado com sucesso");
					Operacoes::redireciona("index.php?pagina=usuario&control=usuarios&acao=listar");
				} else {
					Operacoes::alertaMsg("Erro ao editar!");
				}
				
			}
			
			$mdados = $this->mUsuarios->visualizar();

			$usuario = $mdados->fetch(PDO::FETCH_OBJ);

			include "view/usuarios/editar.php";	
		}

		


	}
?>