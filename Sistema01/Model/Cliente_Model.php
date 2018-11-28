<?php
Class Cliente_Model{
	private $nome;
	private $cpf;
	private $rg;
	private $datanasc;

	function __construct(){
		$this->nome = "dafault";
		$this->cpf = 0;
		$this->rg=0;
		$this->datanasc = "01-01-2000";
	}
	function setNome($nome){
		$this->nome=$nome;
	}
	function getNome(){
		return $this->nome;
	}
	function setCpf($cpf){
		$this->cpf=$cpf;
	}
	function getCpf(){
		return $this->cpf;
	}

}
?>