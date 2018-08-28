<h1 class='titulo'>Excluindo Produto</h1>

<form action="" method="post">

	<table>
		<tbody>
		
			<tr>
				<td>
					<label for="nome">Nome: </label>
				</td>
				
				<td>
					<?php echo $produto->nome; ?>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="quantidade">Qtd.:</label>
				</td>
				<td>
					<?php echo $produto->quantidade; ?>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="valor">Valor: </label>
				</td>
				<td>
					<?php echo $produto->valor; ?>
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="descricao">Descricao: </label>
				</td>
				<td>
					<?php echo $produto->descricao; ?>
				</td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" value="Excluir" />
					<input type="hidden" name="fid_produto" value="<?php echo $produto->id_produto; ?>" />
					<a href="index.php?control=produtos&acao=listar">Cancelar</a>
				</td>
			</tr>
			
		</tbody>
	</table>

</form>