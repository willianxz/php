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
    </head>
    <body>
        <?php
        
       
         function VerificarExiste($campo){
            if(isset($_POST["$campo"])&& !empty($_POST["$campo"])){
                return true;
            }
                return false;
            
        }
        
        
        if(VerificarExiste('nome')){
            $nome = $_POST['nome'];            
        }else{
             $nome = '';
       }
        
       // if(VerificarExiste('endereco')){
        //    $endereco = $_POST['endereco'];
       // }else{
       //      $endereco = '';
      // }
        
       // if(VerificarExiste('email')){
       //     $email = $_POST['email'];
       // }else{
       //      $email = '';
      // }
        
         if(VerificarExiste('telefone')){
            $telefone = $_POST['telefone'];
        }else{
             $telefone = '';
       }
       
       if(VerificarExiste('celular')){
            $celular = $_POST['celular'];
        }else{
             $celular = '';
       }       
        
         if(VerificarExiste('encino')){
            $encino = $_POST['encino'];
        }else{
             $encino = '';
       }
        
         if(VerificarExiste('curso1')){
            $curso1 = $_POST['curso1'];
        }else{
             $curso1 = '';
       }
        
         if(VerificarExiste('curso2')){
            $curso2 = $_POST['curso2'];
        }else{
             $curso2 = '';
       }
        
         if(VerificarExiste('curso3')){
            $curso3 = $_POST['curso3'];
        }else{
             $curso3 = '';
       }

         if(VerificarExiste('trabalho1')){
            $trabalho1 = $_POST['trabalho1'];
        }else{
             $trabalho1 = '';
       }
        
         if(VerificarExiste('trabalho2')){
            $trabalho2 = $_POST['trabalho2'];
        }else{
             $trabalho2 = '';
       }
        
         if(VerificarExiste('trabalho3')){
            $trabalho3 = $_POST['trabalho3'];
        }else{
             $trabalho3 = '';
       }
       
       
       if(VerificarExiste('nivel1')){
            $nivel1 = $_POST['nivel1'];
        }else{
             $nivel1 = '';
       }
       
       if(VerificarExiste('nivel2')){
            $nivel2 = $_POST['nivel2'];
        }else{
             $nivel2 = '';
       }
       
       if(VerificarExiste('nivel3')){
            $nivel3 = $_POST['nivel3'];
        }else{
             $nivel3 = '';
       }
         
       
       if(VerificarExiste('empresa1')){
            $empresa1 = $_POST['empresa1'];
        }else{
             $empresa1 = '';
       }
       
       if(VerificarExiste('empresa2')){
            $empresa2 = $_POST['empresa2'];
        }else{
             $empresa2 = '';
       }
       
       if(VerificarExiste('empresa3')){
            $empresa3 = $_POST['empresa3'];
        }else{
             $empresa3 = '';
       }
       
       if(VerificarExiste('cargo1')){
            $cargo1 = $_POST['cargo1'];
        }else{
             $cargo1 = '';
       }
       
       if(VerificarExiste('cargo2')){
            $cargo2 = $_POST['cargo2'];
        }else{
             $cargo2 = '';
       }
       
       if(VerificarExiste('cargo3')){
            $cargo3 = $_POST['cargo3'];
        }else{
             $cargo3 = '';
       }
       
       if(VerificarExiste('entrada1')){
            $entrada1 = $_POST['entrada1'];
        }else{
             $entrada1 = '';
       }
       
       if(VerificarExiste('entrada2')){
            $entrada2 = $_POST['entrada2'];
        }else{
             $entrada2 = '';
       }
       
       if(VerificarExiste('entrada3')){
            $entrada3 = $_POST['entrada3'];
        }else{
             $entrada3 = '';
       }
       
       if(VerificarExiste('saida1')){
            $saida1 = $_POST['saida1'];
        }else{
             $saida1 = '';
       }
       
       if(VerificarExiste('saida2')){
            $saida2 = $_POST['saida2'];
        }else{
             $saida2 = '';
       }
       
        if(VerificarExiste('saida3')){
            $saida3 = $_POST['saida3'];
        }else{
             $saida3 = '';
       }
        
       
       if(VerificarExiste('informacao1')){  
             $informacao1 = $_POST['informacao1'];
       }else{
            $informacao1 = '';
       }
       
      if(VerificarExiste('informacao2')){  
             $informacao2 = $_POST['informacao2'];
       }else{
            $informacao2 = '';
       }
       
       if(VerificarExiste('informacao3')){  
             $informacao3 = $_POST['informacao3'];
       }else{
            $informacao3 = '';
       }
       
       if(VerificarExiste('informacao4')){  
             $informacao4 = $_POST['informacao4'];
       }else{
            $informacao4 = '';
       }
        
        
        
        
         require('pdf/fpdf.php');
        
        $pdf = new FPDF('P','cm','A4'); // O 'P' É em modo retrato, se botar 'F' é modo paisagem.
      //  var_dump(get_class_methods($pdf)); irá mostrar todos os métodos disponiveis.
        $pdf->AddPage();
        
          
        
       //Podemos definir se quisermos apenas uma fonte para todo o arquivo pdf,porem aqui botamos varias para mostrar.
        
        
        
        $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(3,4," Foto 3x4 ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
        $pdf->Cell(6,1," Nome: $nome",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
        $pdf->Cell(5,1," Telefone: $telefone ",1,0,"L");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
       $pdf->Cell(5,1," Celular: $celular",1,1,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,3," Currículo Vitae ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
      //--------------------------FORMAÇÃO---------------------//
       
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,2," Formação ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
         
       
        $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,2,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
         $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(5,1," Encino: ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
         $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(4,1," Curso: ",1,0,"C");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
         $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
       $pdf->Cell(4,1," Curso: ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
        $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
       $pdf->Cell(4,1," Curso: ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
        $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
       $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,1,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
       
         $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
        $pdf->Cell(5,1," $encino ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
         
        $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
        $pdf->Cell(4,1," $curso1 ",1,0,"C");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
        $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
        $pdf->Cell(4,1," $curso2 ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
        $pdf->Cell(4,1," $curso3 ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
        
        
        
        
        
         //------------------------experiencias ---------------- //
       
        $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,2," Experiências Profissionais ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
         
       
        $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,1,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
        $pdf->Cell(5,1," Empresa: ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
        $pdf->Cell(4,1," Cargo: ",1,0,"C");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
       $pdf->Cell(4,1," Entrada: ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->Cell(4,1," Saida: ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
       
       
       $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,1,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
         $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
        $pdf->Cell(5,1," $empresa1 ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
         $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
        $pdf->Cell(4,1," $cargo1 ",1,0,"C");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
         $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
       $pdf->Cell(4,1," $entrada1 ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
        $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
       $pdf->Cell(4,1," $saida1 ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
    
        
       $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,1,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
         $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
        $pdf->Cell(5,1," $empresa2 ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
         $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
        $pdf->Cell(4,1," $cargo2 ",1,0,"C");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
         $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
       $pdf->Cell(4,1," $entrada2 ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
        $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
       $pdf->Cell(4,1," $saida2 ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       
       
       $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,1,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
         $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
        $pdf->Cell(5,1," $empresa3 ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
         $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
        $pdf->Cell(4,1," $cargo3 ",1,0,"C");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
         $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
       $pdf->Cell(4,1," $entrada3 ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
        $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
       $pdf->Cell(4,1," $saida3 ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
      
        
        
        //---------------- Linguagems -------------------------//
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,2," Experiência em idiomas ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
        $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,1,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
        $pdf->Cell(5,1," Idioma: ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
        $pdf->Cell(4,1," Inglês ",1,0,"C");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
       $pdf->Cell(4,1," Espanhol ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->Cell(4,1," Chinês ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       
       $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,1,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
        $pdf->Cell(5,1," Nível: ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
         $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
        $pdf->Cell(4,1," $nivel1  ",1,0,"C");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
         $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
       $pdf->Cell(4,1," $nivel2 ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
        $pdf->SetFont("Arial","","12"); // Definimos a fonte dessa célula
       $pdf->Cell(4,1," $nivel3 ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       
       
       // ----------- Outras informações -------------------//
       
       
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,2," Outras Informações ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1,"$informacao1",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," $informacao2 ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," $informacao3 ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," $informacao4 ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
        $pdf->Image('img/sitecurriculo1.png', 6, 26, 10, 1);
        
        
        
        
        ob_start (); // isso fez com que funcionase.
        $pdf->Output();
        ?>
    </body>
</html>
