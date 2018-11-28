<?php
Class Carro{
	private $modelo;
	private $placa;
	private $cor;
	function __construct(){
		$this->modelo = "dafault";
		$this->placa = 0;
		$this->cor="branco";
	}
	function setModelo($modelo){
		$this->modelo=$modelo;
	}
	function getModelo(){
		return $this->modelo;
	}
}
?>