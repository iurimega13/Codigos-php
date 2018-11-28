<?php
  include_once('config.php');
  Class Conexao{
  	private $con;
  	function __construct(){
  		try{
          $this->con = new PDO("mysql:host=".HOST.";dbname=".DB.";",USUARIO,SENHA);
  		}catch(PDOException $e){
           echo "Erro na Conexão ". $e->getMessage();
  		}
  	}
  	function getConexao(){
  		return $this->con;
  	}
  }

?>



