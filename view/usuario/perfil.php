<?php include('inc/head.php') ?>

<body>
	<div class="wrapper">

		<?php include('inc/sidebar.php') ?>

		<div class="main">
			<?php include('inc/nav-superior.php') ?>

				<main class="content">
					<div class="container-fluid p-0">
						<span class="btn btn-upload exportar float-right"><i class="fas fa-upload"></i>&nbsp; Gerar currículo</span>
						<h1 class="h3 mb-3">Configurações</h1>
						<div class="row">
							<div class="col-md-3 col-xl-2">

								<div class="card">


									<div class="list-group list-group-flush" role="tablist">
										<a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
											Conta
										</a>
										<a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
											Senha
										</a>
										<a class="list-group-item list-group-item-action" data-toggle="list" href="#curriculos" role="tab">
											Currículos
										</a>
									</div>
								</div>
							</div>

							<div class="col-md-9 col-xl-10">
								<div class="tab-content">
									<div class="tab-pane fade show active" id="account" role="tabpanel">
										<form>
											<div class="card">
												<div class="card-header">
													<h5 class=" mb-0 h3 verde"><b>Suas informações de usuário</b></h5>
												</div>
												<div class="card-body">
													<div class="row">
														<div class="col-md-8 ">
															<div class="mb-3 ">
																<label class="form-label" for="inputUsername">Nome de usuário</label>
																<input type="text" name="usuario" class="form-control" id="inputUsername" >
															</div>
															<div class="mb-3 ">
																<label class="form-label" for="inputUsername">Email</label>
																<input type="email" name="usuario" class="form-control" id="inputEmail" >
															</div>
															<div class="mb-3 ">
																<label class="form-label" for="bio">Biografia</label>
																<input type="email" name="bio" class="form-control" id="bio" >
															</div>
															<div class="row">
														<div class="mb-3 col-md-12">
															<label class="form-label" for="inputFirstName">Nome Completo</label>
															<input type="text" name="nome" class="form-control" id="inputFirstName">
														</div>
														<div class="mb-3 col-md-6">
															<label class="form-label" for="inputEmail4">Telefone</label>
															<input type="text" name="telefone" class="form-control" id="telefone">
														</div>
														<div class="mb-3 col-md-6">
															<label class="form-label" for="inputEmail4">Linkedin</label>
															<input type="text" name="linkedin" class="form-control" id="linkedin">
														</div>
													</div>
														</div>
														<div class="col-md-4">
															<div class="text-center">
																<img alt="Charles Hall" src="<?php echo VIEW_URL ?>/assets/img/avatars/avatar.jpg" class="rounded-circle img-responsive mt-2" width="128" height="128" />
																<div class="mt-2">
																	<span class="btn btn-upload"><i class="fas fa-upload"></i> Upload</span>
																</div>
																<small>Resolução recomendada: imagens de 128px por 128px, em formato .jpg</small>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="card">
												<div class="card-header">

													<h5 class=" mb-0 h3 verde"><b>Seu Endereço</b></h5>
												</div>
												<div class="card-body">
													<div class="mb-3 col-md-2">
															<label class="form-label" for="inputZip">CEP</label>
															<input type="text" name="cep" class="form-control" id="inputZip">
													</div>
													<div class="mb-3">
														<label class="form-label" for="inputAddress">Endereço</label>
														<input type="text" name="end_principal" class="form-control" id="inputAddress" >
													</div>
													<div class="row">
														<div class="mb-3 col-md-8">
															<label class="form-label" for="inputCity">Cidade</label>
															<input type="text" class="form-control" id="inputCity" name="Cidade">
														</div>
														<div class="mb-3 col-md-4">
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
											<button type="submit" class="btn btn-padrao float-right">Salvar modificações</button>
										</form>
									</div>
									<div class="tab-pane fade" id="password" role="tabpanel">
										<form>
											<div class="card">
												<div class="card-body">
													<h5 class="h3 verde mb-3"><b>Sua Senha</b></h5>
													<div class="mb-3">
														<label class="form-label" for="inputPasswordNew">Senha nova</label>
														<input type="password" name="nova_senha" class="form-control" id="inputPasswordNew" >
													</div>
													<div class="mb-3">
														<label class="form-label" for="inputPasswordNew2">Verificar nova senha</label>
														<input type="password" name="verificar_senha" class="form-control" id="inputPasswordNew2"  >
													</div>
												</div>
											</div>
											<button type="submit" class="btn btn-padrao float-right">Salvar modificações</button>
										</form>
									</div>
									<div class="tab-pane fade" id="curriculos" role="tabpanel">
										<form>
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="plus-icon text-right">
															<i class="fa fa-plus-circle" aria-hidden="true"></i>
														</div>
														<h5 class="mb-3 verde h3"><b>Experiência Profissional</b></h5>
														<div class="mb-3  col-md-4">
															<label class="form-label" for="empresa">Nome da Empresa</label>
															<input type="text" name="empresa" class="form-control" id="empresa" >
														</div>
														<div class="mb-3  col-md-4">
															<label class="form-label" for="cargo">Cargo ocupado</label>
															<input type="text" name="cargo" class="form-control" id="cargo">
														</div>
														<div class="mb-3  col-md-4">
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
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-body">
													<h5 class="mb-3 verde h3"><b>Formação Acadêmica<b></h5>
													<div class="row">
														<div class="mb-3  col-md-6">
															<label class="form-label" for="instituicao">Nome da Instituição</label>
															<input type="text" name="instituicao" class="form-control" id="instituicao" >
														</div>
														<div class="mb-3  col-md-6">
															<label class="form-label" for="nivelGraduacao">Nível de graduação</label>
															<select id="nivelGraduacao" class="js-example-basic-single js-states form-control" name="nivelGraduacao">
																<option selected> Nível de graduação...</option>
																<option value="fundamental">Ensino Fundamental (1º grau)</option>
																<option value="profissionalizante">Curso Profissionalizante</option>
																<option value="medio">Ensino Médio (2º grau)</option>
																<option value="tecnico">Curso Técnico</option>
																<option value="superior">Ensino Superior</option>
																<option value="mba">Pós-graduação - Especialização/MBA</option>
																<option value="mestrado">Pós-graduação - Mestrado</option>
																<option value="doutorado">Pós-graduação - Doutorado</option>
															</select>
														</div>
														<div class="mb-3  col-md-6">
															<label class="form-label" for="curso">Curso</label>
															<input type="text" name="curso" class="form-control" id="curso">
														</div>
														<div class="mb-3  col-md-6">
															<label class="form-label" for="situacao">Situação do curso</label>
															<select id="situacao" class="form-control" name="situacao">
																<option selected> Situação...</option>
																<option value="concluido">Concluído</option>
																<option value="cursando">Cursando</option>
																<option value="trancado">Trancado</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="card">
												<div class="card-body">
													<h5 class="mb-3 verde h3"><b>Áreas de interesse</b></h5>
													<div class="row">
														<div class="mb-3  col-md-12">
															<select  name="interesses" class="form-control js-example-basic-multiple js-states form-label" id="interesses" multiple="multiple">
																<option selected> Áreas de interesse...</option>
																<option value="1">Área 1</option>
																<option value="2">Área 2</option>
																<option value="3">Área 3</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<button type="submit" class="btn btn-padrao float-right">Salvar modificações</button>
										</form>
									</div>
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
