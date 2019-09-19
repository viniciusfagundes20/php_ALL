<header class="header-main">
    <nav class="navbar navbar-expand-md navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index"><i class="fa fa-fw fa-rocket"></i>Iniciar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item menu">
                        <a class="nav-link" href="./index"><i class="fa fa-fw fa-home"></i>Home</a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="./sobre_empresa"><i class="fa fa-fw fa-fire"></i>Promoções</a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="https://goo.gl/maps/4ckneDmAoZZqvnou7" target="__blank"><i class="fa fa-fw fa-compass"></i>Localidade</a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="./contato"><i class="fa fa-fw fa-phone"></i>Contato</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if(!isset($_SESSION['id'])){ ?>
                    <li class="nav-item menu">
                        <a class="nav-link" href="./autentication"><i class="fa fa-fw fa-user"></i>Entrar</a>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item menu">
                        
                        <div class="dropdown">
                          <a class="btn btn-link dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-user"></i><?= $_SESSION['user']; ?>
                          </a>

                          <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">

                            <a class="dropdown-item" href="#">Perfil</a>

                            <div class="dropdown-divider"></div>

                            <?php if($_SESSION['admin'] == 1){ ?>
                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-cubes"></i>Configurações</a>
                            <?php } ?>
                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-star"></i>Avaliar</a>
                            <a class="dropdown-item" href="./MarcarHorario"><i class="fa fa-fw fa-address-book"></i>Agendar</a>
                            <a href="#" class="dropdown-item"><i class="fa fa-fw fa-comment-dots"></i>Mesagem</a>

                            <div class="dropdown-divider"></div>

                            <a href="./Logout" class="dropdown-item"><i class="fa fa-fw fa-sign-out-alt"></i>Logout</a>
                          </div>
                        </div>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
