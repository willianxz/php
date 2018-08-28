<table class="listagem" border="1">
	<thead>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Quantidade</th>
			<th>Valor</th>
			<th>Descricao</th>
			<th>Categoria</th>
			<th colspan="2">Opções</th>
		</tr>
	</thead>

	<tbody>
		<?php while($row = $mdados->fetch(PDO::FETCH_OBJ)) { ?>
			<tr>
				<td><?php echo $row->id_produto; ?></td>
				<td><?php echo $row->nome; ?></td>
				<td><?php echo Operacoes::converte_data_usuario($row->quantidade); ?></td>
				<td><?php echo Operacoes::converteRealUsuario($row->valor); ?></td>
				<td><?php echo $row->descricao; ?></td>
				<td><?php echo $row->categoria; ?></td>
				<td> <a href="index.php?control=produtos&acao=editar&id_produto=<?php echo $row->id_produto; ?>">Editar</a> </td>
				<td> <a href="index.php?control=produtos&acao=excluir&id_produto=<?php echo $row->id_produto; ?>">Excluir</a> </td>
			</tr>
		<?php } ?>
	</tbody>
	
</table>
		