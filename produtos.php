<?php 
session_start();
include "cabecalho.php"; 
include "mensagens.php"; 

?>

<div class="row">
	<?php include "menu.php"; ?>
	<main class="col-md-9">
		<?php echo mostrarMensagem("danger"); ?>
		<?php echo mostrarMensagem("success"); ?>
		
		<?php include "produtos-form.php"; ?>
		<?php //include "produtos-filtro.php"; ?>
		<?php include "produtos-lista.php"; ?>
	</main>
</div> <!-- row -->
</body>
</html>