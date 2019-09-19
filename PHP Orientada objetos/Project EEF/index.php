<?php

session_start();
include "data.php";

?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EEF - Página inicial</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	

<!--Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

</head>

<body class="main">

<!--navegação bar-->
<header>
<div class="navbar navbar-fixed-top  navbar-inverse navbar-transparente">
	<div class="container">
 
	 <div id="drop" class="nav navbar-nav navbar-left" style="margin-top: 5px;">
		<ul class="dropdown-menu row" style="width: 25%;">
			<li class="col-md-4">
				<h4>início</h4>
				<a href="#">Home</a>
				<a href="#">Decorações</a>
				<a href="#">Preços acessiveís</a>
			</li>
			<li class="col-md-4">
				<h4>Detalhes</h4>
				<a href="#">Qualidade</a>
				<a href="#">Conforto</a>
				<a href="#">Diversão</a>
			</li>
			<li class="col-md-4">
				<h4>Final</h4>
				<a href="#">Avaliações</a>
				<a href="#">Rodapé</a>
			</li>
		</ul>
		
		<button id="btn_navegate" class="dropdown-toggle" data-toggle="dropdown" data-target="#drop" aria-expanded="false">
			<img src="imagens/iconStart.png" height="30" width="30" class="img-responsive">
			
		</button>
		
		<!-----------------------------------------------------:-->
		
		
		<a href="#" class="item-social" style="margin-left: 15px;"><img src="imagens/facebook.png" height="30" width="30" class="img-responsive"></a>
		<a href="#" class="item-social"  style="margin-left: 15px;"><img src="imagens/instagram.png" height="30" width="30" class="img-responsive"></a>
		<a href="#" class="item-social"  style="margin-left: 15px;"><img src="imagens/twitter.png" height="30" width="30" class="img-responsive"></a>
		<!--Painel de navegação--> 
			<div class="navbar-header" style="float: left; margin-left: 5px; margin-top: -5px;">
				<button class="navbar-toggle" type="button" data-target="#barra_navagacao" data-toggle="collapse" aria-expanded="false">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
			</div>
		</div>
	  <!-- navbar -->
	<div class="navbar-right navbar-collapse collapse" id="barra_navagacao">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="index.php">
               <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li>
              <a href="#">
                <span class="glyphicon glyphicon-fire"></span> Serviços</a>
            </li>
            <li>
              <a href="avaliacao.php">
               <span class="glyphicon glyphicon-star"></span> Avaliação</a>
            </li>

            <?php

            if(!$usuario){
             echo '<li><a href="inscrevase.php">Inscrever-se</a></li><li><a href="authenticar.php">Entrar</a></li>';
            }else{
				echo '<li id="drop2"><ul class="dropdown-menu row" style="width: 25%;">
					  <li><a href="avaliacao.php">Avaliar</a></li><li><a href="#">config</a></li><li><a href="sair.php">logout</a></li></ul>
					 <a class="dropdown-toggle" data-toggle="dropdown" data-target="#drop2" aria-expanded="false">';
					 echo $usuario.' <span class="caret"></span></a></li>';
				}
			  ?>
			  
			
		  </ul>
        </div>
 
 
	</div><!--container-->
 </div><!--navbar-->
</header>

<!--BACKGROUND-->	

<div class="row" style="display: block;">
	<div class="col-md-12">
		<img src="imagens/carnaval.png" width="100%" class="img-responsive">
	</div>
</div>


<!--body-->

	
<!--start body-->
<section id="services">
    <div class="container" style="height: 500px;">
     	<!--Conteúdo-->
    </div>
</section>
    

    <section id="services" style="display: block; margin-top: 200px;">
    	<div class="page-header">
    		<h3 style="text-align: center;" id="list-item-3">Preço acessiveís</h3>
    	</div>
    	<div class="container">
    		<table class="table table-striped table-bordered table-houver table-condensed">
            <thead>
              <tr>
                <td>Espaço <span class="glyphicon glyphicon-fire"></span></td>
                <td>Dia da semana</td>
                <td><span class="glyphicon glyphicon-usd"></span></td>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Unidade Planalto</td>
                <td>Segunda a quinta</td>
                <td>1.090$</td>
              </tr>

             <tr>
                <td>Unidade Planalto</td>
                <td>Sexta a domingo</td>
                <td>1.490$</td>
              </tr>

              <tr>
                <td>Unidade Guarani</td>
                <td>Segunda a quinta</td>
                <td>1.090$</td>
              </tr>

              <tr>
                <td>Unidade Guanari</td>
                <td>Segunda a quinta</td>
                <td>1.090$</td>
              </tr>
            </tbody>
          </table>

           <button type="button" data-toggle="tooltip" title="Click aqui para mais informações"
              data-placement="right" class="btn btn-primary">
               <a href="#Form-info" data-toggle="tab" style="color: white;">Mais informações</a>
            </button>
    	</div>
    </section>


    <section id="services" style="display: block; margin-top: 200px;">
    	<div class="page-header">
    		<h3 style="text-align: center;" id="list-item-4">Qualidade</h3>
    	</div>
    	<div class="container">
    		<div class="row page-header">
    			<div class="col-md-6">
            <p>Lorem Ipsum é simplesmente texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando uma impressora desconhecida pegou uma galé do tipo e subiu para fazer um livro de espécimes de tipo. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado nos anos 60 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum, e mais recentemente com software de editoração eletrônica como Aldus PageMaker incluindo versões de Lorem Ipsum.</p>
          </div>
          <div class="col-md-6">
            <img src="imagens/qualidade/img.jpg" width="100%" class="img-responsive">
          </div>
    		</div>
    	

    	<div class="row page-header">
    			<div class="col-md-6">
    				
    			</div>
    		</div>
    	</div>
   
    </section>

     <section id="services" style="display: block; margin-top: 200px;">
    	<div class="page-header">
    		<h3 style="text-align: center;" id="list-item-5">Conforto</h3>
    	</div>
    	<div class="container">
    		<div class="row page-header">
    			<div class="col-md-6">
    				<img src="imagens/conforto/img2.png" height="100%" width="100%" class="img-responsive">
    			</div>
    			<div class="col-md-6">
    				<p>Lorem Ipsum é simplesmente texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando uma impressora desconhecida pegou uma galé do tipo e subiu para fazer um livro de espécimes de tipo. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado nos anos 60 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum, e mais recentemente com software de editoração eletrônica como Aldus PageMaker incluindo versões de Lorem Ipsum.</p>
    			</div>
    		</div>
    	</div>
    </section>

    <section id="services" style="display: block; margin-top: 200px;">
      <div class="page-header">
        <h3 style="text-align: center;" id="list-item-4">Diversão</h3>
      </div>
      <div class="container">
        <div class="row page-header">  
          <div class="col-md-6">
            <p>Lorem Ipsum é simplesmente texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando uma impressora desconhecida pegou uma galé do tipo e subiu para fazer um livro de espécimes de tipo. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado nos anos 60 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum, e mais recentemente com software de editoração eletrônica como Aldus PageMaker incluindo versões de Lorem Ipsum.</p>
          </div>
          <div class="col-md-6">
              <img src="imagens/diversao/img.jpg" class="img-responsive">
            </div>  <!--album -->
      

      <div class="row page-header">
          <div class="col-md-6">
            
          </div>
        </div>
      </div>
   
    </section>

    <section id="services" style="display: block; margin-top: 200px;">
    	<div class="container page-header">
    		<h3 style="text-align: center;"  id="list-item-6">Avaliações de pessoas reais</h3>
    	</div>
    	<div class="container">
    		<div class="row page-header">
    			<div class="col-md-8">
    				<img src="imagens/avaliacoes/img.png" width="100%" class="img-responsive">
    			</div>
    			<div class="col-md-4">
    				<img src="imagens/5estrelas.png" width="100%" class="img-responsive">
    			</div>
    		</div>
    		<div class="row page-header">
    			<div class="col-md-8" >
    				<img src="imagens/avaliacoes/img2.png" width="100%" class="img-responsive">
    			</div>
    			<div class="col-md-4">
    				<img src="imagens/5estrelas.png" width="100%" class="img-responsive">
    			</div>
    		</div>
    		<div class="row page-header">
    			<div class="col-md-8">
    				<img src="imagens/avaliacoes/img3.png" width="100%" class="img-responsive">
    			</div>
    			<div class="col-md-4">
    				<img src="imagens/5estrelas.png" width="100%" class="img-responsive">
    			</div>
    		</div>
    		<div class="row page-header">
    			<div class="col-md-8">
    				<img src="imagens/avaliacoes/img4.png" width="100%" class="img-responsive">
    			</div>
    			<div class="col-md-4">
    				<img src="imagens/5estrelas.png" width="100%" class="img-responsive">
    			</div>
    		</div>
    		<div class="row page-header">
    			<div class="col-md-8">
    				<img src="imagens/avaliacoes/img5.png" width="100%" class="img-responsive">
    			</div>
    			<div class="col-md-4">
    				<img src="imagens/5estrelas.png" width="100%" class="img-responsive">
    			</div>
    		</div>
    	</div>
    </section>


    <footer id="rodape">
      <div class="container">
        <div class="row">
         <div class="col-md-2">
            <h4 id="list-item-7">Company</h4>
            <ul class="nav">
              <li><a href="#" class="navegacao">Sobre</a></li>
              <li><a href="#" class="navegacao">Emprego</a></li>
              <li><a href="#" class="navegacao">Impresa</a></li>
              <li><a href="#" class="navegacao">Novidades</a></li>
            </ul>
          </div>

         <div class="col-md-6"></div>
        
        <div class="col-md-4">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#" class="item-social"><img src="imagens/facebook.png"></a></li>
              <li><a href="#" class="item-social"><img src="imagens/instagram.png"></a></li>
              <li><a href="#" class="item-social"><img src="imagens/twitter.png"></a></li>
            </ul>
          </div>
        </div><!-- /ROW -->
      </footer>
    </div>	

<!-- Latest compiled and minified JavaScript	 -->
<script src = "https://code.jquery.com/jquery-2.2.2.min.js"></Script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css/estilo.css">

<script type="text/javascript">

    var i =  false;

	$(document).ready(function(){
		//btn_navegate
	$('#btn_navegate').click(function(){
	   if(i == false){
		 mostrarMenu();
		 i = true;
	}else{
	    ocultarMenu();
	    i = false;
	}
          
         });

         $('#list-example').click(function(){
            ocultarMenu();
            i = false;
         })

         function ocultarMenu(){
            $('#list-example').hide();
         }
         
         function mostrarMenu(){
            $('#list-example').show();
            i = true;
         }
        
        var control = 0;

    		$('#btn_menu').click(function(){
				alert('aaa');
    			if (control == 0){
    				$('#dropdowniten').show();
    				control = 1;
    			}else{
    				control = 0;
    			$('#dropdowniten').hide();
    		}
    			
    	})
});</script>

	</body>
</html>