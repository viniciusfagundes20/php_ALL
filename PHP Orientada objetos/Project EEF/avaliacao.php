<?php

session_start();
include "data.php";

if(!$id_usuario)  echo '<script language="javascript">var url = "https://espacoencantofestas.000webhostapp.com/index/index.php"; window.location.href = url;</script>';

include "bd_class.php";

$SQL = "SELECT * FROM AVALIACOES";

$BD = new bd;

$QUERY = mysqli_query($BD->connection(), $SQL);
$DATA = mysqli_fetch_array($QUERY);

?>

<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    

    <title>Hello, world!</title>
  </head>
  <body>


  	
  				<!-- Static navbar -->
<nav class="navbar navbar-fixed-top navbar-inverse" style="font-size: 15px;">

   <div class="nav navbar-nav navbar-left" style="color: #FFF;">
 
<a href="#" class="item-social" style="margin-left: 15px;"><img src="imagens/facebook.png" height="30" width="30" class="img-responsive"></a>
<a href="#" class="item-social"  style="margin-left: 15px;"><img src="imagens/instagram.png" height="30" width="30" class="img-responsive"></a>
<a href="#" class="item-social"  style="margin-left: 15px;"><img src="imagens/twitter.png" height="30" width="30" class="img-responsive"></a>
     </div>
    

    	 <div class="container">
        	<div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
              data-toggle="collapse" data-target="#barra-navagacao">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

        <!--Painel de navegação-->

      
  </div>

        <!-- navbar -->
      <div class="collapse navbar-collapse" id="barra-navagacao">
     
        <ul class="nav navbar-nav navbar-right" style="margin-top: 25px;">
              <li>
              <a href="index.php">
               <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li>
              <a href="#">
                <span class="glyphicon glyphicon-fire"></span> Serviços</a>
            </li>
                   
          <li class="dropdown">
            <a href="#"  class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-eye-open"></span>
              <label>&nbsp;
                
                <?php
                  echo $usuario;  
                  if($admin == 1){
                    echo '(admin)';
                  }
                ?>
                
                  
                </label>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Configurações</a></li>
                 <li><a href="sair.php" id="Form-logout"><span class="glyphicon glyphicon-off" ></span> Logout</a></li>
                 <?php 
                  if($admin == 1){
                    echo '<li><a href="#" id="form_admin"><span class="glyphicon glyphicon-eye-open"></span> Administração</a></li>';
                  }
                 ?>
             </ul>
           </li>
          </ul>
        </div>
      </div><!-- /Container-->
    </nav><!--  /NAV -->

        <div class="container" style="margin-top: 150px;">
  		 
  		<div class="row">
  			<div class="col-md-4">
  				
  				
  					<span>Sua avaliação: </span>
  					<select class="form-control" id="inputGroupSelect03" aria-label="Example select with button addon">
				    <option value="1">Uma estrela</option>
				    <option value="2">Duas estrelas</option>
				    <option value="3">Três estrelas</option>
				    <option value="4">Quatro estrelas</option>
				    <option value="5">Cinco estrelas</option>
				  </select>

  			</div>

  			<div>
  				<div id="star" style="margin-top: 20px; text-align: left;"></div>
  			</div>
  			</div><!--row-->

  			<div class="row">
  				<div class="col-md-6">
  				  <label style=" margin-top: 50px;">Deixe um comentário: </label>
  				<textarea rows="5" cols="60" name="descrição" placeholder="Digite os detalhes aqui ..."></textarea> 
  			</div>	
  			</div>

  			<div class="row">
  				<div class="col-md-12">
  					<button id="btn_enviar" class="btn btn-default btn-lg">
  						Avaliar
  					</button>
  				</div>
  			</div>

  	</div>
</div><!--Container-->
    

<!-- Latest compiled and minified JavaScript	 -->
<script src = "https://code.jquery.com/jquery-2.2.2.min.js"></Script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/estilo.css">
    
<script type="text/javascript">
  		
  		$(document).ready(function(){

  			reflesh_star();

  			$('#inputGroupSelect03').change(function(){
  				reflesh_star();
  			})


  			function reflesh_star(){
  				$('#star').html('');

  				var quota_star = $('#inputGroupSelect03').val();
				for(var i = 1; i <= quota_star; i++){

  				var star = document.createElement('img');
  				star.src = 'imagens/star-icon.png';

  				star.id = 's_' + i;
  				star.class = 'img-responsive';
  				star.height = '25';
  				star.width = '25';


				document.getElementById('star').appendChild(star);	
  				}

  			}


  		});//document.ready();

  	</script>

    
  </body>
</html>