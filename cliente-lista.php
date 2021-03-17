<?php 
include "produtosDB.php";
$produtos = consultarclientes(); 
?>

<div class="card">
	<h5 class="card-header">
		<i class="fa fa-gift"></i> 
		Clientes Cadastrados
	</h5>
	<div class="card-body">
		<table class="table">
			<tr>
				<th></th>
				<th>Nome</th>
				<th>email</th>
				
				<th></th>
			</tr>
			<?php
				foreach ($clientes as $cliente){
					$id 		= $cliente["idcliente"];
					$nome 		= $cliente["nomeco"];
					$imail 		= $cliente["email1"];
					

					
				}


			?>
		</table>		
	</div> <!-- card-body-->
</div> <!-- card-->

