<?php
include "conexao.php";

function inserirProduto($nome, $preco, $qtde, $imagem, $categoria){
	$conexao	= conectar();

	$sql = "INSERT INTO produtos VALUES (
	0, '$nome', '$preco', $qtde, '$imagem', '$categoria')";

	return mysqli_query($conexao, $sql);
}

function consultarProdutos(){
	$conexao	= conectar();
	$produtos   = array();
	$sql = "SELECT * FROM produtos ORDER BY nome";
	$rs = mysqli_query($conexao, $sql);
	while ($produto = mysqli_fetch_array($rs)){
		array_push($produtos, $produto);
	}
	return $produtos;
}

function apagarProduto($id){
	$conexao = conectar();
	$sql = "DELETE FROM produtos WHERE idProduto=$id";
	return mysqli_query($conexao, $sql);
}

function usuario($nomec, $email, $senha){
	$conexao	= conectar();

	$sql = "INSERT INTO usuario VALUES (
	0, '$nomec', '$email', '$senha')";

	return mysqli_query($conexao, $sql);
}
function Cliente($nomeco, $email1, $senha1, $cep, $rua, $numero, $cpt, $bairro, $uf, $cidade){
	$conexao = conectar();
	$sql = "INSERT INTO cliente  VALUES(
	0, '$nomeco', '$email1', '$senha1', '$cep', '$rua', '$numero', '$cpt', '$bairro', '$uf', '$cidade')";
	return mysqli_query($conexao, $sql);
}
