<?php 
include "produtosDB.php";
$nomec= $_POST['nomec'];
$email= $_POST['email'];
$senha = $_POST['senha'];


$cc= mysqli_connect("localhost","root","","loja");

$verifica = mysqli_query($cc, "SELECT * FROM cliente WHERE email1 = '$email' AND senha1 = '$senha'") or die("erro ao selecionar");
if (mysqli_num_rows($verifica)<=0){
	header("Location: cliente.php");
	
	die();
}else{
	
	header("Location: produtos.php");
}

