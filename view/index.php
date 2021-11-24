<?php
include('inc/head.php');
session_destroy();
?>
<body>
	<div class="wrapper login">
		<main class="content">
			<div class="container-fluid p-0">
				<div class="row">
					<div class="col-md-12">
						<div class="card wrapper-login-form">
							<div class="card-header">
								<img src="assets/img/geral/ninja-do-excel.png">
							</div>
							<div class="card-body">

								<!-- FORM USER  -->

									<form id="formUser" method='post' class="formulario row align-items-center">
									<p class="mb-5 text-center verde">Login como usuário</p>
										<div class="col-12 mb-2">
											<label class="sr-only" for="user">Usuário</label>
											<div class="input-group mb-2 mr-sm-2">
												<div class="input-group-text">@</div>
												<input type="text" class="form-control" id="user" placeholder="Usuário" name="user">
											</div>
										</div>
										<div class="col-12 mb-3">
											<label class="sr-only" for="pass">Senha</label>
											<input type="password" class="form-control mb-2 mr-sm-2" id="pass" placeholder="Senha" name="pass">
											<span class="response_data"></span>
										</div>
										<div class="col-12 mb-5 text-right">
											<button id="userSubmit" type="submit" class="btn btn-primary mb-2">Entrar</button>
										</div>
									</form>

								<!-- END FORM USER -->

								<!-- FORM EMPRESA  -->

								
								<form id="formEmpresa" class="formulario row align-items-center" style="display:none;">
								<p class="mb-5 text-center verde">Login como Empresa</p>
									<div class="col-12 mb-2">
										<label class="sr-only" for="inlineFormInputGroupUsername2">Usuário</label>
										<div class="input-group mb-2 mr-sm-2">
											<div class="input-group-text">@</div>
											<input type="email" class="form-control"  placeholder="Email" name="user">
										</div>
									</div>
									<div class="col-12 mb-3">
										<label class="sr-only">Senha</label>
										<input type="password" class="form-control mb-2 mr-sm-2"  placeholder="Senha" name="pass">
										<span class="response_data"></span>
									</div>
									<div class="col-12 mb-5 text-right">
										<button type="submit" class="btn btn-primary mb-2">Entrar</button>
									</div>
								</form>

								<!-- END FORM EMPRESA -->

								<!--  FORM REC SENHA USER  -->

								<form id="formRecSenhaUser" class="formulario row align-items-center" style="display:none;">
								<p class="mb-5 text-center verde">Recuperar Senha</p>
								<div class="input-group mb-2 mr-sm-2">
									<input type="user" class="form-control"  placeholder="Informe seu e-mail" name="user">
								</div>
								<span class="response_data"></span>
								<div class="col-12 mb-5 text-right">
										<button type="submit" class="btn btn-primary mb-2">Enviar</button>
									</div>
								</form>

								<!-- END FORM REC SENHA USER -->

								<!-- FORM REC SENHA EMPRESA -->

								<form id="formRecSenhaEmpresa" class="formulario row align-items-center" style="display:none;">
								<p class="mb-5 text-center verde">Recuperar Senha</p>
								<div class="input-group mb-2 mr-sm-2">
									<input type="email" class="form-control"  placeholder="Informe seu e-mail" name="email">
								</div>
								<span class="response_data"></span>
								<div class="col-12 mb-5 text-right">
										<button type="submit" class="btn btn-primary mb-2">Enviar</button>
									</div>
								</form>

								<!-- END FORM REC SENHA EMPRESA -->


								<!-- FORM CRIAR CONTA USER -->

								<form id="formCriarContaUser" class="formulario row align-items-center" style="display:none;">
								<p class="mb-5 text-center verde">Crie sua conta de usuário</p>
								<div class="input-group mb-2 mr-sm-2">
									<input type="text" class="form-control" placeholder="Escolha um nome de usuário" name="user" required>
								</div>
								<div class="input-group mb-2 mr-sm-2">
									<input type="text" class="form-control" placeholder="Linkedin" name="linkedin" required>
								</div>
								<div class="input-group mb-2 mr-sm-2">
									<input type="text" class="form-control" placeholder="Celular" name="celular" required>
								</div>
								<div class="input-group mb-2 mr-sm-2">
									<input type="email" class="form-control"placeholder="Informe seu e-mail" name="email" required>
								</div>
								<div class="input-group mb-2 mr-sm-2">
									<input type="password" class="form-control " placeholder="Escolha uma senha" name="pass" required>
								</div>
								<span class="response_data"></span>
								<div class="col-12 mb-5 text-right">
										<button type="submit" class="btn btn-primary mb-2">Cadastrar</button>
									</div>
								</form>

								<!-- END FORM CRIAR CONTA USER -->

								<!-- FORM CRIAR CONTA EMPRESA -->

								<form id="formCriarContaEmpresa" class="formulario row align-items-center" style="display:none;">
								<p class="mb-5 text-center verde">Crie sua conta de empresa</p>
								<div class="input-group mb-2 mr-sm-2">
									<input type="text" class="form-control" placeholder="Escolha um usuário" name="user" required>
								</div>
								<div class="input-group mb-2 mr-sm-2">
									<input type="email" class="form-control"placeholder="Informe seu e-mail" name="email" required>
								</div>
								<div class="col-12 mb-3 mb-2 mr-sm-2">
									<input type="password" class="form-control " placeholder="Escolha uma senha" name="pass" required>
								</div>
								<div class="col-12 mb-3 mb-2 mr-sm-2">
									<select id="inputState" class="js-example-basic-single js-states form-control" name="estado">
										<option selected>Informe seu estado...</option>
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
								<div class="col-12 mb-3 mb-2 mr-sm-2">
									<input type="text" class="form-control " placeholder="Informe sua cidade" name="cidade" required>
								</div>
								<span class="response_data"></span>
								<div class="col-12 mb-5 text-right">
										<button type="submit" class="btn btn-primary mb-2">Cadastrar</button>
									</div>
								</form>

								<!--  END FORM CRIAR CONTA EMPRESA -->

								<div id="botoeira" class="row">

									<a style="display: none;" selecao="formRecSenhaEmpresa" class="acessorio col-md-4 card-subtitle text-muted mb-2 text-center" href="javascript:void(0)" selecaoTrocada="formUser" id="formEmpresa">
										<h6>Recuperar senha</h6>
									</a>
									<a selecao="formRecSenhaUser" class="acessorio col-md-4 card-subtitle text-muted mb-2 text-center" href="javascript:void(0)" id="formUser" selecaoTrocada="formEmpresa">
										<h6>Recuperar senha</h6>
									</a>
									<a selecao="formEmpresa" selecaoTrocada="formUser" id="formEmpresa" class="tipoUsuario col-md-4 card-subtitle text-muted mb-2 text-center" href="javascript:void(0)">
										<h6>Sou Empresa</h6>
									</a>
									<a style="display: none;" selecao="formUser" id="formUser" selecaoTrocada="formEmpresa" class="tipoUsuario col-md-4 card-subtitle text-muted mb-2 text-center" href="javascript:void(0)">
										<h6>Sou Usuário</h6>
									</a>
									<a style="display: none;" selecao="formCriarContaEmpresa" class="acessorio col-md-4 card-subtitle text-muted mb-2 text-center" href="javascript:void(0)" selecaoTrocada="formUser" id="formEmpresa">
										<h6>Criar uma conta</h6>
									</a>
									<a selecao="formCriarContaUser" class="acessorio col-md-4 card-subtitle text-muted mb-2 text-center" href="javascript:void(0)" id="formUser" selecaoTrocada="formEmpresa">
										<h6>Criar uma conta</h6>
									</a>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<script src="assets/vendor/jquery.js"></script>
	<script>
		jQuery('#botoeira a').on('click', function(){
			jQuery('.formulario').hide();
			jQuery('.formulario#'+jQuery(this).attr('selecao')).fadeIn();
		});
	</script>
	<script>
		jQuery('#botoeira a.tipoUsuario').on('click', function(){
			jQuery('a.tipoUsuario').hide();
			jQuery('a.acessorio').hide();
			jQuery('.tipoUsuario#'+jQuery(this).attr('selecaoTrocada')).fadeIn();
			jQuery('.acessorio#'+jQuery(this).attr('selecao')).fadeIn();
		});
	</script>
	<script>
	$( "#formUser" ).submit(function(e) {
		e.preventDefault();
		apiRequest( 'usuario/login',
     {'user': `${$("#formUser input[name=user]").val()}`, 'pass': `${$("#formUser input[name=pass]").val()}`}
		).done(
     function(response){

			if(response.status == true) {
				return window.location.replace("usuario/index.php");
 			} else{
				$( "span.response_data" ).text( `${response.data}` ).show().fadeOut( 10000 );
			}

	 });
	})

	</script>
	<script>
	$( "#formEmpresa" ).submit(function(e) {
		e.preventDefault();
		apiRequest( 'empresa/login',
     {'user': `${$("#formEmpresa input[name=user]").val()}`, 'pass': `${$("#formEmpresa input[name=pass]").val()}`}
		).done(
     function(response){
			if(response.status == true) {
				return window.location.replace("empresa/index.php");
 			} else{
				$( "span.response_data" ).text( `${response.data}` ).show().fadeOut( 10000 );
			}
	 });
	})

	</script>
	<script>
		$( "#formRecSenhaUser" ).submit(function(e) {
			e.preventDefault();
			apiRequest( 'usuario/recuperarSenha',
		{'user': `${$("#formRecSenhaUser input[name=user]").val()}`}
			).done(
		function(response){

				if(response.status == true) {
					alert('ok');
				} else{
					$( "span.response_data" ).text( `${response.data}` ).show().fadeOut( 10000 );
				}
		});
		})
	</script>
	<script>
		$( "#formRecSenhaEmpresa" ).submit(function(e) {
			e.preventDefault();
			apiRequest( 'usuario/recuperarSenha',
		{'user': `${$("#formRecSenhaEmpresa input[name=user]").val()}`}
			).done(
		function(response){

				if(response.status == true) {
					alert('ok');
				} else{
					$( "span.response_data" ).text( `${response.data}` ).show().fadeOut( 10000 );
				}
		});
		})
	</script>
	<script>
		$( "#formCriarContaUser" ).submit(function(e) {
			e.preventDefault();
			apiRequest( 'usuario/criarCadastro',
		{'user': `${$("#formCriarContaUser input[name=user]").val()}`, 'pass': `${$("formCriarContaUser input[name=pass]")}`, 'email': `${$("formCriarContaUser input[name=email]")}`, 'celular': `${$("formCriarContaUser input[name=celular]")}`, 'linkedin': `${$("formCriarContaUser input[name=linkedin]")}`}
			).done(
		function(response){

				if(response.status == true) {
					alert('ok');
				} else{
					$( "span.response_data" ).text( `${response.data}` ).show().fadeOut( 1000 );
				}
		});
		})
	</script>
	<script>
		$( "#formCriarContaEmpresa" ).submit(function(e) {
			e.preventDefault();
			apiRequest( 'empresa/criarCadastro',
		{'user': `${$("#formCriarContaEmpresa input[name=user]").val()}`, 'pass': `${$("formCriarContaEmpresa input[name=pass]")}`, 'email': `${$("formCriarContaEmpresa input[name=email]")}`, 'estado': `${$("formCriarContaEmpresa input[name=estado]")}`, 'cidade': `${$("formCriarContaEmpresa input[name=cidade]")}`}
			).done(
		function(response){

				if(response.status == true) {
					alert('ok');
				} else{
					$( "span.response_data" ).text( `${response.data}` ).show().fadeOut( 1000 );
				}
				console.log(response)
		});
		})
	</script>

</body>
