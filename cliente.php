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
     <i class="fa fa-plus"></i> Cadastro de Cliente
     <a href="" data-toggle="collapse" 
     data-target="#form-produto">mostrar</a>
   </h5>
   <div id="form-produto" class="card-body collapse">
    

    <form action="cadastrocliente.php"  method="POST">
     <div class="form-row">
      <label class="col-md-6">
       Nome Completo
       <input class="form-control" type="text" name="nomeco">
     </label>
     <label class="col-md-3">
       E-mail
       <input class="form-control" type="text" name="email1">
     </label>
     <label class="col-md-4">
       Senha
       <input class="form-control" type="text" name="senha1">
     </label>
     <label class="col-md-4">
       Confirmar Senha
       <input class="form-control" type="text" name="senha">
     </label>

   </div> <!-- form-row-->
   <div class="form-row">
    <label class="col-md-2">
     

      Cep:
      <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
      onblur="pesquisacep(this.value);" placeholder="Ex.: 00000-000">
    </label>

    <label  class="col-md-5">
      Rua:
      <input class="form-control"  name="rua" type="text" id="rua" size="60" >
    </label>

    <label  class="col-md-3">
      N°:
      <input class="form-control"  name="numero" type="text" ><br> 
    </label>

    <label  class="col-md-4">
      Complemento:
      <input class="form-control"  name="cpt" type="text" >
    </label>

    <label  class="col-md-3">
      Bairro:
      <input class="form-control"  name="bairro" type="text" id="bairro" size="40" >
    </label>

    <label  class="col-md-3">
      Estado:
      <input class="form-control"  name="uf" type="text" id="uf" size="2">
    </label>

    <label  class="col-md-3">
      Cidade:
      <input class="form-control"  name="cidade" type="text" id="cidade" size="40" ><br>
    </label>
    
    
    
  </div> <!-- form-row-->


  
  <button class="btn btn-primary" type="submit" name="submit">
   <i class="fa fa-save"></i> Confirmar Cadastro</button>
 </form>
</div> <!-- card-body -->
</div><!-- card -->


</main>
</div> <!-- row -->






<script type="text/javascript">

	function alerta(){
		if($('#senha1').val() != $('#senha2').val()){
      alert('Senhas diferentes');
      return false;
    }
  }
  
  function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            
          }

          function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
          }
        }
        
        function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
              }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
          }
        }
      </script>


    </body>
    </html>