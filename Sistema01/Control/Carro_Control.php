<?php

include_once('../Model/Carro_Model.php');
$carro = new Carro();

function Add($modelo){
	global $carro;
	$carro->setModelo($modelo);
}
function View(){
	global $carro;
	return $carro->getModelo();
}

?>