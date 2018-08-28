<?php

	/**
	 * Classe responsavel pela integracao com o banco de dados
	 * @author Yuri Mansani
	 *
	 */
	class projetosModel{
	
		###CRIAÃ‡ÃƒO DOS ATRIBUTOS DE CLIENTE SEGUNDO O BANCO DE DADOS###
		private $id_projeto;
		private $nome;
		private $valor;
		private $autor;
		private $descricao;
		private $id_categoria;
		private $conexao;
		
		
		function __construct(){
			###REALIZA CONEXÃƒO COM O BANCO DE DADOS NA INSTANCIA DE CLIENTES###
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
				$sql = "INSERT INTO projetos 
							(nome, 
							 valor, 
							 autor, 
							 descricao,
							 id_categoria)
						VALUES
							(:pnome, 
							 :pvalor, 
							 :pautor, 
							 :pdescricao,
							 :pid_categoria)";
				##FIM MONTAGEM DO SCRIPT SQL PARA CADASTRO DAS INFORMAÃ‡Ã•ES DE CLIENTE##
				
				##PREPARA O SQL PARA RECEBER PARAMETROS AO SER EXECUTADO##
				$stmt = $this->conexao->prepare($sql);
				
				##EXECUTA O SQL ACIMA PREPARADO COM OS DEVIDOS PARAMETROS##
				$stmt->execute( array(
									"pnome" => $this->nome, 
									"pvalor" => $this->valor,
									"pautor" => $this->autor,
									"pdescricao" => $this->descricao,
									"pid_categoria" => $this->id_categoria
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
		 * ResponsÃ¡vel pela listagem dos projetos
		 * @return PDOStatement
		 */
		public function listar(){
		
			$sql = "SELECT
						cli.id_projeto, 
						cli.nome, 
						cli.valor, 
						cli.autor,
						cli.descricao,
						cid.nome AS categoria
					FROM
						projetos cli
					INNER JOIN
						categorias cid ON cli.id_categoria=cid.id_categoria
					ORDER BY
						id_projeto DESC";
			
			$stmt = $this->conexao->prepare($sql);
			$stmt->execute();
			
			return $stmt;
			
		}
		
		
		
		public function excluir(){
			
			$sql = "DELETE FROM 
						projetos 
					WHERE 
						id_projeto=:id";
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array(":id" => $this->id_projeto) );
				return true;
				
			} catch (PDOException $e){
				echo $e->getMessage();
				return false;
			}
			return $sql;
			
		}
		
		
		
		public function editar(){

			$sql = "UPDATE projetos SET
						nome = :nome,
						valor = :valor,
						autor = :autor,
						descricao = :descricao,
						id_categoria = :id_categoria
					WHERE
						id_projeto = :id";
						
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array( 
									":nome" => $this->nome,
									":valor" => $this->valor,
									":autor" => $this->autor,
									":descricao" => $this->descricao,
									":id" => $this->id_projeto,
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
						id_projeto, nome, 
						valor, autor, descricao, 
						id_categoria
					FROM
						projetos
					WHERE
						id_projeto=:id";
			
			try{
				
				$stmp = $this->conexao->prepare($sql);
				$stmp->execute( array( ":id" => $this->id_projeto ) );
				return $stmp;
				
			} catch( PDOException $e ) {
				
				echo $e->getMessage();
				return false;
				
			}
			
					
		}
	
	}

?>