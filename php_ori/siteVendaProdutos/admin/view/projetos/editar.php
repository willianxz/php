<h1 class='titulo'>Editando Cliente</h1>

<form action="" method="post">

	<table>
		<tbody>

			<tr>
				<td>
					<label>Cidade: </label>
				</td>
				<td>
					<select name="fid_categoria">
						<option value="0">Escolha uma categoria</option>
					
						<?php while( $row = $matrizCategorias->fetch(PDO::FETCH_OBJ) ){ ?>
							<option 
								<?php if($projeto->id_categoria==$row->id_categoria) 
									echo "selected='selected'"; ?>
									
									value="<?php echo $row->id_categoria; ?>"><?php echo $row->nome; ?></option>
						<?php } ?>
					
					</select>
				</td>
			</tr>
		
			<tr>
				<td>
					<label for="nome">Nome: </label>
				</td>
				
				<td>
					<input type="text" 
						   name="fnome"
						   id="nome"
						   placeholder="Digite o nome"
						   value="<?php echo $projeto->nome; ?>"
						   required />
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="data">valor:</label>
				</td>
				<td>
					<input type="text" 
						   name="fvalor"
						   id="data"
						   placeholder="valor"
						   value="<?php echo $projeto->valor; ?>"
						   required />
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="autor">autor: </label>
				</td>
				<td>
					<input  type="text"
							name="fautor"
							id="renda"
							value="<?php echo $projeto->autor; ?>"
							required />
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="descricao">descricao: </label>
				</td>
				<td>
					<input type="text" 
						   name="fdescricao"
						   id="descricao"
						   value="<?php echo $projeto->descricao; ?>"
						    />
				</td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td>
					<input type="submit" value="Enviar" />
					<input type="reset" value="Resetar" />
				</td>
			</tr>
			
		</tbody>
	</table>

</form>