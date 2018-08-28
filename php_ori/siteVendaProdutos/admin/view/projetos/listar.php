<table class="listagem" border="1">
	<thead>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Data Nascimento</th>
			<th>Renda</th>
			<th>Dependentes</th>
			<th>Cidade</th>
			<th colspan="2">Opções</th>
		</tr>
	</thead>

	<tbody>
		<?php while($row = $mdados->fetch(PDO::FETCH_OBJ)) { ?>
			<tr>
				<td><?php echo $row->id_projeto; ?></td>
				<td><?php echo $row->nome; ?></td>
				<td><?php echo $row->valor; ?></td>
				<td><?php echo $row->autor; ?></td>
				<td><?php echo $row->descricao; ?></td>
				<td><?php echo $row->categoria; ?></td>
				<td> <a href="index.php?control=projeto&acao=editar&id_projeto=<?php echo $row->id_projeto; ?>">Editar</a> </td>
				<td> <a href="index.php?control=projeto&acao=excluir&id_projeto=<?php echo $row->id_projeto; ?>">Excluir</a> </td>
			</tr>
		<?php } ?>
	</tbody>
	
</table>
		