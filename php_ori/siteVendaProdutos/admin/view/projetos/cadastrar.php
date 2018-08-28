<form action="" method="post" style="float:left;margin-left:20%;">

	<table>
		<tbody>
		
		
			<tr>
				<td>
					<label>Categoria: </label>
				</td>
				<td>
					<select name="fid_categoria">
						<option value="1">Escolha uma categoria</option>
					
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
					<label for="valor">Valor do projeto:</label>
				</td>
				<td>
					<input type="text" 
						   name="fvalor"
						   id="valor"
						   placeholder="0.00"
						   required />
				</td>
			</tr>
			
			<tr>
				<td>
					<label for="autor">Autor: </label>
				</td>
				<td>
					<input  type="text"
							name="fautor"
							id="autor"
							placeholder="Alguem importante"
							required />
				</td>
			</tr>
			
			<tr>
				
				
				
				
				
				<td>
				  	<label for="dependentes">Descrição: </label>  
				</td>
				<td>
					<textarea  
						   style="height: 70px; width:300px;" 
						   name="fdescricao"
						   id="dependentes">
					</textarea>	   
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