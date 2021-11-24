<?php
include('inc/head.php');
verificaSessao();
?>

<body>
	<div class="wrapper">

		<?php include('inc/sidebar.php') ?>

		<div class="main">
			<?php include('inc/nav-superior.php') ?>
				<main class="content">
					<div class="container-fluid p-0">

						<div class="row mb-2 mb-xl-3">
							<div class="col-auto d-none d-sm-block">
								<h2 class="h3 mb-3"><strong>Novas vagas</strong> Disponíveis</h2>
						</div>
						<div class="row">
							<div class="col-6 col-lg-6 col-xxl-6 d-flex">
								<div class="card flex-fill">
									<div class="card-header">

										<h5 class="card-title mb-0">Últimos Matches<i class="align-middle ml-2" data-feather="heart"></i></h5>
									</div>
									<table class="table table-hover my-0">
										<thead>
											<tr>
												<th class="d-none d-xl-table-cell">Vaga</th>
												<th class="d-none d-xl-table-cell">Empresa</th>
												<th class="d-none d-md-table-cell">Cidade</th>
												<th class="d-none d-md-table-cell">Ação</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$matches = array(
												array(
													'vaga' => 'Pessoa especialista em Powerpoint',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo - SP'
												),
												array(
													'vaga' => 'Pessoa especialista em Powerpoint',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo - SP'
												),
												array(
													'vaga' => 'Pessoa especialista em Powerpoint',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo - SP'
												),
												array(
													'vaga' => 'Pessoa especialista em Powerpoint',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo - SP'
												),
												array(
													'vaga' => 'Pessoa especialista em Powerpoint',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo - SP'
												),
												array(
													'vaga' => 'Pessoa especialista em Powerpoint',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo - SP'
												),
											);
											foreach($matches as $match){
											?>
											<tr>
												<td class="d-none d-md-table-cell"><?php echo $match['vaga'] ?></td>
												<td class="d-none d-md-table-cell"><?php echo $match['empresa'] ?></td>
												<td class="d-none d-md-table-cell"><?php echo $match['cidade'] ?></td>
												<td class="d-none d-md-table-cell text-center"><a href="<?php echo VIEW_URL; echo $match['vagaLink'] ?>"><i class="align-middle" data-feather="eye"></i></a></td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-6 col-lg-6 col-xxl-6 d-flex">
								<div class="card flex-fill">
									<div class="card-header">

										<h5 class="card-title mb-0">Novas vagas</h5>
									</div>
									<table class="table table-hover my-0">
										<thead>
											<tr>
												<th class="d-none d-xl-table-cell">Vaga</th>
												<th class="d-none d-xl-table-cell">Empresa</th>
												<th class="d-none d-md-table-cell">Cidade</th>
												<th class="d-none d-md-table-cell">Ação</th>
											</tr>
										</thead>
										<tbody>
										<?php
											$matches = array(
												array(
													'vaga' => 'Pessoa especialista em Powerpoint',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo - SP'
												),
												array(
													'vaga' => 'Pessoa especialista em Powerpoint',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo - SP'
												),
												array(
													'vaga' => 'Pessoa especialista em Powerpoint',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo - SP'
												),
												array(
													'vaga' => 'Pessoa especialista em Powerpoint',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo - SP'
												),
												array(
													'vaga' => 'Pessoa especialista em Powerpoint',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo - SP'
												),
												array(
													'vaga' => 'Pessoa especialista em Powerpoint',
													'vagaLink' => '/usuario/vaga.php',
													'empresa' => 'IBM',
													'cidade' => 'São Paulo - SP'
												),
											);
											foreach($matches as $match){
											?>
											<tr>
												<td class="d-none d-md-table-cell"><?php echo $match['vaga'] ?></td>
												<td class="d-none d-md-table-cell"><?php echo $match['empresa'] ?></td>
												<td class="d-none d-md-table-cell"><?php echo $match['cidade'] ?></td>
												<td class="d-none d-md-table-cell text-center"><a href="<?php echo VIEW_URL; echo $match['vagaLink'] ?>"><i class="align-middle" data-feather="eye"></i></a></td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
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
