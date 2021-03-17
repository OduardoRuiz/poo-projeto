<?php
//apagarProduto.php
include "produtosDB.php";
session_start();
$id = $_GET["id"];
if (apagarProduto($id)){
	$_SESSION["success"] = "Apagado com sucesso";
	header("Location: produtos.php");
}
else{
	$_SESSION["danger"] = "Erro ao apagar";
	header("Location: produtos.php");
}
