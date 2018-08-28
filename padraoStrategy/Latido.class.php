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
        
        abstract class Latido{ // Aqui criamos um projeto do latido geral,não podendo ser instanciado.
            
            public function Latir(){ // Esse método será geral para todos os latidos.
                
            }
        }
        
        class LatidoMudo extends Latido{ //Extendemos a classe,declarando um latido Mudo
            public function Latir() { //Irá receber da superclasse,apenas alteramos para o que queremos.
                return ' <b>Não conseguio latir!</b>'; // Retorne o latido
                parent::Latir();
            }
        }
        
        class LatidoAlto extends Latido{ //Extendemos a classe,declarando um latido Alto
            public function Latir() { //Irá receber da superclasse,apenas alteramos para o que queremos.
                 return ' <b>Latiu alto!</b>'; // Retorne o latido
                parent::Latir();
            }
        }
        
        class LatidoBaixo extends Latido{ //Extendemos a classe,declarando um latido Baixo
            public function Latir() { //Irá receber da superclasse,apenas alteramos para o que queremos.
                return ' <b>Latiu baixo!</b>'; // Retorne o latido
                parent::Latir();
            }
        }
        
        //OBS: A superclasse não podera ser instanciada,apenas as subclasses.
        
        ?>
    </body>
</html>
