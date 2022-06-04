<?php include_once('../includes/header.php'); ?>

<article>
			<div class="form1">
			<h1>Contato</h1>
			<form action="/pagina-processa-dados-do-form" method="post">
				<div>
					<label for="nome" id="name">Nome:</label>
					<input type="text" id="nome" />
				</div>
				<div>
					<label for="email" id="mail">E-mail:</label>
					<input type="email" id="email" />
				</div>
				<div>
					<label for="msg" id="mens">Mensagem:</label>
					<textarea id="msg"></textarea>
				</div>
				<div class="button">
					<button type="submit">Enviar sua mensagem</button>
				</div>
			</form>
			</div>
		</article>

<?php include_once('../includes/footer.php'); ?>