<?php

/**
* @autor yuri_mansani
*
*/
class usuariosModel {



	private $id_usuario;
	private $nome;
	private $email;
	private $senha;
	private $tipo;


	function __construct(){
		$this->conexao = Banco::conecta();
	}

	public function __set($atrib,$val){
		$this->$atrib = $val;
	}

	public function __get($atrib){
		return $this->atrib;
		
	}

	public function cadastrar(){
		try {

			$sql="INSERT INTO usuarios(
										nome,
										email,
										senha)
										Values(	:pnome,
												:pemail,
												:psenha)";


			$stmt = $this->conexao->prepare($sql);
	
			$stmt->execute( array(
								"pnome"=> $this->email,
								"pemail"=>$this->email,
								"psenha" => $this->senha)

							);
			return true;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}

	}

	public function listar(){
		
			$sql = "SELECT
						usu.id_usuario, 
						usu.nome, 
						usu.email, 
						usu.senha
					FROM
						usuarios usu
					ORDER BY
						nome DESC";
			
			$stmt = $this->conexao->prepare($sql);
			$stmt->execute();
			
			return $stmt;
			




	}

	public function visualizar(){
		
			$sql = "SELECT	
						usu.id_usuario,
						usu.nome,
						usu.email,
						usu.senha
					FROM
						usuarios usu
					WHERE
						id_usuario=:id";
			
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array( ":id" => $this->id_usuario ) );
				return $stmp;
				
			} catch( PDOException $e ) {
				
				echo $e->getMessage();
				return false;
				
			}
			
					
		}

	public function editar(){
		try {

			
			$sql="UPDATE 
						usuarios
							SET
							 nome = :ptitulo,
							 email = :ptitulo_original,
							 senha = :pid_genero

								WHERE id_usuario = :id";



			$stmt = $this->conexao->prepare($sql);
	
			$stmt->execute( array(
								":pnome"=> $this->nome,
								":pemail"=>$this->email,
								":psenha" => $this->senha,
								":id" => $this->id_usuario

								) 
							);
			return true;
			
		} catch (PDOException $e) {
			echo $e->getMessage();
			return false;
		}
	
	}



	public function autenticar(){

			$sql = "SELECT	
						id_usuario,
						nome,
						email,
						tipo
					FROM
						usuarios
					WHERE
						email=:pemail
					AND
						senha=:psenha";
			
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array( ":pemail" => $this->email, ":psenha" => $this->senha ) );

				return $stmp;
				
			} catch( PDOException $e ) {
				
				echo $e->getMessage();
				return false;
				
			}

	}


		
}




?>