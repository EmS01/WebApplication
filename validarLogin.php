<?php

 $nome = $_POST["nomeUsuario"]; 
 $senha = $_POST["senha"]; 

 $mysqli = new mysqli("localhost","root","","mvc"); 

 if($mysqli -> connect_errno){
 	echo "erro com banco de dados Mysql: " . $mysqli -> connect_errno;
 	exit();  
 }

 $sql = "select * from usuario where nomeUsuario = '"
 . $nome ."' and senha = '"
 .$senha."'"; 

 $valido = false; 

 $rs = $mysqli -> query($sql); 


 if($rs) {
 	if($row = $rs -> fetch_row()){
 		print_r($row); 

 		$valido = true; 
 	} 
  $rs -> free_result(); 
 }

 $mysqli -> close(); 

 if($valido){

 	//echo "Login Aceito";
 	header("location: /menuPrincipal");

 }

 else{
 	header("location: index.php?erroMsg='ERRO LOGIN'");
 	//echo "ERRO - LOGIN INVALIDO";

 }

?>