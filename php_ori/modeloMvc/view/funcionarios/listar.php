<table class="listagem" border="1">
	<thead>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Data Nascimento</th>
			<th>Salario</th>
			<th>Cargo</th>
			<th>Cidade</th>
			<th colspan="2">Opções</th>
		</tr>
	</thead>

	<tbody>
		<?php while($row = $mdados->fetch(PDO::FETCH_OBJ)) { ?>
			<tr>
				<td><?php echo $row->id_funcionario; ?></td>
				<td><?php echo $row->nome; ?></td>
				<td><?php echo Operacoes::converte_data_usuario($row->data_nascimento); ?></td>
				<td><?php echo Operacoes::converteRealUsuario($row->salario); ?></td>
				<td><?php echo $row->cargo; ?></td>
				<td><?php echo $row->cidade; ?></td>
				<td> <a href="index.php?control=funcionarios&acao=editar&id_funcionario=<?php echo $row->id_funcionario; ?>">Editar</a> </td>
				<td> <a href="index.php?control=funcionarios&acao=excluir&id_funcionario=<?php echo $row->id_funcionario; ?>">Excluir</a> </td>
			</tr>
		<?php } ?>
	</tbody>
	
</table>
		
