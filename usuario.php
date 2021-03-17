<?php 
session_start();
include "cabecalho.php"; 
include "mensagens.php"; 

?>

<div class="row">
	<?php include "menu.php"; ?>
	<main class="col-md-9">
		<div class="card">

			<h5 class="card-header">
				<i class="fa fa-plus"></i> Login de Usuario
				<a href="" data-toggle="collapse" 
				data-target="#form-produto">mostrar</a>
			</h5>
			<div id="form-produto" class="card-body collapse">
				<form action="usuariocadastro.php" enctype="multipart/form-data" method="POST">
					<div class="form-row">
						
						<label class="col-md-6">
							Email
							<input class="form-control" type="text" name="email">
						</label>
						
						
						<label class="col-md-3">
							Senha
							<input class="form-control" type="password" name="senha">
						</label>
					</div> <!-- form-row-->
					
					<input  class="btn btn-primary"   type="submit" name="Entrar" value="entrar">
					
					<a href="cliente.php" class="btn btn-primary">Cadastrar-se</a>


				</form>
			</div> <!-- card-body -->
		</div><!-- card -->
		
		
	</main>
</div> <!-- row -->



</body>
</html>