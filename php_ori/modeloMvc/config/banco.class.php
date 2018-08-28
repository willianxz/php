<?php

	/**
	 * Responsável pela conexao com o banco de dados
	 * @author yuri_mansani
	 *
	 */
	class Banco{
	
		/**
		 * Método que retorna a instancia da conexao com o banco
		 * @return PDO
		 */
		static function conecta(){
							
			try{
				###Tenta realizar a conexão com o banco de dados###
				
				###Dados para conexao com o banco de dados###
				$host = "localhost";        //Nome do servidor
				$nome_banco = "mercado";	//Nome do banco de dados
				$usuario = "root";			//Nome de usuario para acesso ao banco
				$senha = "";				//Senha para acesso do usuario ao banco
				
				###Realiza a conexão com o banco de dados###
			    $conexao = new PDO("mysql:host=$host;dbname=$nome_banco", $usuario, $senha);
				
				###Atribuição de constantes para verificação de erros###
				$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				###Retorna a conexão para quem tiver chamado Banco::conecta()
				return $conexao;
				
			} catch( PDOException $e ){
				###Se a tentativa de conexão falhar, executa o bloco de comandos de exceção###
				echo "Erro: " . $e->getMessage();    //Mostra o erro no mysql
				
				//Mata a execução do programa mostrando a seguinte mensagem em vermelho
				die("<p style='color: #990000;'>Erro tentando conectar-se ao banco!</p>");
			}
			
		}
		
	}

?>