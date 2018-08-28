<h1 class='titulo'>Excluindo Funcionarios</h1>

	<form action="" method= "post">

	<table>
		<tbody>
		
			<tr>
				<td>
					<label for="nome">Nome: </label>
				</td>
				
				<td>
					<?php echo $funcionario->nome; ?>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="data">Data Nasc.:</label>
				</td>
				<td>
					<?php echo $funcionario->data_nascimento; ?>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="salario">Salario: </label>
				</td>
				<td>
					<?php echo $funcionario->salario; ?>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="cargo">Cargo: </label>
				</td>
				<td>
					<?php echo $funcionario->cargo; ?>
				</td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" value="Excluir" />
					<input type="hidden" name="fid_funcionario" value="<?php echo $funcionario->id_funcionario; ?>" />
					<a href="index.php?control=funcionarios&acao=listar">Cancelar</a>
				</td>
			</tr>
			
		</tbody>
	</table>

</form>
