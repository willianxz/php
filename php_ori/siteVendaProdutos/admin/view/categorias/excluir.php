<h1>Excluindo Categoria</h1>

<p>Deseja realmente excluir a categoria <b><?php echo $categoria->nome; ?>?</b></p>

<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="acao" value="excluir" />
	<p>
		<input type="submit" value="Excluir" />
		<a href="index.php?control=categorias&acao=listar">Cancelar</a>
	</p>
	
</form>