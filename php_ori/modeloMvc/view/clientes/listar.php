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
				<td><?php echo $row->id_cliente; ?></td>
				<td><?php echo $row->nome; ?></td>
				<td><?php echo Operacoes::converte_data_usuario($row->data_nascimento); ?></td>
				<td><?php echo Operacoes::converteRealUsuario($row->renda); ?></td>
				<td><?php echo $row->dependentes; ?></td>
				<td><?php echo $row->cidade; ?></td>
				<td> <a href="index.php?control=clientes&acao=editar&id_cliente=<?php echo $row->id_cliente; ?>">Editar</a> </td>
				<td> <a href="index.php?control=clientes&acao=excluir&id_cliente=<?php echo $row->id_cliente; ?>">Excluir</a> </td>
			</tr>
		<?php } ?>
	</tbody>
	
</table>
		