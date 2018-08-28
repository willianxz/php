<?php

	/**
	 * Método para acessar a tabela de cidades do BD
	 * @author renato.paranagua
	 */
	class cidadesModel{
		
		private $id_cidade;
		private $nome;
		private $conexao;
		
		/**
		 *	Responsável pela conexão com o banco de dados
		 */
		function __construct(){
			$this->conexao = Banco::conecta();
		}
		
		/**
		 * Atribui valores as variaveis
		 * @param String $atrib
		 * @param String $valor
		 */
		function __set($atrib, $valor){
			$this->$atrib = $valor;
		}
		
		
		/**
		 * Retorna os valores das variaveis
		 * @param String $atrib
		 */
		function __get($atrib){
			return $this->$atrib;
		}
		
		
		/**
		 * Resposável pela listagem das cidades 
		 */
		function listar(){
			
			$sql = "SELECT 
						id_cidade, nome 
					FROM 
						cidades 
					ORDER BY nome";
			
			$stmp = $this->conexao->prepare($sql);
			$stmp->execute();
			
			return $stmp;
			
		}
		
		
	}

?>