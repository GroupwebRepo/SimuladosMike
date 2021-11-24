<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
			    <img class="logo" src="<?php echo VIEW_URL ?>/assets/img/geral/ninja-do-excel.png">
			</a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Páginas
					</li>

					<?php $link_uri = basename($_SERVER['REQUEST_URI']); ?>

					<li class="sidebar-item <?php if( $link_uri == "index.php" || $link_uri == "admin"){ echo "active";} ?>">
						<a class="sidebar-link" href="index.php">
              				<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            			</a>
					</li>
					<li class="sidebar-item <?php if( $link_uri == "vagas.php"){ echo "active";} ?>">
						<a class="sidebar-link" href="vagas.php">
              				<i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Vagas</span>
            			</a>
					</li>
					<li class="sidebar-item <?php if( $link_uri == "vagas.php"){ echo "active";} ?>">
						<a class="sidebar-link" href="empresas.php">
              				<i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">empresas</span>
            			</a>
					</li>
					<li class="sidebar-item <?php if( $link_uri == "usuarios.php"){ echo "active";} ?>">
						<a class="sidebar-link" href="usuarios.php">
              				<i class="align-middle" data-feather="user"></i> <span class="align-middle">usuarios</span>
            			</a>
					</li>
			</div>
		</nav>
