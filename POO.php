<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page Title</title>
    </head>
    <body>
        <?php
            class aluno{
                public $nome;
                public $idade;
                public $cpf;

                function _contruct(){
                    $this->nome = "iuri";
                    $this->idate = 17;
                    $this->cpf = 040;
                }

                function setNome($nome){
                    $this->nome = $nome;
                    
                }

                function getNome(){
                    return $this->nome;
                }

                function setIdade($idade){
                    $this->idade = $idade;
                }

                function getIdade(){
                    return $this->idade;
                }

                function setCpf($cpf){
                    $this->cpf = $cpf;
                }
                function getCpf(){
                    return $this->cpf;
                }
            }

        ?>
    </body>
</html>