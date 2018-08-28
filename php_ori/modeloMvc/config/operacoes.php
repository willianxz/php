<?php

	class Operacoes{
		
		static function alertaMsg($msg=null){
			echo "<script>";
				echo "alert('$msg');";
			echo "</script>";
		}
		
		static function redireciona($caminho, $tipo="js"){
		
			if($tipo=="js"){
				echo "<script>";
				echo "window.location='$caminho';";
				echo "</script>";
			} else
				header("location: $caminho");
				
		}
		
		
		/**
		 * Funcao respons�vel pela convers�o de n�mero real
		 * vindo do banco para usu�rio
		 * @example converteRealBD('1200.00')
		 * @param Real $valor
		 * @param Int $ncasas
		 * @return string
		 */
		static function converteRealUsuario( $valor, $ncasas=2 ){
			$valor_formatado = number_format($valor, $ncasas, ",", ".");
			return $valor_formatado;
		}
		
		
		/**
		 * M�todo responsavel pela conversao de numero string em real
		 * @param String $valor
		 * @return real
		 */
		static function converteRealBd($valor){
			$valor = str_replace(".", "", $valor);
			$valor = str_replace(",", ".", $valor);
			return $valor;
		}
		
		
		static function converte_data_usuario($data){
			$vetor_data = explode("-", $data);
			$vetor_data_inv = array_reverse( $vetor_data );
			$nova_data = implode("/", $vetor_data_inv);
			return $nova_data;
		}
		
		static function converte_data_bd($data){
			$vetor_data = explode("/", $data);
			$vetor_data_inv = array_reverse($vetor_data);
			$nova_data = implode("-", $vetor_data_inv);
			return $nova_data;
		}
		
	}

?>