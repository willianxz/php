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
        
        //Informa��o
        
        $inputs[] = 'nome';
        $inputs[] = 'endereco';
        $inputs[] = 'email';
        $inputs[] = 'telefone';
        $inputs[] = 'celular';
        $inputs[] = 'objetivo';
        //$inputs[6] = 'site';
        //$inputs[7] = 'telefone';
        //$inputs[8] = 'celular';
        //$inputs[9] = 'cpf';
        //$inputs[10] = 'identidade';
       
        
        
       
        //Forma��o
        
        $inputs[] = 'curso1';
        $inputs[] = 'curso2';
        $inputs[] = 'curso3';
        $inputs[] = 'escolaridade';
        //$inputs[17] = 'duracao2';
        //$inputs[18] = 'duracao3';
        //$inputs[19] = 'situacao1';
        //$inputs[20] = 'situacao2';
        
        
        
        //Experi�ncia Profissional e idiomas
        
        $inputs[] = 'profissao1';
        $inputs[] = 'profissao2';
        $inputs[] = 'profissao3';
        $inputs[] = 'idioma1';
        //$inputs[28] = 'cargo1';
        //$inputs[29] = 'cargo2';
        //$inputs[30] = 'cargo3';
        
                
        //Objetivos
        
        //$inputs[34] = 'informacao5';
        //$inputs[35] = 'informacao6';
        //$inputs[40] = 'informacao7';
        
        //Outras Informa��es
        
        $inputs[] = 'informacao1';
        $inputs[] = 'informacao2';
        $inputs[] = 'informacao3';
        $inputs[] = 'informacao4';
        $inputs[] = 'informacao5';
        $inputs[] = 'informacao6';
        
        print_r($inputs);
        //$inputs[50] = 'naoexiste';
        
          function VerificarExiste($campo){ // Fun��o interna para uso de uma outra fun��o.
            if(isset($_POST["$campo"])&& !empty($_POST["$campo"])){ // Se est� setado e n�o estiver vazia retorne a variavel
                return $_POST[$campo]; //retorne a variavel
            }
                $_POST[$campo] = '';
                return $_POST[$campo]; // Se n�o ir� retorna vazio.
            
        }
        
        function PegarArray($array){ //Essa fun��o ir� utilizar a outra,retornando um array com as variaveis.
            $verificado = array(); //Ser� um array para a capta��o das variaveis.
            for($i = 0;$i < count($array);$i++){ // Fizemos um la�o para percorrer todo o array
                
                
              $verificado[$i] =  VerificarExiste($array[$i]);//Aqui o nosso array pega o retorno da fun��o interna
                
            }
            return $verificado; // e retornamos o nosso array contendo o valor das variaveis.
        }
        
         $dado = PegarArray($inputs); // Ir� fazer com que n�o dei erros de undefined variaveis.
        
        
        
        //CRIA??O DO PDF!
        
        require ('pdf/fpdf.php');

        $pdf = new FPDF();

        $pdf->addPage();
            
        
       
        
        $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa celula
        $pdf->Cell(0,15," Curr�culo Vitae",1,1,"C");


       $pdf->SetFont("Arial","B","20"); 
       $pdf->Cell(50,10," Nome: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C"); 
       $pdf->Cell(0,10," $dado[0] ",1,1); 
       
       
       
       $pdf->SetFont("Arial","B","20","L"); 
       $pdf->Cell(50,10," Endere�o: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C"); ; 
       $pdf->Cell(0,10," $dado[1] ",1,1); 
       
       
       $pdf->SetFont("Arial","B","20","L"); 
       $pdf->Cell(50,10," Email: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C");  
       $pdf->Cell(0,10," $dado[2] ",1,1); 
       
       
       $pdf->SetFont("Arial","B","20","L"); 
       $pdf->Cell(50,10," Telefone: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C"); 
       $pdf->Cell(0,10," $dado[3] ",1,1); 
       
       
       $pdf->SetFont("Arial","B","20"); 
       $pdf->Cell(50,10," Celular: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C"); 
       $pdf->Cell(0,10," $dado[4] ",1,1); 
       
       
       $pdf->SetFont("Arial","B","20"); 
       $pdf->Cell(50,10," Objetivo: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C"); 
       $pdf->Cell(0,10," $dado[5] ",1,1); 
       
       
       
        $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa c?lula
        $pdf->Cell(0,10," Forma��o ",1,1,"C");
       
       
       $pdf->SetFont("Arial","B","20","L"); 
       $pdf->Cell(50,10," Curso: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C"); 
       $pdf->Cell(0,10," $dado[6] ",1,1); 
       
         
       $pdf->SetFont("Arial","B","20","L"); 
       $pdf->Cell(50,10," Curso: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C");  
       $pdf->Cell(0,10," $dado[7] ",1,1); 
       
       
       $pdf->SetFont("Arial","B","20","L"); 
       $pdf->Cell(50,10," Curso: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C");  
       $pdf->Cell(0,10," $dado[8] ",1,1); 
       
       
       $pdf->SetFont("Arial","B","20","L"); 
       $pdf->Cell(50,10," Escolaridade: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C");  
       $pdf->Cell(0,10," $dado[9] ",1,1); 
       
       
        $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa c?lula
        $pdf->Cell(0,10," Experi�ncia Profissional: ",1,1,"C");
       
       $pdf->SetFont("Arial","B","20","L"); 
       $pdf->Cell(50,10," Profiss�o: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C"); 
       $pdf->Cell(0,10," $dado[10] ",1,1); 
       
        $pdf->SetFont("Arial","B","20","L"); 
       $pdf->Cell(50,10," Profiss�o: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C");  
       $pdf->Cell(0,10," $dado[11] ",1,1); 
       
        $pdf->SetFont("Arial","B","20","L"); 
       $pdf->Cell(50,10," Profiss�o: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C");  
       $pdf->Cell(0,10," $dado[12] ",1,1); 
       
       
       $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa c?lula
       $pdf->Cell(0,10," Experi�ncia em Idiomas: ",1,1,"C");
       
       
       $pdf->SetFont("Arial","B","20","L"); 
       $pdf->Cell(50,10," Linguagens: ",1,0); 
       
       $pdf->SetFont("Arial","","20","C");  
       $pdf->Cell(0,10," $dado[13] ",1,1); 
       
       
       
          // ----------- Outras informa��es -------------------//
       
       
       
         $pdf->SetFont("Arial","B","20"); // Definimos a fonte dessa c?lula
       $pdf->Cell(0,10," Outras Informa��es: ",1,1,"C");
       
       
       $pdf->SetFont("Arial","","20"); // Definimos a fonte dessa c?lula
        $pdf->Cell(0,10," $dado[14] ",1,1,"C");
       
         $pdf->SetFont("Arial","","20"); // Definimos a fonte dessa c?lula
        $pdf->Cell(0,10," $dado[15]  ",1,1,"C");
        
         $pdf->SetFont("Arial","","20"); // Definimos a fonte dessa c?lula
        $pdf->Cell(0,10," $dado[16] ",1,1,"C");
        
         $pdf->SetFont("Arial","","20"); // Definimos a fonte dessa c?lula
        $pdf->Cell(0,10,"  $dado[17] ",1,1,"C");
        
        
         $pdf->SetFont("Arial","","20"); // Definimos a fonte dessa c?lula
        $pdf->Cell(0,10," $dado[18] ",1,1,"C");
        
         $pdf->SetFont("Arial","","20"); // Definimos a fonte dessa c?lula
        $pdf->Cell(0,10," $dado[19] ",1,1,"C");
       
       
       
       
       
       
       
       // $pdf->Image('img/sitecurriculo1.png', 6, 2, 10, 1);
       $pdf->Image('img/sitecurriculo1.png', 80, 280, 50, 10);
       
       
       
     
       
        
       
        ob_start();
        $pdf->Output();

?>
            
    </body>
</html>
