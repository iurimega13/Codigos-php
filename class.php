<?php
    class Dados{
        private $nome;
        private $fone;

        function __construct(){
            $this->nome = 'defaut';
            $this->fone = '99546-0113';
        }
        function setNome($nome){
            $this->nome = $nome;
        }
        function getNome(){
            echo $this->nome . '<br>';
        }
        function setFone($fone){
            $this->fone = $fone;
        }
        function getFone(){
            echo $this->fone . '<br>';
        }
    }
?>
