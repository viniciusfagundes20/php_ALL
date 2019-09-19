<?php

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
$cadastrado = isset($_GET['cadastrado']) ? $_GET['cadastrado'] : 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>EEF - Página inicial</title>

		<!-- jquery - link cdn -->
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/estilo.css">

		<script src="js/bootstrap.min.js"></script>

		<script type="text/javascript">
			
			var campo_vazio = false;

			$(document).ready(function(){
				
				$('#btn_login').click(function(){
					
					if($('#campo_usuario').val == ''){
						campo_vazio = true;
					}

					if($('#campo_usuario').val == ''){
						campo_vazio = true;
					}

					if(campo_vazio){
						return false;
					}

				})


			})

		</script>
	</head>

	<body style="font-family: Trebuchet MS, Helvetica, sans-serif;">
		<!-- Static navbar -->
	     <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente" style="font-size: 17px;">
     	 <div class="container">
        
        	<div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed"
            data-toggle="collapse" data-target="#barra-navagacao">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

            <a href="index.html" class="navbar-brand">
          		<span class="img-logo">Espaço encanto festas</span>
            </a>
        </div>

        <!-- navbar -->

        <div class="collapse navbar-collapse" id="barra-navagacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-fire"></span> Serviços</a></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></a></li>
            <li class="divisor" role="separator"></li>
            <li><a href="">Inscrever-se</a></li>
             <li><a href="">Entrar</a></li>
          </ul>

        </div>

      </div><!-- /Container-->
    </nav><!--  /NAV -->


	    <div class="container" style="margin-top: 150px;">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h2>Bem vindo ao espaço encanto festas</h2>
	        <p>Veja o que está acontecendo agora...</p>
	      </div>

	      <div class="clearfix">
	      	<label style="color: red; font-size: 18px;"><?php
									
				if($erro == 1) echo "Usuário ou senha invalidos !";
				
				if($cadastrado == 1) echo "Usuário cadastrado, aguardando login !";

				?>
				</label>
	      </div>
		</div>
	</div>
	
	<section id="services">
      <div class="container">
        <div class="row albuns page-header" style="margin-bottom: 150px;">
            
            <!--Albúns-->
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6"><img src="imagens/marcha/img.jpg" class="img-responsive"></div>
                <div class="col-md-6"><img src="imagens/marcha/img2.jpg" class="img-responsive"> </div>
              </div>
              <!--/row -->
              <div class="row">
                <div class="col-md-6" style="margin-top: 10px;"><img src="imagens/marcha/img3.jpg" class="img-responsive"></div>
                <div class="col-md-6" style="margin-top: 10px;"><img src="imagens/marcha/img4.jpg" class="img-responsive"></div>
              </div><!--/row -->
            </div>  <!--album -->
            <div class="col-md-6">
            	<h2 class="texto-purple" style="display: block; text-align: center; margin-bottom: 20px;">Marcha e uso</h2>
            	<p>Lorem Ipsum é simplesmente texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando uma impressora desconhecida pegou uma galé do tipo e subiu para fazer um livro de espécimes de tipo. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado nos anos 60 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum, e mais recentemente com software de editoração eletrônica como Aldus PageMaker incluindo versões de Lorem Ipsum.</p>
            </div>
          </div>
      </div>
	<div class="container">
    	<div class="row albuns">
        	<div class="col-md-6">
        		<h2 class="texto-purple" style="display: block; text-align: center; margin-bottom: 20px;">Frozen</h2>
        		<p>Lorem Ipsum é simplesmente texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando uma impressora desconhecida pegou uma galé do tipo e subiu para fazer um livro de espécimes de tipo. Ele sobreviveu não apenas cinco séculos, mas também o salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado nos anos 60 com o lançamento de folhas de Letraset contendo passagens de Lorem Ipsum, e mais recentemente com software de editoração eletrônica como Aldus PageMaker incluindo versões de Lorem Ipsum.</p>
        	</div>

            <!--Albúns-->
	            <div class="col-md-6">
	              <div class="row">
	                <div class="col-md-6"><img src="imagens/frozen/img.jpg" class="img-responsive"></div>
	                <div class="col-md-6"><img src="imagens/frozen/img2.jpg" class="img-responsive"> </div>
	              </div>
	              <!--/row -->
	              <div class="row">
	                <div class="col-md-6" style="margin-top: 10px;"><img src="imagens/frozen/img3.jpg" class="img-responsive"></div>
	                <div class="col-md-6" style="margin-top: 10px;"><img src="imagens/frozen/img4.jpg" class="img-responsive"></div>
	              </div><!--/row -->
	            </div>  <!--album -->
          </div>
      </div>
	</section>
    

    <section id="services" style="display: block; margin-top: 200px;">
    	<div class="page-header">
    		<h3 style="text-align: center;">Preço acessiveís</h3>
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
    		<h3 style="text-align: center;">Otima qualidade</h3>
    	</div>
    	<div class="container">
    		<div class="row page-header">
    			<div class="col-md-6">
    				<img src="imagens/qualidade/img.jpg" width="100%" class="img-responsive">
    			</div>
    			<div class="col-md-6">
    				<img src="imagens/qualidade/img2.jpg" width="100%" class="img-responsive">
    			</div>
    		</div>
    	

    	<div class="row page-header">
    			<div class="col-md-6">
    				
    			</div>
    		</div>
    	</div>
    </div><!--container-->
    </section>

     <section id="services" style="display: block; margin-top: 200px;">
    	<div class="page-header">
    		<h3 style="text-align: center;">Conforto</h3>
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
    	<div class="container page-header">
    		<h3 style="text-align: center;">Avaliações de pessoas reais</h3>
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
            <h4>Company</h4>
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

	
	</body>
</html>