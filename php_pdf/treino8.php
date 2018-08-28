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
        
        
      
      
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,3,"  ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
       
         
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Nome: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
       
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Telefone: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
       
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Celular: ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Endereço: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Bairro: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Cidade: ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Email: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Site: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Estado: ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Identidade: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Cpf: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Estado Civil: ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(13,1," Carteira de Habilitação: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Categoria: ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        //-----------------------Formação------------------------------//
        
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," Formação ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Escolaridade: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
       
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Periodo: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
       
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Situação: ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Curso: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Duração: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Situação: ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Curso: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Duração: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Situação: ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
       
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Curso: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Duração: ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Situação: ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
       
       
         //-----------------------Experiencia profissional------------------------------//
        
        
        $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," Experiencia Profissional ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
              
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Empresa: ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Cargo ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Tempo de Atuação ",1,1,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1,"  ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1,"  ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1,"   ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1,"  ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1,"  ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1,"  ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1,"  ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        
        
          //-----------------------Objetivos------------------------------//
        
        
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," Objetivos ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1,"  ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
        
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1,"  ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
      
       
       
       
       //--------------------Outras Informações -------------------------//
       
       
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," Outras Informações ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1,"  ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
        
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1,"  ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       $pdf->Image('img/sitecurriculo1.png', 6, 27.5, 10, 1);
       
       
       
        ob_start (); // isso fez com que funcionase.
        $pdf->Output();
        ?>
    </body>
</html>
