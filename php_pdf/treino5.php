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
         require('pdf/fpdf.php');
        
        $pdf = new FPDF('P','cm','A4'); // O 'P' É em modo retrato, se botar 'F' é modo paisagem.
      //  var_dump(get_class_methods($pdf)); irá mostrar todos os métodos disponiveis.
        $pdf->AddPage();
        
               
        
        
       //Podemos definir se quisermos apenas uma fonte para todo o arquivo pdf,porem aqui botamos varias para mostrar.
        
        
        
        $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(3,4," Foto 3x4 ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
        $pdf->Cell(6,1," Nome: ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
        $pdf->Cell(5,1," Telefone: ",1,0,"L");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
       $pdf->Cell(5,1," Celular: ",1,1,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,3," Currículo Vitae ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
       $pdf->Image('img/foto3.jpg', 1, 1); // Botamos uma foto em cima da célula.
       
       
       
        
       //--------------------------FORMAÇÃO---------------------//
       
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,2," Formação ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
         
       
        $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,2,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
        $pdf->Cell(5,2," Ensino: ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
        $pdf->Cell(4,2," Curso 1: ",1,0,"L");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
       $pdf->Cell(4,2," Curso 2: ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->Cell(4,2," Curso 3: ",1,1,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       
       //------------------------experiencias ---------------- //
       
       
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,2," Experiencias ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
         
       
        $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,2,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
        $pdf->Cell(5,2," Empresa: ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
        $pdf->Cell(4,2," Cargo: ",1,0,"L");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
       $pdf->Cell(4,2," Entrada: ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->Cell(4,2," Saída: ",1,1,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
       
       
       $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,2,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
        $pdf->Cell(5,2," Empresa: ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
        $pdf->Cell(4,2," Cargo: ",1,0,"L");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
       $pdf->Cell(4,2," Entrada: ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->Cell(4,2," Saída: ",1,1,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
       
       
       
       
       $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,2,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
        $pdf->Cell(5,2," Empresa: ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
        $pdf->Cell(4,2," Cargo: ",1,0,"L");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
       $pdf->Cell(4,2," Entrada: ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->Cell(4,2," Saída: ",1,1,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
       
       
       //---------------- Linguagems -------------------------//
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,2," Experiencia em idiomas ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
        $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,1,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
        $pdf->Cell(5,1," Idioma: ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
        $pdf->Cell(4,1," Inglês ",1,0,"L");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
       $pdf->Cell(4,1," Espanhol ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->Cell(4,1," Chines ",1,1,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       
       $pdf->SetFont("Arial","B","12"); // Definimos a fonte dessa célula
        $pdf->Cell(2,1,"  ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
        $pdf->Cell(5,1," Nível: ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
        $pdf->Cell(4,1,"  ",1,0,"L");
        //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
      
       $pdf->Cell(4,1,"  ",1,0,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->Cell(4,1," ",1,1,"L");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       
       // ----------- Outras informações -------------------//
       
       
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,2," Outras Informações ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1,"  ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1,"  ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1,"  ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","B","18"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1,"  ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
      
       $pdf->Image('img/sitecurriculo1.png', 6, 27.5, 10, 1);
       
        
        ob_start (); // isso fez com que funcionase.
        $pdf->Output();
        ?>
    </body>
</html>
