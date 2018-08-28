<h1>Listagem de Categorias</h1>
<table class="listagem">
	<thead>
		<tr>
			<th>Codigo</th>
			<th>Nome</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
	</thead>
	
	<tbody>
		
		<?php while( $row = $dados->fetch(PDO::FETCH_OBJ) ){ ?>
				<tr>
					<td><?php echo $row->id_categoria; ?></td>
					<td><?php echo $row->nome; ?></td>
					<td><a href="index.php?control=categorias&acao=editar&id_categoria=<?php echo $row->id_categoria; ?>">Editar</a></td>
					<td><a href="index.php?control=categorias&acao=excluir&id_categoria=<?php echo $row->id_categoria; ?>">Excluir</a></td>
				</tr>
		<?php } ?>
		
	</tbody>

</table>