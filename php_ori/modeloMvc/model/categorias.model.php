<?php

	/**
	 * Método para acessar a tabela de cidades do BD
	 * @author yuri_mansani
	 */
	class categoriasModel{
		
		private $id_categoria;
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
		 * Resposável pela listagem das categorias 
		 */
		function listar(){
			
			$sql = "SELECT 
						id_categoria, nome 
					FROM 
						categorias 
					ORDER BY nome";
			
			$stmp = $this->conexao->prepare($sql);
			$stmp->execute();
			
			return $stmp;
			
		}
		
		
	}

?>