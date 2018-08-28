
<h1 class='titulo'>Editando produtos</h1>

<form action="" method="post">

<table>
<tbody>

<tr>
<td>
<label>Categoria: </label>
</td>
<td>
<select name="fid_categoria">
<option value="0">Escolha uma categoria</option>
	
						<?php while( $row = $matrizCategorias->fetch(PDO::FETCH_OBJ) ){ ?>
							<option 
								<?php if($produto->id_categoria==$row->id_categoria) 
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
						   value="<?php echo $produto->nome; ?>"
						   required />
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="quantidade">Qtd.:</label>
				</td>
				<td>
					<input type="text" 
						   name="fquantidade"
						   id="quantidade"
						   placeholder="quantidade"
						   value="<?php echo $produto->quantidade; ?>"
						   required />
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="valor">Valor: </label>
				</td>
				<td>
					<input  type="text"
							name="fvalor"
							id="valor"
							placeholder="Seu valor é"
							value="<?php echo $produto->valor; ?>"
							required />
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="descricao">Descricao: </label>
				</td>
				<td>
					<input type="text"
							name="fdescricao"
							id="descricao"
							placeholder="Sua descricao é"
							value="<?php echo $produto->descricao; ?>"
							required />
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