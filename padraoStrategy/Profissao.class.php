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
        
        include 'Vocacao.class.php'; // Incluimos o comportamento das vocacões
        
        class Profissao{ // Criamos o projeto do que seria uma profissao
            
            
            private $Profissao; // Declaramos uma profissão
            
            
            public function __construct($newvocacao) {
                $this->Profissao = $newvocacao;
            }
            
            public function GetTrabalhar(){
               return $this->Profissao->Trabalhar();
            }
            
            
        }
        
        $pedreiro = new Profissao(new Pedreiro());
        
        echo $pedreiro->GetTrabalhar();
        
        echo '<hr/>';
        
        
        $reporter = new Profissao(new Reporter());
        echo $reporter->GetTrabalhar();
        
        echo '<hr/>';
        
        $programador = new Profissao(new Programador());
        echo $programador->GetTrabalhar();
        
        echo '<hr/>';
        
        ?>
    </body>
</html>
