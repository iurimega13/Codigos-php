<?php
include_once('../Control/Cliente_Control.php');
include_once('../Model/Cliente_Model.php');

$cliente = new Cliente_Control();
$cliente1 = new Cliente_Model();
$nome1;
$cpf1;
$dados = $cliente->getDados();
   echo "<table class='table-striped table-hover' width='60%' border=1 align='center'> <tr align='center'> <th>Nome</th><th>Cpf</th><th>Editar</th> <th>Ação</th> </tr>";
    foreach ($dados as $valor) {
       	 echo "<tr><td>".$valor['nome']."</td>";
       	 echo "<td>".$valor['cpf']."</td>";
       	 echo "<td><a href=?acao1=".$valor['id']."> Editar</a></td>";
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
  $dados = $cliente->getUpdate($id);
  
  $nome1 = $dados[0];;
  $cpf1 = $dados[1];
}
*/

if(!empty(@$_GET['acao1'])){
  $id = @$_GET['acao1'];
  $d = $cliente->getUpdate($id);
  foreach ($d as $value) {
    $nome1 = $value['nome'];
    $cpf1 = $value['cpf'];
    $id1 = $value['id'];
  }
}

if(@$_POST['btn'] == 'btn1'){
 
  $cliente1->setNome(@$_POST['nome']);
  $cliente1->setCpf(@$_POST['cpf']);
  $cliente->setAdd($cliente1->getNome(),$cliente1->getCpf());
}
if(@$_POST['btn'] == 'btn2'){
  $id1 = @$_POST['id'];
  $nome1 = @$_POST['nome'];
  $cpf1 = @$_POST['cpf'];
  $cliente->Atualizar($id1,$nome1,$cpf1);
}

?>
<head>
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap.css">
</head>
<fieldset>
	<legend> Cadastro de Cliente</legend>
	<form method="POST">
    <input type="hidden" name="id" value="<?php echo @$id1; ?>">
		Nome: <input type="text" name="nome" value="<?php echo @$nome1; ?>" >
		Cpf: <input type="text" name="cpf" value="<?php echo @$cpf1; ?>" >
		<button class='btn btn-info' type="submit" name="btn" value="btn1"> Cadastrar </button>
		<button class='btn btn-success' type="submit" name="btn" value="btn2"> Atualizar </button>
	</form>
</fieldset>