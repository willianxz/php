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
        
        $inputs = array();
        
        //Informação
        
        $inputs[0] = 'nome';
        $inputs[1] = 'nascimento';
        $inputs[2] = 'cep';
        $inputs[3] = 'bairro';
        $inputs[4] = 'estado';
        $inputs[5] = 'email';
        $inputs[6] = 'site';
        $inputs[7] = 'telefone';
        $inputs[8] = 'celular';
        $inputs[9] = 'cpf';
        $inputs[10] = 'identidade';
        $inputs[11] = 'habilitacao';
        $inputs[12] = 'categoria';
        $inputs[41] = 'cidade';
        $inputs[42] = 'civil';
        
        
       
        //Formação
        
        $inputs[13] = 'curso1';
        $inputs[14] = 'curso2';
        $inputs[15] = 'curso3';
        $inputs[16] = 'duracao1';
        $inputs[17] = 'duracao2';
        $inputs[18] = 'duracao3';
        $inputs[19] = 'situacao1';
        $inputs[20] = 'situacao2';
        $inputs[21] = 'situacao3';
        $inputs[22] = 'encino';
        $inputs[23] = 'periodo';
        $inputs[24] = 'situacao4';
        
        
        //Experiência Profissional
        
        $inputs[25] = 'trabalho2';
        $inputs[26] = 'trabalho1';
        $inputs[27] = 'trabalho3';
        $inputs[28] = 'cargo1';
        $inputs[29] = 'cargo2';
        $inputs[30] = 'cargo3';
        $inputs[31] = 'tempo1';
        $inputs[32] = 'tempo2';
        $inputs[33] = 'tempo3';
        
                
        //Objetivos
        
        $inputs[34] = 'informacao5';
        $inputs[35] = 'informacao6';
        $inputs[36] = 'informacao7';
        
        //Outras Informações
        
        $inputs[37] = 'informacao1';
        $inputs[38] = 'informacao2';
        $inputs[39] = 'informacao3';
        $inputs[40] = 'naoexiste';
        
          function VerificarExiste($campo){ // Função interna para uso de uma outra função.
            if(isset($_POST["$campo"])&& !empty($_POST["$campo"])){ // Se está setado e não estiver vazia retorne a variavel
                return $_POST[$campo]; //retorne a variavel
            }
                $_POST[$campo] = '';
                return $_POST[$campo]; // Se não irá retorna vazio.
            
        }
        
        function PegarArray($array){ //Essa função irá utilizar a outra,retornando um array com as variaveis.
            $verificado = array(); //Será um array para a captação das variaveis.
            for($i = 0;$i < count($array);$i++){ // Fizemos um laço para percorrer todo o array
                
                
              $verificado[$i] =  VerificarExiste($array[$i]);//Aqui o nosso array pega o retorno da função interna
                
            }
            return $verificado; // e retornamos o nosso array contendo o valor das variaveis.
        }
        
         $dado = PegarArray($inputs); // Irá fazer com que não dei erros de undefined variaveis.
        
      
        
        
        
        
        
        
         require('pdf/fpdf.php');
        
        $pdf = new FPDF('P','cm','A4'); // O 'P' É em modo retrato, se botar 'F' é modo paisagem.
      //  var_dump(get_class_methods($pdf)); irá mostrar todos os métodos disponiveis.
        $pdf->AddPage();
        
               
        
        
       //Podemos definir se quisermos apenas uma fonte para todo o arquivo pdf,porem aqui botamos varias para mostrar.
        
        
      
     
       $pdf->Image('img/foto3.jpg', 17, 1);
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(16,4," $dado[0] ",1,0,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(3,4,"  ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Nascimento: $dado[1] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
       
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Telefone: $dado[7] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
       
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Celular: $dado[8]",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Cep: $dado[2]",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Bairro: $dado[3]",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Cidade: $dado[41]",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
          $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(13,1," Email: $dado[5]",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')                                            //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Estado Civil: $dado[42]",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(13,1," Carteira de Habilitacao: $dado[11]",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Categoria: $dado[12]",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        //-----------------------Formação------------------------------//
        
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," Formação ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(13,1," Escolaridade: $dado[22] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R') 
        
       
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Situação: $dado[24] ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Curso: $dado[13] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Duração:  $dado[16] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Situação: $dado[19] ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Curso: $dado[14] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Duração: $dado[17] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Situação: $dado[20] ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
       
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Curso: $dado[15] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Duração: $dado[18] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Situação: $dado[21] ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
       
       
         //-----------------------Experiencia profissional------------------------------//
        
        
        $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," Experiência Profissional ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
              
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," Empresa: ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Cargo: ",1,0,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," Tempo de Atuação: ",1,1,"C"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," $dado[26]  ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," $dado[28] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," $dado[31] ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," $dado[25] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," $dado[29] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," $dado[32] ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(7,1," $dado[27] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," $dado[30] ",1,0,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        $pdf->SetFont("Arial","B","14"); // Definimos a fonte dessa célula
        $pdf->Cell(6,1," $dado[33] ",1,1,"L"); //A Célula está definida assim:
                                                     //Comprimento,Altura,Texto/imagem,com/sem bordas,posição('C',L','R')
        
        
        
        
          //-----------------------Objetivos------------------------------//
        
        
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," Objetivos ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," $dado[34] ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
        
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," $dado[35] ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," $dado[36]",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
      
       
       
       
       //--------------------Outras Informações -------------------------//
       
       
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," Outras Informações ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," $dado[37] ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
        
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," $dado[38] ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa célula
       $pdf->Cell(19,1," $dado[39] ",1,1,"C");
         //COMPRIMENTO,LARGURA,TEXTO,BORDA,QUEBRA A LINHA,ALINHAMENTO
        
       $pdf->Image('img/sitecurriculo1.png', 6, 27.5, 10, 1);
       
       
       
        ob_start (); // isso fez com que funcionase.
        $pdf->Output();
        ?>
    </body>
</html>
