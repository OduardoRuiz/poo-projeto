<?php
//mensagens.php

function mostrarMensagem($tipo){
	$mensagem = "";
	if (isset($_SESSION[$tipo])){
		$mensagem = "<p class='alert alert-$tipo text-center'>$_SESSION[$tipo]</p>";
	}
	return $mensagem;
}