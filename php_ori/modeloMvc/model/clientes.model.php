<?php

	/**
	 * Classe responsavel pela integracao com o banco de dados
	 * @author yuri_mansani
	 *
	 */
	class clientesModel{
	
		###CRIAÇÃO DOS ATRIBUTOS DE CLIENTE SEGUNDO O BANCO DE DADOS###
		private $id_cliente;
		private $nome;
		private $data_nascimento;
		private $renda;
		private $dependentes;
		private $id_cidade;
		private $conexao;
		
		
		function __construct(){
		###REALIZA CONEXÃO COM O BANCO DE DADOS NA INSTANCIA DE CLIENTES###
			$this->conexao = Banco::conecta();			
		}
		
		###METODO MAGICO PARA ATRIBUIÃ‡ÃƒO VALORES DOS ATRIBUTOS PRIVADOS###
		function __set($attr, $val){
			$this->$attr = $val;
		}
		
		###METODO MAGICO PARA RETORNO DOS VALORES DOS ATRIBUTOS PRIVADOS###
		function __get($attr){
			return $this->$attr;
		}
		
		###MÃ‰TODO PARA REALIZAR O CADASTRO EFETIVO DA PESSOA NO BANCO DE DADOS###
		public function cadastrar(){
			
			try{
			
				##INICIO MONTAGEM DO SCRIPT SQL PARA CADASTRO DAS INFORMAÃ‡Ã•ES DE CLIENTE##
				$sql = "INSERT INTO clientes 
							(nome, 
							 data_nascimento, 
							 renda, 
							 dependentes,
							 id_cidade)
						VALUES
							(:pnome, 
							 :pdata_nascimento, 
							 :prenda, 
							 :pdependentes,
							 :pid_cidade)";
				##FIM MONTAGEM DO SCRIPT SQL PARA CADASTRO DAS INFORMAÃ‡Ã•ES DE CLIENTE##
				
				##PREPARA O SQL PARA RECEBER PARAMETROS AO SER EXECUTADO##
				$stmt = $this->conexao->prepare($sql);
				
				##EXECUTA O SQL ACIMA PREPARADO COM OS DEVIDOS PARAMETROS##
				$stmt->execute( array(
									"pnome" => $this->nome, 
									"pdata_nascimento" => $this->data_nascimento,
									"prenda" => $this->renda,
									"pdependentes" => $this->dependentes,
									"pid_cidade" => $this->id_cidade
									) 
								);

				##SE A TENTATIVA FOR UM SUCESSO, RETORNA TRUE.
				##CASO CONTRÃ�RIO, TODA A AÃ‡ÃƒO SERÃ� DESFEITA E O catch SERÃ� EXECUTADO
				return true;
				
			} catch(PDOException $e){
			
				##MOSTRA A MENSAGEM DO MYSQL##
				echo $e->getMessage();
				
				##RETORNA FALSE QUANDO NÃƒO HOUVER ÃŠXITO NA TENTATIVA
				return false;
				
			}
			
		}
		
		/**
		 * ResponsÃ¡vel pela listagem dos clientes
		 * @return PDOStatement
		 */
		public function listar(){
		
			$sql = "SELECT
						cli.id_cliente, 
						cli.nome, 
						cli.data_nascimento, 
						cli.renda,
						cli.dependentes,
						cid.nome AS cidade
					FROM
						clientes cli
					INNER JOIN
						cidades cid ON cli.id_cidade=cid.id_cidade
					ORDER BY
						id_cliente DESC";
			
			$stmt = $this->conexao->prepare($sql);
			$stmt->execute();
			
			return $stmt;
			
		}
		
		
		
		public function excluir(){
			
			$sql = "DELETE FROM 
						clientes 
					WHERE 
						id_cliente=:id";
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array(":id" => $this->id_cliente) );
				return true;
				
			} catch (PDOException $e){
				echo $e->getMessage();
				return false;
			}
			return $sql;
			
		}
		
		
		
		public function editar(){

			$sql = "UPDATE clientes SET
						nome = :nome,
						data_nascimento = :data,
						renda = :renda,
						dependentes = :dependentes,
						id_cidade = :id_cidade
					WHERE
						id_cliente = :id";
						
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array( 
									":nome" => $this->nome,
									":data" => $this->data_nascimento,
									":renda" => $this->renda,
									":dependentes" => $this->dependentes,
									":id" => $this->id_cliente,
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
						id_cliente, nome, 
						data_nascimento, renda, dependentes, 
						id_cidade
					FROM
						clientes
					WHERE
						id_cliente=:id";
			
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array( ":id" => $this->id_cliente ) );
				return $stmp;
				
			} catch( PDOException $e ) {
				
				echo $e->getMessage();
				return false;
				
			}
			
					
		}
		
		public function buscaPorNome( $string ){
			$sql = "SELECT
						id_cliente, nome
					FROM
						clientes
					WHERE
						nome like '$string%'
					ORDER BY	
						nome";
			return $sql;
		}
	
	}

?>