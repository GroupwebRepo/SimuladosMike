<nav id="sidebar" class="sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="<?php echo VIEW_URL ?>/index.php">
	    <img class="logo" src="<?php echo VIEW_URL ?>/assets/img/geral/ninja-do-excel.png">
		</a>

		<ul class="sidebar-nav">

		<?php $link_uri = basename($_SERVER['REQUEST_URI']); ?>

			<li class="sidebar-header">
				Vagas e matches
			</li>

			<li class="sidebar-item <?php if( $link_uri == "vagas.php"|| $link_uri == "vaga.php" ){ echo "active";} ?>">
				<a class="sidebar-link" href="<?php echo VIEW_URL ?>/usuario/vagas.php">
    				<i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Todas as Vagas</span>
  			</a>
			</li>

			<li class="sidebar-item <?php if( $link_uri == "matches.php"){ echo "active";} ?>">
				<a class="sidebar-link" href="<?php echo VIEW_URL ?>/usuario/matches.php">
							<i class="align-middle" data-feather="heart"></i> <span class="align-middle">Meus matches</span>
					</a>
			</li>

			<li class="sidebar-header">
				Empresas e Parceiros
			</li>

			<li class="sidebar-item <?php if( $link_uri == "perfil.php"){ echo "active";} ?>">
				<a class="sidebar-link" href="<?php echo VIEW_URL ?>/usuario/perfil.php" >
  				<i class="align-middle" data-feather="user"></i> <span class="align-middle">Todas as empresas</span>
				</a>
			</li>

			<li class="sidebar-header">
				Conta
			</li>

			<li class="sidebar-item <?php if( $link_uri == "perfil.php"){ echo "active";} ?>">
				<a class="sidebar-link" href="<?php echo VIEW_URL ?>/usuario/perfil.php" >
  				<i class="align-middle" data-feather="user"></i> <span class="align-middle">Perfil</span>
				</a>
			</li>
		</ul>
	</div>
</nav>
