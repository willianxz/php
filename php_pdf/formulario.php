<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title></title>
        
        <style type="text/css">
	h1{color:white;}
        h2{color:white;}
        </style>
        
    </head>
    <body style="background-image:url(img/fundoc1.jpg)">
        <?php
        if(isset($_GET['cod'])&& !empty($_GET['cod'])){
            
            $formulario = $_GET['cod'];
            
            
            
            switch ($formulario) {
                case 1:
                        
                    ?> <!-- Fechamos o php para rodar o html -->
                    
                      <h1><strong>Preencha o formul�rio para criar seu curr�culo: </strong></h1>
                     <hr />
         
         
         
                    <h1><strong>Informa��o: </h1></strong>

                   <form action="modelo1.php" method="POST" enctype="multipart/form-data"/>

                   <h2>
                   Nome:  &nbsp&nbsp&nbsp&nbsp   <input type="text" name="nome" maxlength="35" size="27"/></br>
                   Endere�o:<input type="text" name="endereco" maxlength="35" size="27"/></br>
                   Email: &nbsp&nbsp&nbsp&nbsp   <input type="email" name="email" maxlength="35" size="27"/></br>
                   Telefone:&nbsp <input type="text" name="telefone" maxlength="35" size="27"/></br>
                   Celular: &nbsp&nbsp <input type="text" name="celular" maxlength="35" size="27"/></br>
                   Objetivo: &nbsp&nbsp <input type="text" name="objetivo" maxlength="35" size="27"/></br>
                   </h2>
                   <hr/>

                  <h1><strong>Forma��o:</h1></strong>
                  <h2>
                   Curso: <input type="text" name="curso1" maxlength="35" size="27"/></br>
                   Curso: <input type="text" name="curso2" maxlength="35" size="27"/></br>
                   Curso: <input type="text" name="curso3" maxlength="35" size="27"/></br></br>
                   Escolaridade:<select  name="escolaridade">
                                  <option style='width: 200px;height: 50px;font-size: 30px;' value="Ensino Fundamental">Encino Fundamental</option> 
                                  <option style='width: 200px;height: 50px;font-size: 30px;'  value="Ensino M�dio" selected>Encino M�dio</option>
                                  <option style='width: 200px;height: 50px;font-size: 30px;' value="Ensino Superior">Encino Superior</option>
                                </select><hr/>
                  </h2>             
                  <h1><strong>Experi�ncia Profissional:</h1></strong>
                  <h2>
                   Profiss�o: <input type="text" name="profissao1" maxlength="35" size="27"/></br>
                   Profiss�o: <input type="text" name="profissao2" maxlength="35" size="27"/></br>
                   Profiss�o: <input type="text" name="profissao3" maxlength="35" size="27"/></br><hr/>
                  </h2>
                   <h1><strong>Experi�ncia em Idiomas:</h1></strong>
                   <h2>
                   Linguagens: <input type="text" name="idioma1" maxlength="35" size="27"/></br></br>
                   </h2>
                   
                   
                   <h1><strong>Outras Informa��es:</h1></strong>
                   <h2>
                   Linha 1: <input type="text" name="informacao1" maxlength="35" size="27"/></br></br>
                   Linha 2: <input type="text" name="informacao2" maxlength="35" size="27"/></br></br>
                   Linha 3: <input type="text" name="informacao3" maxlength="35" size="27"/></br></br>
                   Linha 4: <input type="text" name="informacao4" maxlength="35" size="27"/></br></br>
                   Linha 5: <input type="text" name="informacao5" maxlength="35" size="27"/></br></br>
                   Linha 6: <input type="text" name="informacao6" maxlength="35" size="27"/></br></br>
                   </h2>

                    <input type = 'submit' value = 'Enviar'  style='width: 200px;height: 50px;font-size: 30px;border-style: groove;border-color: skyblue;border-radius: 20px;border-bottom-width: 10px;' />


                   </form>
                      
                    
                    
                    <?php
                    
                    
                    

                    break;
                case 2:
                       
              echo "     
            <form action = 'modelo2.php' enctype = 'multipart/form-data' method = 'POST'>
            <h1><strong>Preencha o formul�rio para criar seu curr�culo: </strong></h1>

            <hr />

            
            <h1><strong>Informa��o:</strong></h1>
            <h2>Nome: � ��<input maxlength = '17' name = 'nome' size = '15' type = 'text' /></h2>
            <h2>Telefone:�<input maxlength = '10' name = 'telefone' size = '7' type = 'text' /></h2>
            <h2>Celular: � �<input maxlength = '10' name = 'celular' size = '7' type = 'text' /></h2>

            <hr />

            <h1><strong>Forma��o:</strong></h1>
            <h2>Curso: <input maxlength = '17' name = 'curso1' size = '15' type = 'text' /></h2>
            <h2>Curso: <input maxlength = '17' name = 'curso2' size = '15' type = 'text' /></h2>
            <h2>Curso: <input maxlength = '17' name = 'curso3' size = '15' type = 'text' /></h2>
            <h2>Escolaridade:<select name = 'encino'>
            <option style='width: 200px;height: 50px;font-size: 30px;' value = 'Ensino Fundamental'>Ensino Fundamental</option>
            <option style='width: 200px;height: 50px;font-size: 30px;' selected = 'selected' value = 'Ensino M�dio'>Ensino M�dio</option>
            <option style='width: 200px;height: 50px;font-size: 30px;'  value = 'Ensino Superior'>Ensino Superior</option>
            </select></h2><hr/>
            <h1><strong>Experi�ncia de Trabalho:</strong></h1>
            <h2>Empresa: <input maxlength = '22' name = 'empresa1' type = 'text' /></h2>
            <h2>Cargo: � � �<input maxlength = '17' name = 'cargo1' size = '15' type = 'text' /></h2>
            <h2>Entrada: ��<input maxlength = '17' name = 'entrada1' size = '15' type = 'text' /></h2>
            <h2>Sa�da: � � ��<input maxlength = '17' name = 'saida1' size = '15' type = 'text' /></h2>
            &nbsp;
            <h2>Empresa: <input maxlength = '22' name = 'empresa2' type = 'text' /></h2>
            <h2>Cargo: � � �<input maxlength = '17' name = 'cargo2' size = '15' type = 'text' /></h2>
            <h2>Entrada: ��<input maxlength = '17' name = 'entrada2' size = '15' type = 'text' /></h2>
            <h2>Sa�da: � � ��<input maxlength = '17' name = 'saida2' size = '15' type = 'text' /></h2>
            &nbsp;
            <h2>Empresa: <input maxlength = '22' name = 'empresa3' type = 'text' /></h2>
            <h2>Cargo: � � �<input maxlength = '17' name = 'cargo3' size = '15' type = 'text' /></h2>
            <h2>Entrada: ��<input maxlength = '17' name = 'entrada3' size = '15' type = 'text' /></h2>
            <h2>Sa�da: � � ��<input maxlength = '17' name = 'saida3' size = '15' type = 'text' /></h2><hr/>
            &nbsp;
            

            <h1><strong>Experiencia em linguagem:</strong></h1>
            <h2>Ingl�s:<select name ='nivel1'>
           <option selected = 'selected' style='width: 200px;height: 50px;font-size: 30px;' value = 'Sem conhecimento'>Sem Conhecimento</option>
            <option style='width: 200px;height: 50px;font-size: 30px;' value = 'Bas�co'>B�sico</option>
            <option style='width: 200px;height: 50px;font-size: 30px;' value = 'Intermediario'>Intermediario</option>
            <option style='width: 200px;height: 50px;font-size: 30px;' value = 'Avan�ado'>Avan�ado</option>
            </select></h2>
            <h2>Espanhol:�<select name = 'nivel2'>
            <option selected = 'selected' style='width: 200px;height: 50px;font-size: 30px;' value = 'Sem conhecimento'>Sem Conhecimento</option>
            <option style='width: 200px;height: 50px;font-size: 30px;' value = 'Bas�co'>B�sico</option>
            <option style='width: 200px;height: 50px;font-size: 30px;' value = 'Intermediario'>Intermediario</option>
            <option style='width: 200px;height: 50px;font-size: 30px;' value = 'Avan�ado'>Avan�ado</option>
            </select></h2>
            <h2>Chines:<select name = 'nivel3'>
            <option selected = 'selected' style='width: 200px;height: 50px;font-size: 30px;' value = 'Sem conhecimento'>Sem Conhecimento</option>
            <option value = 'Bas�co' style='width: 200px;height: 50px;font-size: 30px;'>B�sico</option>
            <option value = 'Intermediario' style='width: 200px;height: 50px;font-size: 30px;'>Intermediario</option>
            <option value = 'Avan�ado'style='width: 200px;height: 50px;font-size: 30px;'>Avan�ado</option>
            </select></h2>
            <h2>Outras Informa��es:</br>
            <textarea cols = '50' maxlength = '48' name = 'informacao1' rows = '1'></textarea></br>
            <textarea cols = '50' maxlength = '48' name = 'informacao2' rows = '1'></textarea></br>
            <textarea cols = '50' maxlength = '48' name = 'informacao3' rows = '1'></textarea></br>
            <textarea cols = '50' maxlength = '48' name = 'informacao4' rows = '1'></textarea></h2></br>
            <strong>�</strong>
           <input type = 'submit' value = 'Enviar'  style='width: 200px;height: 50px;font-size: 30px;border-style: groove;border-color: skyblue;border-radius: 20px;border-bottom-width: 10px;' />
            </form>&nbsp;

            ";
                   

            break;
                case 3:
                    
                    
                    ?>
                    
                     <h1><strong>Preencha o formul�rio para criar seu curr�culo: </strong></h1>
                     <hr />
         
         
         
                    <h1><strong>Informa��o: </h1></strong>

                   <form action="modelo3.php" method="POST" enctype="multipart/form-data"/>

                   <h2>
                   Nome: &nbsp&nbsp&nbsp&nbsp<input type="text" name="nome" maxlength="35" size="27"/></br>    
                   Nascimento: <input type="text" name="nascimento" maxlength="10" size="27"/></br>
                   Estado Civil:<input type="text" name="civil" maxlength="9" size="27"/></br>
                   Cep:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="cep" maxlength="10" size="27"/></br>
                   Cidade: &nbsp&nbsp <input type="text" name="cidade" maxlength="13" size="27"/></br>
                   Bairro: &nbsp&nbsp&nbsp <input type="text" name="bairro" maxlength="14" size="27"/></br>
                   Email: &nbsp&nbsp&nbsp&nbsp   <input type="email" name="email" maxlength="30" size="27"/></br>
                   Telefone:&nbsp <input type="text" name="telefone" maxlength="35" size="27"/></br>
                   Celular: &nbsp&nbsp <input type="text" name="celular" maxlength="10" size="27"/></br>
                   Carteira de Habilita��o:&nbsp <input type="text" name="habilitacao" maxlength="12" size="27"/></br>
                   Categoria:&nbsp <input type="text" name="categoria" maxlength="10" size="27"/></br>
                   </h2>
                   <hr/>

                  <h1><strong>Forma��o:</h1></strong>
                  <h2>
                   Curso: <input type="text" name="curso1" maxlength="18" size="27"/>  Dura��o: <input type="text" name="duracao1" maxlength="12" size="27"/>  Situa��o: <input type="text" name="situacao1" maxlength="10" size="27"/></br>
                   Curso: <input type="text" name="curso2" maxlength="18" size="27"/>  Dura��o: <input type="text" name="duracao2" maxlength="12" size="27"/>  Situa��o: <input type="text" name="situacao2" maxlength="10" size="27"/></br>
                   Curso: <input type="text" name="curso3" maxlength="18" size="27"/>  Dura��o: <input type="text" name="duracao3" maxlength="12" size="27"/>  Situa��o: <input type="text" name="situacao3" maxlength="10" size="27"/></br></br>
                   Escolaridade:<select  name="encino">
                                  <option style='width: 200px;height: 50px;font-size: 30px;' value="Ensino Fundamental">Ensino Fundamental</option> 
                                  <option style='width: 200px;height: 50px;font-size: 30px;'  value="Ensino M�dio" selected>Ensino M�dio</option>
                                  <option style='width: 200px;height: 50px;font-size: 30px;' value="Ensino Superior">Ensino Superior</option>
                                </select>

                   Situa��o:<select  name="situacao4">
                                  <option style='width: 200px;height: 50px;font-size: 30px;' value="Fazendo">Cursando</option> 
                                  <option style='width: 200px;height: 50px;font-size: 30px;'  value="Concluido" selected>Concluido</option>

                                </select>

                   <hr/>
                  </h2>             
                  <h1><strong>Experi�ncia Profissional:</h1></strong>
                  <h2>
                   Empresa: <input type="text" name="trabalho1" maxlength="20" size="27"/> Cargo: <input type="text" name="cargo1" maxlength="20" size="27"/> Tempo de atua��o: <input type="text" name="tempo1" maxlength="20" size="27"/></br>
                   Empresa: <input type="text" name="trabalho2" maxlength="20" size="27"/> Cargo: <input type="text" name="cargo2" maxlength="20" size="27"/> Tempo de atua��o: <input type="text" name="tempo2" maxlength="20" size="27"/></br>
                   Empresa: <input type="text" name="trabalho3" maxlength="20" size="27"/> Cargo: <input type="text" name="cargo3" maxlength="20" size="27"/> Tempo de atua��o: <input type="text" name="tempo3" maxlength="20" size="27"/></br><hr/>
                  </h2>

                   <h2>Objetivos:</br>
                      <textarea cols = '50' maxlength = '48' name = 'informacao5' rows = '1'></textarea></br>
                      <textarea cols = '50' maxlength = '48' name = 'informacao6' rows = '1'></textarea></br>
                      <textarea cols = '50' maxlength = '48' name = 'informacao7' rows = '1'></textarea></br>


                  <h2>Outras Informa��es:</br>
                      <textarea cols = '50' maxlength = '48' name = 'informacao1' rows = '1'></textarea></br>
                      <textarea cols = '50' maxlength = '48' name = 'informacao2' rows = '1'></textarea></br>
                      <textarea cols = '50' maxlength = '48' name = 'informacao3' rows = '1'></textarea></br>
                     </h2></br>



                    <input type = 'submit' value = 'Enviar'  style='width: 200px;height: 50px;font-size: 30px;border-style: groove;border-color: skyblue;border-radius: 20px;border-bottom-width: 10px;' />


                   </form>
                    
                    
                    
                    
                    <?php


                    break;
                
                case 4:
                    
                    
                    ?>
                    
                     <h1><strong>Preencha o formul�rio para criar seu curr�culo: </strong></h1>
                     <hr />
         
         
         
                    <h1><strong>Informa��o: </h1></strong>

                   <form action="modelo4.php" method="POST" enctype="multipart/form-data"/>

                   <h2>
                   Nome: &nbsp&nbsp&nbsp&nbsp<input type="text" name="nome" maxlength="35" size="27"/></br>    
                   Nascimento: <input type="text" name="nascimento" maxlength="10" size="27"/></br>
                   Estado Civil:<input type="text" name="civil" maxlength="9" size="27"/></br>
                   Cep:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="cep" maxlength="10" size="27"/></br>
                   Cidade: &nbsp&nbsp <input type="text" name="cidade" maxlength="13" size="27"/></br>
                   Bairro: &nbsp&nbsp&nbsp <input type="text" name="bairro" maxlength="14" size="27"/></br>
                   Email: &nbsp&nbsp&nbsp&nbsp   <input type="email" name="email" maxlength="30" size="27"/></br>
                   Telefone:&nbsp <input type="text" name="telefone" maxlength="35" size="27"/></br>
                   Celular: &nbsp&nbsp <input type="text" name="celular" maxlength="10" size="27"/></br>
                   Carteira de Habilita��o:&nbsp <input type="text" name="habilitacao" maxlength="12" size="27"/></br>
                   Categoria:&nbsp <input type="text" name="categoria" maxlength="10" size="27"/></br>
                   </h2>
                   <hr/>

                  <h1><strong>Forma��o:</h1></strong>
                  <h2>
                   Curso: <input type="text" name="curso1" maxlength="18" size="27"/>  Dura��o: <input type="text" name="duracao1" maxlength="12" size="27"/>  Situa��o: <input type="text" name="situacao1" maxlength="10" size="27"/></br>
                   Curso: <input type="text" name="curso2" maxlength="18" size="27"/>  Dura��o: <input type="text" name="duracao2" maxlength="12" size="27"/>  Situa��o: <input type="text" name="situacao2" maxlength="10" size="27"/></br>
                   Curso: <input type="text" name="curso3" maxlength="18" size="27"/>  Dura��o: <input type="text" name="duracao3" maxlength="12" size="27"/>  Situa��o: <input type="text" name="situacao3" maxlength="10" size="27"/></br></br>
                   Escolaridade:<select  name="encino">
                                  <option style='width: 200px;height: 50px;font-size: 30px;' value="Ensino Fundamental">Ensino Fundamental</option> 
                                  <option style='width: 200px;height: 50px;font-size: 30px;'  value="Ensino M�dio" selected>Ensino M�dio</option>
                                  <option style='width: 200px;height: 50px;font-size: 30px;' value="Ensino Superior">Ensino Superior</option>
                                </select>

                   Situa��o:<select  name="situacao4">
                                  <option style='width: 200px;height: 50px;font-size: 30px;' value="Fazendo">Cursando</option> 
                                  <option style='width: 200px;height: 50px;font-size: 30px;'  value="Concluido" selected>Concluido</option>

                                </select>

                   <hr/>
                  </h2>             
                  <h1><strong>Experi�ncia Profissional:</h1></strong>
                  <h2>
                   Empresa: <input type="text" name="trabalho1" maxlength="20" size="27"/> Cargo: <input type="text" name="cargo1" maxlength="20" size="27"/> Tempo de atua��o: <input type="text" name="tempo1" maxlength="20" size="27"/></br>
                   Empresa: <input type="text" name="trabalho2" maxlength="20" size="27"/> Cargo: <input type="text" name="cargo2" maxlength="20" size="27"/> Tempo de atua��o: <input type="text" name="tempo2" maxlength="20" size="27"/></br>
                   Empresa: <input type="text" name="trabalho3" maxlength="20" size="27"/> Cargo: <input type="text" name="cargo3" maxlength="20" size="27"/> Tempo de atua��o: <input type="text" name="tempo3" maxlength="20" size="27"/></br><hr/>
                  </h2>

                   <h2>Objetivos:</br>
                      <textarea cols = '50' maxlength = '48' name = 'informacao5' rows = '1'></textarea></br>
                      <textarea cols = '50' maxlength = '48' name = 'informacao6' rows = '1'></textarea></br>
                      <textarea cols = '50' maxlength = '48' name = 'informacao7' rows = '1'></textarea></br>


                  <h2>Outras Informa��es:</br>
                      <textarea cols = '50' maxlength = '48' name = 'informacao1' rows = '1'></textarea></br>
                      <textarea cols = '50' maxlength = '48' name = 'informacao2' rows = '1'></textarea></br>
                      <textarea cols = '50' maxlength = '48' name = 'informacao3' rows = '1'></textarea></br>
                     </h2></br>



                    <input type = 'submit' value = 'Enviar'  style='width: 200px;height: 50px;font-size: 30px;border-style: groove;border-color: skyblue;border-radius: 20px;border-bottom-width: 10px;' />


                   </form>
                    
                    
                    
                    
                    <?php


                    break;

                default:
                    header("Location: http://www.curriculogratis.esy.es/");
                    break;
            }
            
            
        }
        ?>
    </body>
</html>
