<!doctype html>
<html class="no-js" lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Vitrine Unimart</title>

	<!-- Style -->
	<link rel="stylesheet" href="../lib/css/contato.css" />

	<!-- Modernizr -->
	<script src="../lib/js/modernizr.custom.14037.js"></script>

</head>
<body>
	
	<!-- start -content- -->
		<section class="content">
			
			<!-- TOP -->
			<?php include "lib/comp/top.php"; ?>

			<!-- SPACE -->
			<div class="space"></div>

				<!-- start -contato all- -->
					<section class="contato-all">
						
						<!-- CONTATO TITLE -->
						<div class="contato-title"><h1>LISTA DE LOJAS</h1></div>

						<!-- start -contato content- -->
						<div class="contato-content">
							
							<label for="nome">Nome</label>
							<input type="text" class="input" name="nome" />

							<label for="email">Email</label>
							<input type="text" class="input" name="email" />

							<label for="telefone">Telefone</label>
							<input type="text" class="input" name="telefone" />
							
							<textarea name="texto" class="input texto" cols="30" rows="10">Texto</textarea>

							<input type="submit" class="enviar" value="Enviar" />

						</div>
						<!-- end -contato content- -->	

						<!-- BT Voltar -->
						<a class="voltar" href="#">Voltar</a>

					</section>
				<!-- end -lojas all- -->
			
			<!-- SPACE -->
			<div class="space"></div>
				
			<!-- FOOTER -->
			<?php include "lib/comp/footer.php" ?>

		</section>
	<!-- end -content- -->

</body>
</html>