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
        
        
        
        class CadastroDinamico{
            
            private $Hostname;
            private $Usuario;
            private $Senha;
            private $Database;
            private $Tipoquery;
            private $Tabela;
            private $Colunas;
            
            
            public function __construct($hostname,$usuario,$senha,$database) {
                $this->Hostname = $hostname;
                $this->Usuario = $usuario;
                $this->Senha = $senha;
                $this->Database = $database;
                
            }
            
            
            public function SetQuery($tipoquery,$tabela,$colunas){
                $this->Tipoquery = strtolower($tipoquery);
                $this->Tabela = strtolower($tabela);
                $this->Colunas = strtolower($colunas);
                
                
            }
            
            
            
            
            private function ConectarDb(){
                
                $conexao = mysqli_connect($this->Hostname, $this->Usuario, $this->Senha, $this->Database);
                
                return $conexao;
            }
            
           
            
            public function CadastrarObjeto($obj,$classe){
                
                 if(is_a($obj, $classe)){
                     
                    
                        $conexao = $this->ConectarDb();
                        
                        switch ($this->Tipoquery) {
                            case 'insert':
                                     $query = "INSERT INTO ".$this->Tabela."(".$this->Colunas.")VALUES (".$metodos.")";   

                                break;
                            case 'delete':


                                break;
                            
                            case 'select':


                                break;
                            
                            case 'update':


                                break;

                            default:
                                break;
                        }
                        
                        
                       $result =  mysqli_query($conexao, $query);
                    
                        return $result;
                
                 
            }else{
                echo 'Por favor,passe por parâmetro o objeto criado,e o nome da classe que o construio!';
            }
            
            }
            
            
            
            
        }
        
        include_once '../empresa/cadastro.class.php';
        
        $cliente = new CadastroCliente('will', 'rua lima', '9548444', '900');
      
        
        $testar = new CadastroDinamico('localhost','root','','sistema');
        
        
        $testar->SetQuery('insert','cliente','nome,telefone,endereco,saldodisponivel');
        
        echo $testar->CadastrarObjeto($cliente,'CadastroCliente');
        
        
           ?>
    </body>
</html>
