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
        include 'Latido.class.php'; // Irá importa o comportamento de Latir
        
         class Dog{ //Aqui criamos o projeto do que seria um cachorro
            
            // Declaramos os atributos do cachorro
            private $TipoDog; //Irá receber o tipo do cachorro  
            private $Latido; //Irá receber o comportamento de Latir
            
            //Ao ser Criado o cachorro,deverá conter  um novo comportamento de latir,e o tipo.
            public function __construct($newlatir,$tipodog) {
                $this->Latido = $newlatir; // Recebe um new latido
                $this->TipoDog = $tipodog; // Recebe um texto representando o tipo do cachorro.
            }
            
            //No decorrer do programa se querermos mudar o nome do cachorro usamos o Set
            public function SetTipoDog($tipodog){
                $this->TipoDog = $tipodog; // Receba o tipo do cachorro
            }
            
            //No decorrer do programa se querermos mudar o latir do cachorro usamos o Set
            public function SetLatir($newlatir){ // Recebe o novo latido.
                $this->Latido = $newlatir; // O latido será guardado no atributo Latido.
            }
            
            //Se quisermos mostrar o ladito do cachorro utilizamos o Get
            public function GetLatir(){
                return $this->Latido->Latir(); //Utilize o método de latir.
            }
            
            //Se quisermos mostrar o tipo do cachorro utilizamos o Get
            public function GetTipoDog(){
                return $this->TipoDog; // Retorne o tipo do cachorro.
            }
            
        }
        
        
        //Aqui criamos os nossos cachorros: 
        $viralata = new Dog(new LatidoBaixo,'Vira Lata');
        //Será um novo cachorro com um novo latido,e com o tipo
        
        $pastoralemao = new Dog(new LatidoAlto,'Pastor Alemao');
        //Será um novo cachorro com um novo latido,e com o tipo
        
        $pitbull = new Dog(new LatidoMudo,'Pit Bull');
        //Será um novo cachorro com um novo latido,e com o tipo
        
        echo $viralata->GetTipoDog(); //Mostramos o tipo do cachorro
        echo $viralata->GetLatir().'<hr/>'; //Mostramos o latido do cachorro
        
        echo $pastoralemao->GetTipoDog(); //Mostramos o tipo do cachorro
        echo $pastoralemao->GetLatir().'<hr/>'; //Mostramos o latido do cachorro
        
        echo $pitbull->GetTipoDog(); //Mostramos o tipo do cachorro
        echo $pitbull->GetLatir(); //Mostramos o latido do cachorro
        
        ?>
    </body>
</html>
