<form action="" method="post">

	<table>
		<tbody>
		
		
			<tr>
				<td>
					<label>Categoria: </label>
				</td>
				<td>
					<select name="fid_categoria">
						<option value="0">Escolha uma Categoria</option>
					
						<?php while( $row = $matrizCategorias->fetch(PDO::FETCH_OBJ) ){ ?>
							<option value="<?php echo $row->id_categoria; ?>"><?php echo $row->nome; ?></option>
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
						   placeholder="123..."
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
							placeholder="Digite sua descricao"
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