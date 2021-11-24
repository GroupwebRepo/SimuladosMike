<?php include('../usuario/inc/head.php') ?>

<body>
<div class="wrapper">

	<?php include('../usuario/inc/sidebar.php') ?>


    <div class="main">
		<?php include('../usuario/inc/nav-superior.php') ?>

        <main class="content">
            <section id="vaga-nova">
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12 d-flex">
                                    <div class="col-md-1">
                                        <img class="mr-3" src="../assets/img/logo-cna.svg" >
                                    </div>
                                    <div class="col-md-11 ml-4">
                                        <h2 class="mb-1 h1">PESSOA ESPECIALISTA EM POWERPOINT</h2>
                                        <div class="mb-3">
                                            <p><span class="">CNA</span> &nbsp; <span class="circle"> &#9702;</span> &nbsp;<span><i class="align-middle mr-2 verde" data-feather="map-pin"></i>São Paulo - SP</span> &nbsp;<span class="circle"> &#9702;</span> &nbsp; <span>Há 10 horas</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex my-5">
                                    <a href="<?php echo VIEW_URL ?>/usuario/editar-vaga.php"><button class="btn btn-padrao"><span class="h4 text-white px-4">Match ♥</span></button></a>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="col-md-3">
                                        <i class="align-middle mr-2 verde" data-feather="award"></i><label>Cargo:</label>
                                        <p class="h2 mt-1 verde" id="cargo">Cargo</p>
                                    </div>
                                    <div class="col-md-3">
                                        <label><i class="align-middle mr-2 verde" data-feather="chevrons-up"></i>Nível Hierárquico:</label>
                                        <p class="h2 mt-1 verde">Especialista</p>
                                    </div>
                                    <div class="col-md-3">
                                        <label><i class="align-middle mr-2 verde" data-feather="clock"></i>Tempo de Experiência </label>
                                        <p class="h2 mt-1 verde">2 anos</p>
                                    </div>
                                </div>
                                <div class="py-3 border-top">
                                    <label class="my-3"><b class="verde">Descrição da vaga:</b></label>
                                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique turpis urna, id sagittis eros euismod id. Aliquam tristique tortor enim, sit amet dignissim sapien tempor eu. Vivamus condimentum ut turpis at vestibulum. Donec in justo a metus consectetur vehicula. Quisque tempor, ex vitae eleifend consequat, ipsum ante maximus metus, ut tempus turpis sem nec diam. Curabitur vel lobortis nisl. Nullam blandit posuere lectus nec varius. Suspendisse nisl nibh, cursus eu gravida et, laoreet in orci. Nulla sapien mi, dictum at orci ut, feugiat dapibus felis. Fusce commodo maximus ligula vulputate molestie. Nulla sollicitudin turpis vel ante sagittis, in vulputate nisl porta. Proin maximus orci felis, eget tempor enim lacinia sit amet. Nulla imperdiet vulputate purus. Nunc iaculis justo ut erat fringilla euismod.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique turpis urna, id sagittis eros euismod id. Aliquam tristique tortor enim, sit amet dignissim sapien tempor eu. Vivamus condimentum ut turpis at vestibulum. Donec in justo a metus consectetur vehicula. Quisque tempor, ex vitae eleifend consequat, ipsum ante maximus metus, ut tempus turpis sem nec diam. Curabitur vel lobortis nisl. Nullam blandit posuere lectus nec varius. Suspendisse nisl nibh, cursus eu gravida et, laoreet in orci. Nulla sapien mi, dictum at orci ut, feugiat dapibus felis. Fusce commodo maximus ligula vulputate molestie. Nulla sollicitudin turpis vel ante sagittis, in vulputate nisl porta. Proin maximus orci felis, eget tempor enim lacinia sit amet. Nulla imperdiet vulputate purus. Nunc iaculis justo ut erat fringilla euismod.
                                    </p>
                                    <label class="mb-3"><b class="verde">Responsabilidades:</b></label>
                                    <p class="pb-3">Nulla sapien mi, dictum at orci ut, feugiat dapibus felis. Fusce commodo maximus ligula vulputate molestie. Nulla sollicitudin turpis vel ante sagittis, in vulputate nisl porta. Proin maximus orci felis, eget tempor enim lacinia sit amet. Nulla imperdiet vulputate purus. Nunc iaculis justo ut erat fringilla euismod.
                                    </p>
                                    <a class="btn btn-padrao verde"><span class="h4 text-white px-3">Saiba mais sobre o CNA</span></a>
                                </div>
                            </div>

                                <div class="mt-3">
                                  <p class="p-3 border verde">Faixa salarial indisponível</p>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

			<?php include('../usuario/inc/footer.php') ?>

    </div>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="<?php echo VIEW_URL ?>/assets/js/app.js"></script>
<script src="<?php echo VIEW_URL ?>/assets/js/custom.js"></script>
<script>
(function($){
	apiRequest( 'usuario/buscarVaga',
	 {'id':<?php echo $_GET['id']?>}
	).done(function(response){
		if(response.status == true) {
			$('#cargo').text(response.data.vaga_cargo);
		}else{
			$( "span.response_data" ).text( response.data ).show().fadeOut( 1000 );
		}
	});
 })(jQuery);
</script>
</html>
