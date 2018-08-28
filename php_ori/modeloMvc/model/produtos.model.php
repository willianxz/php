<?php
/*
 * @author yuri_mansani
 * 
 */

	
	class produtosModel{
	
		
		private $id_produto;
		private $nome;
		private $quantidade;
		private $valor;
		private $descricao;
		private $id_categoria;
		private $conexao;
		
		
		function __construct(){
			
			$this->conexao = Banco::conecta();			
		}
		
	
		function __set($attr, $val){
			$this->$attr = $val;
		}
		
		
		function __get($attr){
			return $this->$attr;
		}
		
		
		public function cadastrar(){
			
			try{
			
				
				$sql = "INSERT INTO produtos 
							(nome, 
							 quantidade, 
							 valor, 
							 descricao,
							 id_categoria)
						VALUES
							(:pnome, 
							 :pquantidade, 
							 :pvalor, 
							 :pdescricao,
							 :pid_categoria)";
			
				$stmt = $this->conexao->prepare($sql);
				
				$stmt->execute( array(
									"pnome" => $this->nome, 
									"pquantidade" => $this->quantidade,
									"pvalor" => $this->valor,
									"pdescricao" => $this->descricao,
									"pid_categoria" => $this->id_categoria
									) 
								);

				
				return true;
				
			} catch(PDOException $e){
			
				
				echo $e->getMessage();
				
				
				return false;
				
			}
			
		}
		
		
		public function listar(){
		
			$sql = "SELECT
						pro.id_produto, 
						pro.nome, 
						pro.quantidade, 
						pro.valor,
						pro.descricao,
						cat.nome AS categoria
					FROM
						produtos pro
					INNER JOIN
						categorias cat ON pro.id_categoria=cat.id_categoria
					ORDER BY
						id_produto DESC";
			
			$stmt = $this->conexao->prepare($sql);
			$stmt->execute();
			
			return $stmt;
			
		}
		
		
		
		public function excluir(){
			
			$sql = "DELETE FROM 
						produtos
					WHERE 
						id_produto=:id";
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array(":id" => $this->id_produto) );
				return true;
				
			} catch (PDOException $e){
				echo $e->getMessage();
				return false;
			}
			return $sql;
			
		}
		
		
		
		public function editar(){

			$sql = "UPDATE produtos SET
						nome = :nome,
						quantidade = :quantidade,
						valor = :valor,
						descricao = :descricao,
						id_categoria = :id_categoria
					WHERE
						id_produto = :id";
						
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array( 
									":nome" => $this->nome,
									":quantidade" => $this->quantidade,
									":valor" => $this->valor,
									":descricao" => $this->descricao,
									":id" => $this->id_produto,
									":id_categoria" => $this->id_categoria
				 				) );
				
				return true;
				
			} catch (PDOException $e){
				echo $e->getMessage();
				return false;
			}
	
		}
		
		public function visualizar(){
		
			$sql = "SELECT	
						id_produto, nome, 
						quantidade, valor, descricao, 
						id_categoria
					FROM
						produtos
					WHERE
						id_produto=:id";
			
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array( ":id" => $this->id_produto ) );
				return $stmp;
				
			} catch( PDOException $e ) {
				
				echo $e->getMessage();
				return false;
				
			}
			
					
		}
		
		public function buscaPorNome( $string ){
			$sql = "SELECT
						id_produto, nome
					FROM
						produtos
					WHERE
						nome like '$string%'
					ORDER BY	
						nome";
			return $sql;
		}
	
	}

?>