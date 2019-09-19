<?php

$class = "\\sts\\Views\\ext\\data";
$data = new $class();

$array = $data->return();

if(isset($array["user"])){

	$user = $array["user"];
	$email = $array["email"];

}


?>
<header class="navbar navbar-expand-lg navbar-dark bg-dark">
	<nav class="container">

	<a href="#" class="navbar-brand text-light">
		EEF-Home
	</a>

	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu"aria-expand="false" aria-label="Menu">
		<span class="navbar-toggler-icon text-light"></span>
	</button>

	<div id="menu" class="collapse navbar-collapse">

			<ul class="navbar-nav ml-auto text-light">

					<li class="nav-item">
						<a href="#" class="nav-link"><i class="fa fa-fw fa-store"></i>Serviços</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link"><i class="fa fa-fw fa-star"></i>Avaliações</a>
					</li>

					<!-- PHP log -->
					<?php if(!empty($array["user"])){ ?>

					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="user" role="button" data-toggle="dropdown">
							<i class="fa fa-fw fa-user"></i><?= $user ?>
						</a>

						<div class="dropdown-menu bg-dark" aria-labelledby="navbarUser">
							<div class="mb-2">
								<img src="<?= URL . "assents/users/vinicin.fagundes/" ?>perfil.jpg" height="50" width="50" class="rounded-circle">
								<span class="d-inline-block"><a href="#" class="nav-link text-light"><?= $user ?></a></span>
								<span class="text-muted text-light"><?= $email ?></span>
							</div>

							<div class="dropdown-divider"></div>

					        <a class="dropdown-item text-light" href="#"><i class="fa fa-fw fa-search"></i> Buscar</a>
					        <a class="dropdown-item text-light" href="#"><i class="fa fa-fw fa-wrench"></i> Configurações</a>
					        
					        <div class="dropdown-divider"></div>
					        
					        <a class="dropdown-item text-light" href="<?= URL ?>logout"><i class="fa fa-fw fa-sign-out-alt"></i> Logout</a>
					    </div>

					</li>

				<?php } else { ?>

					<li class="nav-item">
						<a href="<?= URL . "register"?>" class="nav-link"><i class="fa fa-fw fa-registered"></i>Inscreve-se</a>
					</li>
					<li class="nav-item">
						<a href="<?= URL . "authenticate" ?>" class="nav-link"><i class="fa fa-fw fa-key"></i>Entrar</a>
					</li>

				<?php } ?>

			</ul>
		</div>
	</nav>
</header>