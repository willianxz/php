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
        
       
        
        abstract class Cadastro{ // Crio a classe cadastro como Abstract para não ser instanciada(para não ser criado o objeto Cadastro).
            
            
            private $Nome;
            private $Telefone; //Declaramos os atributos Gerais que seram utilizados
            private $Endereco;
            
            
            public function __construct($nome,$endereco,$telefone) { // Irei utilizar os set nome para verificar se pode realmente utilizar.
             
                try {
                $this->SetNome($nome);
                $this->SetEndereco($endereco); // Tentamos setar os valores aos atributos gerais
                $this->SetTelefone($telefone);
               
                    
                } catch (Exception $ex) {
                   return $ex = 'Não foi possivel setar os valores!'; 
                }
                
            }
            
            public function SetNome($nome){
               
               $this->Nome = $nome;
               
            }
            
            public function SetEndereco($endereco){
                $this->Endereco = $endereco;
            }
            
             public function SetTelefone($telefone){
                $this->Telefone = $telefone;
            }
            
            
            public function GetNome(){
                return $this->Nome;
            }
            
            public function GetEndereco(){
                return $this->Endereco;
            }
            
            public function GetTelefone(){
                return $this->Telefone;
            }
            
            
            
        }
        
        
        class CadastroCliente extends Cadastro{
            
            
            private $SaldoDisponivel;
            
            
            public function __construct($nome, $endereco, $telefone,$saldodisponivel) {
                parent::__construct($nome, $endereco, $telefone);
                
                $this->SetSaldoDisponivel($saldodisponivel);
                
            }
            
            
            public function SetSaldoDisponivel($saldodisponivel){
                $this->SaldoDisponivel = $saldodisponivel;
            }
            
            public function GetSaldoDisponivel(){
                return $this->SaldoDisponivel;
            }
            
            public function CadastrarCliente($objcliente){
                
               
                
                if(is_a($objcliente, 'CadastroCliente')){ //Se o que veio for um objeto e for da classe que eu quero,então faça:
                    
                     $conexao = include 'conectardb.php'; //Incluimos o arquivo de conexão.
                     
                     //Cria a query desejada
                     $query = "INSERT INTO cliente(nome,telefone,endereco,saldodisponivel)VALUES('".$this->GetNome()."','".$this->GetTelefone()
                             ."','".$this->GetEndereco()."','".$this->GetSaldoDisponivel()."')";
                     
                     $result = mysqli_query($conexao, $query); // Executa a query!
                     
                     if($result){ // Retorne o resultado.
                         return 'Cliente Cadastrado com sucesso!';
                     }else{
                         return 'Não foi possivel Cadastrar o Cliente!';
                     }
                     
                    
                }else{ //Se não for um objeto ou não veio da classe requisitada avise:
                    echo 'Crie primeiramente o objeto cliente!'; 
                }
            }
            
            
        }
        
       
        class CadastroFuncionario extends Cadastro{
            
            private $Salario;
            
            public function __construct($nome, $endereco, $telefone,$salario) {
                parent::__construct($nome, $endereco, $telefone);
                
                $this->SetSalario($salario);
            }
            
            public function SetSalario($salario){
                $this->Salario = $salario;
            }
            
            public function GetSalario(){
                return $this->Salario;
            }
            
            public function CadastrarFuncionario($objfuncionario){
                
                if(is_a($objfuncionario, 'CadastroFuncionario')){
                    
                    $conexao = include 'conectardb.php';
                    
                    $query = "INSERT INTO funcionario(nome,telefone,endereco,salario)VALUES";
                    $query .= "('".$objfuncionario->GetNome()."','".$this->GetTelefone()."','".$this->GetEndereco()."','".$this->GetSalario()."')";
                    
                    $result = mysqli_query($conexao, $query);
                    
                    if($result){
                        return 'Funcionario Cadastrado com sucesso';
                    }else{
                        return 'Não foi possivel Cadastrar o Funcionario';
                    }
                    
                }else{
                   echo 'Crie primeiramente o objeto Funcionario!'; 
                }
                
            }
            
        }
        
       // $teste = new CadastroCliente('joao gentil', 'rua fernando antunes', '8487945', '600');
        
        
        //echo $teste->CadastrarCliente($teste);
        
       
        //$teste = new CadastroFuncionario('Willian', 'Rua aguiar', '485435334', '800'); // Seta os valores para serem cadastrados.
         
       
       //echo $teste->CadastrarFuncionario($teste); //Cria o cadastro.  
        
       //$class_methods = $class_methods = get_class_methods('CadastroFuncionario'); Verifica os métodos existentes.
      
       //$saber = count($class_methods); // Aqui conta quantos métodos existem
       
       //echo $saber; //Aqui mostra quantos métodos existem.
       
       //echo '<hr/>'; // Separa com uma linha
       
       //for($i=0;$i < $saber;$i++){ //Escreve todos os métodos.
          // echo $class_methods[$i].'<br/>';
       //}
        ?>
    </body>
</html>
