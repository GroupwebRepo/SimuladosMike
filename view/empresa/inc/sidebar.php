<nav id="sidebar" class="sidebar">
		<div class="sidebar-content js-simplebar">
			<a class="sidebar-brand" href="<?php echo VIEW_URL ?>/index.php">
	    	<img class="logo" src="<?php echo VIEW_URL ?>/assets/img/geral/ninja-do-excel.png">
		</a>

		<ul class="sidebar-nav">
			<li class="sidebar-header">
				Páginas
			</li>

			<?php $link_uri = basename($_SERVER['REQUEST_URI']); ?>

			<li class="sidebar-item <?php if( $link_uri == "index.php" || $link_uri == "empresa"){ echo "active";} ?>">
				<a class="sidebar-link" href="<?php echo VIEW_URL ?>/empresa/index.php">
  				<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
  			</a>
			</li>

			<li class="sidebar-item <?php if( $link_uri == "vagas.php" || $link_uri == 'criar-vaga.php' || $link_uri == 'vaga.php' || $link_uri == 'editar-vaga.php'){ echo "active";} ?>">
				<a class="sidebar-link" href="<?php echo VIEW_URL ?>/empresa/vagas.php">
  				<i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Minhas Vagas</span>
  			</a>
			</li>


			<li class="sidebar-header">
				Conta
			</li>

			<li class="sidebar-item <?php if( $link_uri == "perfil.php"){ echo "active";} ?>">
				<a class="sidebar-link" href="<?php echo VIEW_URL ?>/empresa/perfil.php" >
  				<i class="align-middle" data-feather="user"></i> <span class="align-middle">Perfil</span>
				</a>
			</li>
	</div>
</nav>
