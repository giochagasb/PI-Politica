<?php include_once('../includes/header.php'); ?>

<main class="container-fluid text-justify">
	<div class="container contato">
    <article class="row justify-content-center">
      <div class="col-10 col-sm-12 col-md-12 col-lg-12">
			<div class="form1">
			<form>
  				<div class="form-group">
    				<label class="sr-only" for="inlineFormInputName2">Nome</label>
  					<input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Nome">
  				</div>
  				<div class="form-group">
    				<label for="exampleInputEmail1">Endereço de email</label>
    				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
    				<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  				</div>
				<div class="form-group">
    				<label for="exampleFormControlTextarea1">Mensagem</label>
    				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  				</div>
				<div class="botão">
  					<button type="submit" class="btn btn-primary mb-2">Enviar</button>
				</div>
			</form>
			</div>
	  	</div>
	</article>
	</div>


</main>		
<?php include_once('../includes/footer.php'); ?>