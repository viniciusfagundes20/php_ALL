<?php

  session_start();

  include "data.php";

  if(empty($usuario)) include "cookie.php"; else include "bd_class.php";

  $bd = new bd;
  $sql = 'SELECT * FROM CURSOS';
  $query = mysqli_query($bd->connection(), $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  
<style type="text/css">
    .img-data{
      max-height: 150px;
      height: auto;
    }
</style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Corol Company</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      
    $(document).ready(function(){

      $('.btn-more').click(function(){
        var id = this.id;
        window.location.href = "more.php?id=" + id;
      })

      $('#btn_search').click(function(){
        var search = $("#searchText").val();

        if(!search){
          return false;
        } else {
           var url = "./search.php?search=" + search;
           window.location.href = url;
        }

        })

    });

    </script>

<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <div class="container">
    <!--Usuário-->
    <?php if(!empty($usuario)){ ?>

    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="navbar-toggler-icon"></span><span id="txUsuario">&nbsp;<?= $usuario ?></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php if($admin == 1) { ?><a class="dropdown-item" href="#">Configurações</a> <?php } ?>
          <a class="dropdown-item" href="#">Obter curso</a>
          <a class="dropdown-item" href="#">Meus cursos</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
   
  <?php } ?>



<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

     <?php if(empty($usuario)) { ?>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./inscrevase.php">Inscrever-se<span class="sr-only">(current)</span></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./authenticar.php">Entrar<span class="sr-only">(current)</span></a>
        </div>
      </li>

      <?php } ?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input id="searchText" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button id="btn_search" class="btn btn-outline-success my-2 my-sm-0" type="button">Search</button>
    </form>
  </div>

  </div>
</nav>



<!--navbar /-->

<!--animation-->




<!--/animation-->

<!--body-->

<div id="bodyGround" class="container-fluid" style="width: 100%; background: #000000;">
  <img src="http://dioceseitabira.org.br/wp-content/uploads/sites/42/2018/05/Corpus-Christi-990x390.jpg" class="img-fluid" style="width: 100%; height: 500px;">
</div>

 <div class="row">
  <div class="col-md-2 pb-2 mt-4 mb-2 border-right border-top border-bottom">
    <div class="dropdown">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Mais relevantes</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Administração</a>
        <a class="dropdown-item" href="#">Informatica</a>
        <a class="dropdown-item" href="#">Desenvolvimento</a>
        <div class="dropdown-divider"></div>
      </div>
</div>
  <div class="col-md-10">
   <div class="row">
    <?php $i = 0; while($dado = $query->fetch_array()) {  ?>
          <div class="col-md-4 pb-2 mt-4 mb-2 border-bottom border-top border-left border-right" style="heigth:100px;">
            <div class="container">
              <ul class="navbar-nav">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?= $dado["CURSO"] ?></a>

                <div class="dropdown-divider"></div>
                <?php echo '<img src="'.$dado['IMG'].'" class="img-fluid img-data" heigth="100" width="100%">'; ?>
                <div class="dropdown-divider"></div>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="font-size: 20px;"><?= number_format($dado["PRECO"], 2)."$" ?>&nbsp;&nbsp;&nbsp;<?php if($dado["DESCONTO"] > 0){ ?><?= '<span style="color: red;">'.$dado["DESCONTO"]."% Desconto".'</span>' ?> <?php } ?></a>
                <div class="dropdown-divider"></div>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Opções</a>
                <?= '<button id="'. $dado['ID'] .'" class="btn btn-primary btn-more">Mais informações</button>' ?>
                <span id="span_descont" style="display: block;"></span>
              </ul>
          </div>
        </div>    
        <?php } ?>
      </div>
    </div>
</div>

<footer id="rodape">
      <div class="container">
        <div class="row">
         <div class="col-md-2">
            <h4 id="list-item-7">Company</h4>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Company</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Suport</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
          </div>

  <div class="col-md-6"></div>      
  <div class="col-md-4">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="item-social img-fluid"><img src="img/facebook.png"></a></li>
        <li><a href="#" class="item-social img-fluid"><img src="img/instagram.png"></a></li>
        <li><a href="#" class="item-social img-fluid"><img src="img/twitter.png"></a></li>
      </ul>
    </div>
  </div><!-- /ROW -->
</footer>

</body>
</html>