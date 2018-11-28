<?php
include_once('../Control/Carro_Control.php');
if(@$_POST['btn'] == 'btn1'){
	$modelo = $_POST['modelo'];

	Add($modelo);
    echo View();	
}

?>
<head>
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap.css">
</head>
<fieldset>
	<legend> Cadastro de Carros</legend>
	<form method="POST">
		Modelo: <input type="text" name="modelo">
		<button class='btn btn-danger' type="submit" name="btn" value="btn1"> Cadastrar </button>
	</form>
</fieldset>