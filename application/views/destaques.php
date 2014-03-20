<!doctype html>
<html class="no-js" lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Vitrine Unimart</title>

	<!-- Style -->
	<link rel="stylesheet" href="../lib/css/destaques.css" />
	<link rel="stylesheet" href="../lib/css/jRating.jquery.css" />

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

				<!-- IMPORTANTE - O while deverá ser feito entre as div's space - -->

				<!-- start -destaques- -->
					<section class="destaque">
						
						<!-- FOTO -->
						<div class="foto">
							<img src="../lib/img/foto.png" alt="">
						</div>

						<!-- BIO -->
						<div class="bio">
							<h1>NOME DA LOJA</h1>
							<h2>NOME DO PRODUTO</h2>
							<h3>R$ XX,00</h3>
						</div>

						<!-- AVALIAR -->
						<div class="avaliar">
							
							<!-- coracao -->
							<div class="coracoes">
								<div class="coracao" id="like-1"></div>
								<div class="coracao" id="like-2"></div>
								<div class="coracao" id="like-3"></div>
								<div class="coracao" id="like-4"></div>
								<div class="coracao" id="like-5"></div>
								<form action="#" id="form" method="post">
									<input type="hidden" id="likes" name="likes" value="3" />
								</form>
							</div>

							<!-- status -->
							<div class="status"></div>

						</div>

						<!-- SHARE -->
						<div class="share"></div>

					</section>
				<!-- end -destaques- -->
			
			<!-- SPACE -->
			<div class="space"></div>
			
			<!-- FOOTER -->
			<?php include "lib/comp/footer.php" ?>

		</section>
	<!-- end -content- -->

	<!-- Script -->
	<script src="../lib/js/jquery.js"></script>
	<script src="../lib/js/avaliar.js"></script>

</body>
</html>