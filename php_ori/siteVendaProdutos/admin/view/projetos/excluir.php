<h1 class='titulo'>Excluindo Cliente</h1>

<form action="" method="post">

	<table>
		<tbody>
		
			<tr>
				<td>
					<label for="nome">Nome: </label>
				</td>
				
				<td>
					<?php echo $cliente->nome; ?>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="data">Data Nasc.:</label>
				</td>
				<td>
					<?php echo $cliente->data_nascimento; ?>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="renda">Renda: </label>
				</td>
				<td>
					<?php echo $cliente->renda; ?>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="dependentes">Dependentes: </label>
				</td>
				<td>
					<?php echo $cliente->dependentes; ?>
				</td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" value="Excluir" />
					<input type="hidden" name="fid_cliente" value="<?php echo $cliente->id_cliente; ?>" />
					<a href="index.php?control=clientes&acao=listar">Cancelar</a>
				</td>
			</tr>
			
		</tbody>
	</table>

</form>