<?php
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	session_start();

	require_once 'config/banco.class.php';
	require_once 'config/operacoes.php';
	if( isset($_POST['entra']) ){
		#vai criar um novo objeto
		require_once "model/usuarios.model.php";
		$objUsuario = new usuariosModel();

		$objUsuario->email = $_POST['login'];
		$objUsuario->senha = $_POST['senha'];

		$mdados = $objUsuario->autenticar();
		$usuario = $mdados->fetch(PDO::FETCH_OBJ);

		if( !$usuario->id_usuario =="" ){
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $usuario->id_usuario;
				$_SESSION['nome'] = $usuario->nome;
				$_SESSION['tipo'] = $usuario->tipo;
				Operacoes::redireciona("index.php");
				echo "<script> alert('".$_SESSION['tipo']."');</script>";
		} else {
			$_SESSION['logado'] = false;

			echo "<script>alert('Login e/ou senha errado(s)');</script>";
				Operacoes::redireciona("index.php");

		}

	}


?>
<?php if(isset($_SESSION['logado']) && $_SESSION['logado']==true){ ?>

	<?php }else{ ?>
	<form action="" id="form_login" name="#" method="post">
			
					<table class=" centro">
						<tr>
							<td >E-mail:</td>
							<td ><input type="text" name="login" size="20" maxlength="100" /></td>
						</tr>
						<tr>
							<td>Senha:</td>
							<td><input type="password" name="senha" size="20" maxlength="8" /></td>
						</tr>
						
						<tr>
							<td colspan="2"><a href="#"> Esqueceu a senha? </a></td>
						</tr>

						<tr>
							<td colspan="2"><input type="submit" name="entra" value="Entrar" /></td>
						</tr>

						<tr>
							<td colspan="2"> Não tem login?</td>
						</tr>

						<tr>
							<td colspan="2"><a href="index.php?pagina=usuario&control=usuarios&acao=cadastrar"> Cadastre-se gratuitamente! <br><br><br><br> </a></td>
						</tr>

					</table>
					
		</form>

	<?php } ?>