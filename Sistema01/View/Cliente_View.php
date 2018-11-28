<?php
include_once('../Control/Cliente_Control.php');
include_once('../Model/Cliente_Model.php');

$cliente = new Cliente_Control();
$cliente1 = new Cliente_Model();
$dados = $cliente->getDados();
   echo "<table class='table-striped table-hover' width='60%' border=1 align='center'> <tr bgcolor='silver'> <th>Nome</th><th>Cpf</th><th>Ação</th> <th>Ação</th> </tr>";
    foreach ($dados as $valor) {
       	 echo "<tr><td>".$valor['nome']."</td>";
       	 echo "<td>".$valor['cpf']."</td>";
       	 echo "<td><a href=?acao1=".$valor['id']."> Atualizar</a></td>";
       	 echo "<td><a href=?acao=".$valor['id']."> Deletar </a></td>";
       }   
    echo "</tr></table>";

if(!empty(@$_GET['acao'])){
	$id = $_GET['acao'];
  $cliente->getDelete($id);
}
/*
if(!empty(@$_GET['acao1'])){
  $id = $_GET['acao1'];
  $cliente->getUpdate($id);
}
*/

if(@$_POST['btn'] == 'btn1'){
 
  $cliente1->setNome(@$_POST['nome']);
  $cliente1->setCpf(@$_POST['cpf']);
  $cliente->setAdd($cliente1->getNome(),$cliente1->getCpf());
}
if(@$_POST['btn'] == 'btn2'){


}

?>
<head>
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap.css">
</head>
<fieldset>
	<legend> Cadastro de Cliente</legend>
	<form method="POST">
		Nome: <input type="text" name="nome">
		Cpf: <input type="text" name="cpf">
		<button class='btn btn-info' type="submit" name="btn" value="btn1"> Cadastrar </button>
		<button class='btn btn-success' type="submit" name="btn" value="btn2"> Atualizar </button>
	</form>
</fieldset>