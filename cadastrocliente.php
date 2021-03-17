<?php
include "produtosDB.php";


$nomeco 			= $_POST['nomeco'];
$email1 			= $_POST['email1'];
$senha1			    = $_POST['senha1'];
$cep                = $_POST['cep'];
$rua                = $_POST['rua'];
$numero             = $_POST['numero'];
$cpt                = $_POST['cpt'];  
$bairro             = $_POST['bairro'];
$uf                 = $_POST['uf'];
$cidade             = $_POST['cidade'];

if (cliente($nomeco,$email1,$senha1,$cep,$rua,$numero,$cpt,$bairro,$uf,$cidade)){
	header("Location: usuario.php");

}else{
	header("Location: cliente.php");
}
die();




