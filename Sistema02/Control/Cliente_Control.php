<?php
  include_once('../bd/conexao.php');
  Class Cliente_Control{
      public $con;
      public $conexao;
      function __construct(){
      	$this->con = new Conexao();
        $this->conexao = $this->con->getConexao();
      } 
     function setAdd($nome, $cpf){
       $sql = "INSERT INTO cliente(nome,cpf) VALUES (:nome, :cpf)";
       $dados = $this->conexao->prepare($sql);
       $dados->bindValue(":nome",$nome);
       $dados->bindValue(":cpf",$cpf);
       $dados->execute();
       echo "Dados salvos com sucesso";
       header("Location:../view/Cliente_view.php");
     }
     function getDados(){
       $sql = "SELECT * FROM cliente";
       $dados = $this->conexao->prepare($sql);
       $dados->execute();
       return $dados;
     }

     function getDelete($id){
     	$sql = "Delete from cliente where id=:id";
     	$dados = $this->conexao->prepare($sql);
     	$dados->bindValue(":id",$id);
     	$dados->execute();
     	echo "<font color='red'>Dados deletados </font>";
     	header("Location:../view/Cliente_view.php");
     }
     function getUpdate($id){
     	$sql = "SELECT id,nome,cpf from cliente where id=:id";
     	$dados = $this->conexao->prepare($sql);
        $dados->bindValue(":id",$id);
        $dados->execute();
        return $dados;
     }
     function Atualizar($id,$nome, $cpf){
     	$sql = "UPDATE cliente set nome=:nome,cpf=:cpf where id=:id";
     	$dados = $this->conexao->prepare($sql);
     	$dados->bindValue(":nome",$nome);
     	$dados->bindValue(":cpf",$cpf);
     	$dados->bindValue(":id",$id);
     	$dados->execute();
     	header("Location:../view/Cliente_view.php");
     }
  }
?>	