<?php
//inserirProduto.php
include "produtosDB.php";

$nome 			= $_POST["nome"];
$preco 			= $_POST["preco"];
$qtde 			= $_POST["qtde"];
$categoria 		= $_POST["categoria"];

$target_dir = "imagens/";
$target_file = $target_dir . basename($_FILES["imagem"]["name"]);
move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file);

if (inserirProduto($nome, $preco, $qtde, $target_file, $categoria) ){
	header("Location: produtos.php?cadastrado=1");
}else{
	header("Location: produtos.php?cadastrado=0");
}
die();