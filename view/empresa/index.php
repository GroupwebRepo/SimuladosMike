<?php include('../empresa/inc/head.php') ?>

<body>
	<div class="wrapper">

		<?php include('../empresa/inc/sidebar.php') ?>

		<div class="main">
			<?php include('../empresa/inc/nav-superior.php') ?>
				<main class="content">
					<div class="container-fluid p-0">

						<div class="row mb-2 mb-xl-3">
							<div class="col-auto d-none d-sm-block">
								<h2 class="h3 mb-3">Dashboard</h2>
						</div>
						<div class="row">
						<div class="col-6 col-lg-6 col-xxl-6 d-flex">
								<div class="card flex-fill">
									<div class="card-header">

										<h5 class="card-title mb-0">Novos Matches <i class="align-middle mr-2" data-feather="heart"></i>:</h5>
									</div>
									<table class="table table-hover my-0">
										<thead>
											<tr>
												<th class="d-none d-xl-table-cell">Candidato</th>
												<th class="d-none d-md-table-cell">Data do Match</th>
												<th class="d-none d-md-table-cell">Vaga</th>
												<th class="d-none d-md-table-cell">Ação</th>
											</tr>
										</thead>
										<tbody>
										<?php
											$matches = array(
												array(
													'nome' => 'André Garcia',
													'nomeLink' => '/empresa/candidato.php',
													'data' => '16/07/2021',
													'vaga' => 'Editor Excel',
													'vagaLink' => '/empresa/vaga.php'
												),
												array(
													'nome' => 'Edson Marco',
													'nomeLink' => '/empresa/candidato.php',
													'data' => '01/12/2021',
													'vaga' => 'Editor Power BI',
													'vagaLink' => '/empresa/vaga.php'
												),
												array(
													'nome' => 'Eduardo Cerato',
													'nomeLink' => '/empresa/candidato.php',
													'data' => '18/10/2021',
													'vaga' => 'Auditoria em wordpress',
													'vagaLink' => '/empresa/vaga.php'
												),
												array(
													'nome' => 'Márcia Garcia',
													'nomeLink' => '/empresa/candidato.php',
													'data' => '05/02/2021',
													'vaga' => 'Especialista em Powerpoint',
													'vagaLink' => '/empresa/vaga.php'
												)

											);
											foreach($matches as $match){
											?>
											<tr>
												<td><a href="<?php echo VIEW_URL; echo $match['nomeLink']; ?>"><?php echo $match['nome'] ?></a></td>
												<td class="d-none d-xl-table-cell"><?php echo $match['data'] ?></td>
												<td class="d-none d-md-table-cell"><a href="<?php echo VIEW_URL; echo $match['vagaLink'] ?>"><?php echo $match['vaga'] ?></a></td>
												<td class="d-none d-md-table-cell text-center"><a href="<?php echo VIEW_URL; echo $match['vagaLink']; ?>"><i class="align-middle" data-feather="eye"></i></a></td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
							<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
								<div class="card flex-fill w-100">
									<div class="card-header">
										<h5 class="card-title mb-0">Vagas procuradas:</h5>
									</div>
									<div class="card-body d-flex">
										<div class="align-self-center w-100">
											<div class="py-3">
												<div class="chart chart-xs">
													<canvas id="chartjs-dashboard-pie"></canvas>
												</div>
											</div>
											<table class="table mb-0">
												<tbody>
													<tr>
														<td>Auditoria Excel</td>
														<td class="text-right">4306</td>
													</tr>
													<tr>
														<td>Admin Google Sheets</td>
														<td class="text-right">3801</td>
													</tr>
													<tr>
														<td>Editor Powerpoint</td>
														<td class="text-right">1689</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-4 col-xxl-3 d-flex">
								<div class="card flex-fill w-100">
									<div class="card-header">

										<h5 class="card-title mb-0">Acessos Mensais:</h5>
									</div>
									<div class="card-body d-flex w-100">
										<div class="align-self-center chart chart-lg">
											<canvas id="chartjs-dashboard-bar"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</main>

				<?php include('../empresa/inc/footer.php') ?>



		</div>
	</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Pie chart
		new Chart(document.getElementById("chartjs-dashboard-pie"), {
			type: "pie",
			data: {
				labels: ["Excel", "Google Sheets", "Powerpoint"],
				datasets: [{
					data: [4306, 3801, 1689],
					backgroundColor: [
						window.theme.primary,
						window.theme.warning,
						window.theme.danger
					],
					borderWidth: 5
				}]
			},
			options: {
				responsive: !window.MSInputMethodContext,
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				cutoutPercentage: 75
			}
		});
	});
</script>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Bar chart
		new Chart(document.getElementById("chartjs-dashboard-bar"), {
			type: "bar",
			data: {
				labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				datasets: [{
					label: "This year",
					backgroundColor: window.theme.primary,
					borderColor: window.theme.primary,
					hoverBackgroundColor: window.theme.primary,
					hoverBorderColor: window.theme.primary,
					data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
					barPercentage: .75,
					categoryPercentage: .5
				}]
			},
			options: {
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				scales: {
					yAxes: [{
						gridLines: {
							display: false
						},
						stacked: false,
						ticks: {
							stepSize: 20
						}
					}],
					xAxes: [{
						stacked: false,
						gridLines: {
							color: "transparent"
						}
					}]
				}
			}
		});
	});
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?php echo VIEW_URL ?>/assets/js/app.js"></script>
<script src="<?php echo VIEW_URL ?>/assets/js/custom.js"></script>

</html>
