<?php

	class categoriasModel{
		
		private $id_categoria;
		private $nome;
		private $conexao;
		
		public function __construct(){
			//REaliza conexao com banco na instancia da classe
			$this->conexao = Banco::conecta();
		}
		
		//Método para atribuição de valores às variáveis
		public function __set($atrib, $valor){
			$this->$atrib = $valor;
		}
		
		//Método para retornar o valor dos atributos
		public function __get($atrib){
			return $this->$atrib;
		}
		
		//Funcao para efetivar o cadastro no banco
		public function cadastrar(){

			try{

				//Sql de insert de categorias
				$sql = "INSERT INTO categorias(nome) VALUES(:pnome)";
				
				//Preparar o sql para execução
				$stmp = $this->conexao->prepare($sql);
				
				//Executa passando os parametros
				$stmp->execute( array("pnome" => $this->nome) );
				
				return true;
			
			} catch( PDOException $e ){
				echo $e->getMessage();
				return false;
			}
			
		}
		
		public function listar(){
			
			$sql = "SELECT id_categoria, nome FROM categorias";
			
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute();
				return $stmp;
				
			} catch( PDOException $e ){
				echo $e->getMessage();
				return false;
			}
			
		}
		
		
		public function ler(){
			
			$sql = "SELECT 
						id_categoria, nome 
					FROM 
						categorias
					WHERE
						id_categoria = :id";
			
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array( "id"=>$this->id_categoria ) );
				return $stmp;
				
			} catch( PDOException $e ){
				echo $e->getMessage();
				return false;
			}
			
		}
		
		public function editar(){
			
			$sql = "UPDATE categorias SET nome=:pnome WHERE id_categoria=:pid";
			
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array( "pid"=>$this->id_categoria, "pnome" => $this->nome ) );
				return true;
				
			} catch( PDOException $e ){
				echo $e->getMessage();
				return false;
			}
			
		}
		
		public function excluir(){
			
			$sql = "DELETE FROM categorias WHERE id_categoria=:pid";
			
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array( "pid"=>$this->id_categoria ) );
				return true;
				
			} catch( PDOException $e ){
				echo $e->getMessage();
				return false;
			}
			
		}
		
	}

?>