<h1>Editando Categoria</h1>

<form action="" method="post" enctype="multipart/form-data">
	
	<p>
		<label for="nome">Nome: </label>
		<input type="text" name="fnome" id="nome" value="<?php echo $categoria->nome; ?>" />
	</p>
	
	<p>
		<input type="submit" value="Editar" />
		<input type="reset" value="Limpar Campos" />
	</p>
	
</form>