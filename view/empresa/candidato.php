<?php include('../empresa/inc/head.php') ?>

<body>
	<div class="wrapper">

	<?php include('../empresa/inc/sidebar.php') ?>


		<div class="main">
		<?php include('../empresa/inc/nav-superior.php') ?>
		
			<main class="content">
            <section id="vaga-nova">
                <h1 class="h3 mb-3">Candidato/a</h1>
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-5 border-bottom border-light">
                                    <div class="col-md-12 d-flex">
                                        <div class="col-md-2 ml-2">
                                        <img alt="Charles Hall" src="<?php echo VIEW_URL ?>/assets/img/avatars/avatar.jpg" class="rounded-circle img-responsive mt-2" width="128" height="128" />
                                        </div>
                                        <div class="col-md-10">
                                            <h2 class="mb-3">Pessoa Garcia</h2>
                                            <div class="mb-3 ">
                                                <label><i class="align-middle mr-2" data-feather="user-check"></i>Bio:</label>
                                                <p>Tenho 2 anos de experiência trabalhando com pacote office e derivados.</p>
                                            </div>
                                            <div class="mb-3">
                                                <Label><i class="align-middle mr-2" data-feather="map-pin"></i>Localidade:</Label>
                                                <p>São Paulo - SP</p>
                                            </div>
                                            <div class="d-flex">
                                                <div class="col-md-6 mb-3">
                                                    <label><i class="align-middle mr-2" data-feather="book-open"></i>Formação Acadêmica: </label>
                                                    <p>Administração de empresas <br>
                                                    Nível de graduação:  Bacharelado <br>
                                                    Nome da instituição: UNIP
                                                    </p>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label><i class="align-middle mr-2" data-feather="briefcase"></i> Experiência profissional:</label>
                                                    <p>Assistente de administração<br>
                                                    Nível hierárquico:  Assistente <br>
                                                    Nome da Empresa: Ferraz automobilistica LTDA
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label><i class="align-middle mr-2" data-feather="star"></i>Áreas de interesse:</label>
                                                <p>Excel, Powerpoint, Googlesheets</p>
                                            </div>
                                            <div class="mb-3">
                                                <a id="btnInfo" class="btn btn-padrao" href="javascript:void(0)"> Entrar em contato</a>
                                            </div>
                                            <div class="row infos" style="display:none">
                                                <div class="col-md-4">
                                                    <label>Email:</label>
                                                    <a><p><i class="align-middle mr-2" data-feather="mail"></i>pessoagarcia@gmail.com</p></a>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Telefone:</label>
                                                    <a><p><i class="align-middle mr-2" data-feather="phone"></i>(11) 99999-9999</p></a>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Linkedin:</label>
                                                    <a><p><i class="align-middle mr-2" data-feather="linkedin"></i>linkedin.com/pessoaGarcia</p></a>
                                                </div>
                                            </div>
                                        </div>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?php echo VIEW_URL ?>/assets/js/app.js"></script>
<script src="<?php echo VIEW_URL ?>/assets/js/custom.js"></script>
<script>
    jQuery('#btnInfo').on('click', function(){
        jQuery('.infos').fadeIn();
    });
</script>

</html>