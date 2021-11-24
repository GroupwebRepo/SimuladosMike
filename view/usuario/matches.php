<?php include('inc/head.php') ?>

<body>
	<div class="wrapper">

	<?php include('inc/sidebar.php') ?>


		<div class="main">
		<?php include('inc/nav-superior.php') ?>

			<main class="content">

				<section id="meusMatches">
					<div class="container-fluid p-0">

						<h1 class="h3 mb-3">Meus Últimos Matches ♥</h1>

						<div class="row">
							<div class="col-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Algumas empresas entraram no seu perfil </h5>
										<h6 class="card-subtitle text-muted"><strong>Essas são as vagas que deram match com você:</strong></h6>
									</div>
									<div class="row">
										<?php 
											$vagas = array(
												array(
													'vaga' => 'Pessoa especialista em excel',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo, São Paulo, Brasil',
													'imagem' => '/assets/img/geral/vaga.jpg'

												),
												array(
													'vaga' => 'Pessoa especialista em excel',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo, São Paulo, Brasil',
													'imagem' => '/assets/img/geral/vaga.jpg'

												),
												array(
													'vaga' => 'Pessoa especialista em excel',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo, São Paulo, Brasil',
													'imagem' => '/assets/img/geral/vaga.jpg'

												),
												array(
													'vaga' => 'Pessoa especialista em excel',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo, São Paulo, Brasil',
													'imagem' => '/assets/img/geral/vaga.jpg'

												),
											);
											foreach($vagas as $vaga){ 
										?>
										<div class="col-md-6">
											<div class="vaga">
												<div class="img-externo">
													<img class="vaga-img" src="<?php echo VIEW_URL; echo $vaga['imagem'] ?>" alt="vaga">
												</div>
												<div class="vaga-info">
													<a href="<?php echo VIEW_URL; echo $vaga['vagaLink'] ?>" ><h2 class="h3 mb-3"><?php echo $vaga['vaga'] ?></h2></a>
													<h5><?php echo $vaga['empresa'] ?></h5>
													<p><?php echo $vaga['cidade'] ?></p>
													<small>Há 5 dias</small>
												</div>
											</div>
										</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>

				</section>
			</main>

			<?php include('inc/footer.php') ?>

		</div>
	</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?php echo VIEW_URL ?>/assets/js/app.js"></script>
<script src="<?php echo VIEW_URL ?>/assets/js/custom.js"></script>

</html>
