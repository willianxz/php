<?php
/*
 * @author yuri_mansani
 */

	
	class funcionariosModel {
		
		private $id_funcionario;
		private $nome;
		private $data_nascimento;
		private $salario;
		private $cargo;
		private $id_cidade;
		private $conexao;
		

		function __construct (){
			$this->conexao = Banco::conecta();
		}
	
		function __set ($attr, $val){
			$this -> $attr = $val;
		}
		
		function __get ($attr){
			return $this->$attr; 
		}
		public function cadastrar(){
			
			try{
				$sql = "INSERT INTO funcionarios
							(nome,
							 data_nascimento,
							 salario,
							 cargo,
							 id_cidade)
						VALUES
							(:pnome,
							 :pdata_nascimento,
							 :psalario,
							 :pcargo,
							 :pid_cidade)";
				
				$stmt = $this->conexao->prepare($sql);
				
				
				$stmt->execute( array(
						"pnome" => $this->nome,
						"pdata_nascimento" => $this->data_nascimento,
						"psalario" => $this->salario,
						"pcargo" => $this->cargo,
						"pid_cidade" => $this->id_cidade
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
						cli.id_funcionario,
						cli.nome,
						cli.data_nascimento,
						cli.salario,
						cli.cargo,
						cid.nome AS cidade
					FROM
						funcionarios cli
					INNER JOIN
						cidades cid ON cli.id_cidade=cid.id_cidade
					ORDER BY
						id_funcionario DESC";
					
				$stmt = $this->conexao->prepare($sql);
				$stmt->execute();
					
				return $stmt;
					
			}
			
			
			
			public function excluir(){
					
				$sql = "DELETE FROM
						funcionarios
					WHERE
						id_funcionario=:id";
				try{
			
					$stmp = $this->conexao->prepare($sql);
					$stmp->execute( array(":id" => $this->id_funcionario) );
					return true;
			
				} catch (PDOException $e){
					echo $e->getMessage();
					return false;
				}
				return $sql;
					
			}
			
			
			
			public function editar(){
			
				$sql = "UPDATE funcionarios SET
						nome = :nome,
						data_nascimento = :data,
						salario = :salario,
						cargo = :cargo,
						id_cidade = :id_cidade
					WHERE
						id_funcionario = :id";
			
				try{
			
					$stmp = $this->conexao->prepare($sql);
					$stmp->execute( array(
							":nome" => $this->nome,
							":data" => $this->data_nascimento,
							":salario" => $this->salario,
							":cargo" => $this->cargo,
							":id" => $this->id_funcionario,
							":id_cidade" => $this->id_cidade
					) );
			
					return true;
			
				} catch (PDOException $e){
					echo $e->getMessage();
					return false;
				}
			
			}
			
			public function visualizar(){
			
				$sql = "SELECT
						id_funcionario, nome,
						data_nascimento, salario, cargo,
						id_cidade
					FROM
						funcionarios
					WHERE
						id_funcionario=:id";
					
				try{
			
					$stmp = $this->conexao->prepare($sql);
					$stmp->execute( array( ":id" => $this->id_funcionario ) );
					return $stmp;
			
				} catch( PDOException $e ) {
			
					echo $e->getMessage();
					return false;
			
				}
					
					
			}
			
			public function buscaPorNome( $string ){
				$sql = "SELECT
				id_funcionario, nome
				FROM
				funcionarios
				WHERE
				nome like '$string%'
				ORDER BY
				nome";
				return $sql;
			}
			
			}
			
			?>
		}
	