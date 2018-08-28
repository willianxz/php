<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        abstract class Vocacao{ // Criamos um projeto de como seria uma vocacao
            
            public function Trabalhar(){ //Ela teria o comportamento geral de trabalhar
                
            }
            
        }
        
        class Pedreiro Extends Vocacao{ //Criamos um projeto de como seria um pedreiro
            
            
            public function Trabalhar() {//Ele iria ter que trabalhar
                
                return "O pedreiro está trabalhando na obra!"; // ele estará numa obra
                parent::Trabalhar();
            }
            
         }
        
         class Reporter Extends Vocacao{
             
             
             public function Trabalhar() {
                 
                 return "O Reporte esta fazendo uma entrevista!"; // o reporte estara numa entrevista
                 parent::Trabalhar();
             }
         }
         
         class Programador extends Vocacao{
             
             public function Trabalhar() {
                 
                 return "O Programador esta programando..."; // eu...programando..
                 parent::Trabalhar();
             }
             
         }
         
        
        
        ?>
    </body>
</html>
