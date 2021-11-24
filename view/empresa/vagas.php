<?php include('../empresa/inc/head.php') ?>

<body>
	<div class="wrapper">

	<?php include('../empresa/inc/sidebar.php') ?>


		<div class="main">
		<?php include('../empresa/inc/nav-superior.php') ?>
		
			<main class="content">

				<section id="vagasEmpresa">

					<div class="container-fluid p-0">

						<h2 class="h3 mb-3">Pesquisar Vagas</h2>

						<div class="row">

							<div class="col-md-12">

								<form>

									<div class="card">

										<div class="card-body">

											<div class="row">

												<div class="col-md-12">

													<div class="row mb-3">

														<div class="col-md-6">

															<label class="form-label" for="nomeVaga">Nome da vaga</label>

															<input type="text" name="nomeVaga" class="form-control" id="nomeVaga" >
															
														</div>

														<div class="col-md-6">

															<label class="form-label" for="Empresa">Empresa</label>

															<input type="text" name="Empresa" class="form-control" id="Empresa" >
															
														</div>

													</div>

													<div class="row mb-3">

														<div class="col-md-4">

															<label class="form-label" for="cargo">Cargo</label>

															<input type="text" name="cargo" class="form-control" id="cargo">

														</div>

														<div class="col-md-4">

															<label class="form-label" for="nivelHierarquico">Nível Hierárquico</label>
															
															<select id="nivelHierarquico" class="js-example-basic-single js-states form-control" name="nivelHierarquico">
																<option selected> Nível Hierárquico</option>
																<option value="estagiario">Estagiário (a)</option>
																<option value="operacional">Operacional</option>
																<option value="auxiliar">Auxiliar</option>
																<option value="assistente">Assistente</option>
																<option value="trainee">Trainee</option>
																<option value="analista">Analista</option>
																<option value="encarregado">Encarregado (a)</option>
																<option value="supervisor">Supervisor (a)</option>
																<option value="consultor">Consultor (a)</option>
																<option value="especialista">Especialista</option>
																<option value="coordenador">Coordenador (a)</option>
																<option value="gerente">Gerente</option>
																<option value="diretor">Diretora</option>
															</select>

														</div>

														<div class="col-md-4">

														<label class="form-label" for="inputState">Estado</label>
															<select id="inputState" class="js-example-basic-single js-states form-control" name="uf">
																<option selected>Escolha...</option>
																<option value="AC">Acre</option>
																<option value="AL">Alagoas</option>
																<option value="AP">Amapá</option>
																<option value="AM">Amazonas</option>
																<option value="BA">Bahia</option>
																<option value="CE">Ceará</option>
																<option value="DF">Distrito Federal</option>
																<option value="ES">Espírito Santo</option>
																<option value="GO">Goiás</option>
																<option value="MA">Maranhão</option>
																<option value="MT">Mato Grosso</option>
																<option value="MS">Mato Grosso do Sul</option>
																<option value="MG">Minas Gerais</option>
																<option value="PA">Pará</option>
																<option value="PB">Paraíba</option>
																<option value="PR">Paraná</option>
																<option value="PE">Pernambuco</option>
																<option value="PI">Piauí</option>
																<option value="RJ">Rio de Janeiro</option>
																<option value="RN">Rio Grande do Norte</option>
																<option value="RS">Rio Grande do Sul</option>
																<option value="RO">Rondônia</option>
																<option value="RR">Roraima</option>
																<option value="SC">Santa Catarina</option>
																<option value="SP">São Paulo</option>
																<option value="SE">Sergipe</option>
																<option value="TO">Tocantins</option>
																<option value="EX">Estrangeiro</option>
															</select>

														</div>

													</div>
										
												</div>

											</div>

											<button type="submit" class="btn btn-padrao float-right">Pesquisar</button>

										</div>

									</div>

								</form>

							</div>

						</div>

						<h1 class="h3 mb-3">Vagas em Aberto</h1>

						<div class="row">
							<div class="col-12 col-xl-12">
								<div class="card">
									<div class="card-header d-flex justify-content-between align-items-start">
										<div class="title">
											<h5 class="card-title">Estas vagas estão em aberto.</h5>
											<h6 class="card-subtitle text-muted"><strong>Os usuários podem manifestar interesse</strong></h6>
										</div>
									</div>
									<div class="vagas-externo">
										<div class="row" id="vagas-cards">
											<div class="col-md-12 d-flex flex-wrap">
												<?php 
												$vagas = array(0,1,2,3);
												foreach($vagas as $vaga){ ?>
												<div class="col-md-6 ">
													<div class="vaga empresa">
														<div class="d-flex flex-column  ml-4">
														<div class="d-flex mb-3 titulo"><a href="<?php echo VIEW_URL ?>/empresa/vaga.php"> <h3>Pessoa especialista em powerpoint</h3></a> <a class="ml-3" href="<?php echo VIEW_URL ?>/empresa/editar-vaga.php"> <i class="mr-2 verde" data-feather="edit"></i><a></div>
																<div class="mb-3">
																<p class="mb-1"><i class="align-middle mr-2" data-feather="user"></i>72 candidatos visualizaram esta vaga</p>
																<p><i class="align-middle mr-2" data-feather="heart"></i>60 candidatos deram match nesta vaga</p>
															</div>
															<small>Data de publicação: 18/10/2021</small>
														</div>
													</div>
												</div>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
								<div class="float-left mb-4"><a href="criar-vaga.php" class="btn btn-padrao">Criar nova vaga</a></div>
							</div>
						</div>
					</div>

				</section>
			</main>

			<?php include('../empresa/inc/footer.php') ?>

		</div>
	</div>
	
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?php echo VIEW_URL ?>/assets/js/app.js"></script>
<script src="<?php echo VIEW_URL ?>/assets/js/custom.js"></script>
<script>
(function($){
	apiRequest( 'empresa/buscarVagas',
	 {'query':{'vagas.estado_id':<?php echo $_SESSION['estado']?>}}
	).done(function(response){
		if(response.status == true) {
			var vagas = '';
			$.each(response.data, function(key, item){
				 vagas += '<div class="col-md-6">'+
						'<div class="vaga">'+
							'<div class="img-externo">'+
								'<img class="vaga-img" src="<?php echo EMPRESAS_PROFILE_PATH ?>'+item.empresa_imagem+'" alt="vaga">'+
							'</div>'+
							'<div class="vaga-info">'+
								'<a href="vaga.php?id='+item.vaga_id+'" ><h2 class="h3 mb-3">'+item.vaga+'</h2></a>'+
								'<h5>'+item.nome_empresa+'</h5>'+
								'<p> <i class="align-middle mr-2 " data-feather="map-pin"></i>'+item.estado+' <i class="align-middle mr-2 " data-feather="clock"></i><small>'+item.vaga_criado+'</small></p>'+
							'</div>'+
						'</div>'+
					'</div>'
			})
			$('#vagas-cards').html(vagas);
		}else{
			$( "span.response_data" ).text( response.data ).show().fadeOut( 1000 );
		}
	});
 })(jQuery);
</script>

</html>
