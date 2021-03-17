<?php 
include "produtosDB.php";
$produtos = consultarProdutos(); 
?>

<div class="card">
	<h5 class="card-header">
		<i class="fa fa-gift"></i> 
		Produtos Cadastrados
	</h5>
	<div class="card-body">
		<table class="table">
			<tr>
				<th></th>
				<th>Nome</th>
				<th>Preço</th>
				<th>Qtde</th>
				<th>Categoria</th>
				<th></th>
			</tr>
			<?php
			foreach ($produtos as $produto){
				$id 		= $produto["idProduto"];
				$nome 		= $produto["nome"];
				$preco 		= $produto["preco"];
				$qtde 		= $produto["qtde"];
				$categoria 	= $produto["categoria"];
				$imagem 	= $produto["imagem"];

				echo "<tr>
				<td>
				<img src='$imagem' class='foto'>
				</td>
				<td>{$nome}</td>
				<td>R$ {$preco}</td>
				<td>{$qtde}</td>
				<td>{$categoria}</td>
				<td><a href='apagarProduto.php?id=$id' class='btn btn-danger'>x</a></td>
				<td><a href='pedidos.php?id=$id' class='btn btn-danger'>comprar</a></td>
				
				</tr>";	


			}


			?>
		</table>		
	</div> <!-- card-body-->
</div> <!-- card-->

