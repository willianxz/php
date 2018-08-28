<form action= "" method="post">

	<table> 
	
		<tbody>
		
			<tr>	
				
				<td>
					<label>Cidade:</label>
				</td>
				<td>	
					<select name="fid cidade">
						<option value="0">Escolha uma cidade:</option>
						
						<?php while ( $row = $matrizCidades->fetch(PDO::FETCH_OBJ) ){ ?>
							<option value="<?php echo $row -> id_cidade; ?>"><?php  echo $row -> nome;?></option>
						<?php } ?>
					
					</select>	
				</td>
			</tr>
			
			<tr>
			<td> 
				<label for="nome">Nome:</label>
			</td>
			
			<td> 
				<input type = "text"
					   name = "fnome"
					   id="nome"
					   placeholder="digite o nome"
					   required />
			</td>
			</tr>
			
			<tr>
			<td>
				<label for="data">Data Nasc.:</label>
			</td>
			<td> 
				<input type = "text"
					   name = "fdata_nascimento"
					   id="data"
					   placeholder="aaaa-mm-dd"
					   required />	
					   	
			</td>
			</tr>
			
			<tr>
			<td>
				<label for="salario">Salario</label>
			</td>
			<td>
				<input type="text"
					   name="fsalario"
					   id="salario"
					   placeholder="seu salario 0.00"
					   required />
			</td>
			</tr>
			
			<tr>
			<td>
				<label for="cargo">Cargo</label>
			</td>
			<td>
				<input type="text"	
					   name="fcargo"
					   id="cargo"
					   placeholder="digite o cargo"
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
