			<div class="card">
				<h5 class="card-header">
					<i class="fa fa-plus"></i> Cadastrar Produto
					<a href="" data-toggle="collapse" 
					data-target="#form-produto">mostrar</a>
				</h5>
				<div id="form-produto" class="card-body collapse">
					<form action="inserirProduto.php" action="pedidoscadastro.php" enctype="multipart/form-data" method="POST">
						<div class="form-row">
							<label class="col-md-6">
								Nome do Produto
								<input class="form-control" type="text" name="nome">
							</label>
							<label class="col-md-3">
								Preço
								<input class="form-control" type="text" name="preco">
							</label>
							<label class="col-md-3">
								Quantidade
								<input class="form-control" type="number" name="qtde">
							</label>
						</div> <!-- form-row-->
						<div class="form-row">
							<label class="col-md-6">
								Imagem
								<input class="form-control" type="file" name="imagem">
							</label>
							<label class="col-md-4">
								Categoria
								<select class="form-control" name="categoria">
									<option>Livros</option>
									<option>Eletronicos</option>
									<option>Informática</option>
								</select>
							</label>
						</div> <!-- card-row -->
						<button class="btn btn-primary" type="submit" name="submit">
							<i class="fa fa-save"></i> Cadastrar</button>
						</form>
					</div> <!-- card-body -->
			</div><!-- card -->