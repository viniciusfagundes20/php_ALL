<?php

session_start();

if(!isset($_SESSION['usuario'])) header('location: index.php?erro=1'); 

$id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Home - EEF</title>
		
		<!-- jquery - link cdn -->
		<script src="js/jquery-3.3.1.min.js"></script>
		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
	

		<script type="text/javascript">
			$(document).ready(function(){

				$('#btn_tweet').click(function(){
					
					if($('#tx_tweet').val().length > 0){
						var novaURL = "inclui_tweet.php";

						$.ajax({
							url: novaURL,

							method: "post",

							data: $('#form_tweet').serialize(),

							success: function(data){
								$('#tx_tweet').val('');
								refleshTweets();
							}

						})

					}

					//verificar
				});

				function refleshTweets(){
					$.ajax({

						url: 'get_tweet.php',
						
						method: 'post',

						success: function(data){
							$('#tweets').html(data);
						}

					})
				}

				refleshTweets();

			});
		</script>

	</head>

	<body style="font-family: Trebuchet MS, Helvetica, sans-serif; font-size: 17px;">
        
       <nav class="navbar navbar-default">

      <div class="navbar-header">
        
        <button type="button" class="navbar-toggle collapsed"
        data-toggle="collapse" data-target="#barra-navegacao">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    
      </div>
    

        
        <div  id="barra-navegacao">
          	
          <div class="container">

          <ul class="nav navbar-nav navbar-right" style="margin-top: 25px;">
              <li>
              <a href="home.php" style="color: #FFF;">
               <span class="glyphicon glyphicon-home"></span> Home</a>
            </li>
            <li>
              <a href="#" style="color: #FFF;">
                <span class="glyphicon glyphicon-fire"></span> Serviços</a>
            </li>
                   
          <li class="dropdown">
            <a href="#"  class="dropdown-toggle" data-toggle="dropdown" style="color: #FFF;">
            <span class="glyphicon glyphicon-eye-open"></span>
            	<label>&nbsp;<?= $_SESSION['usuario'] ?></label>
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#">
                      <span class="glyphicon glyphicon-cog"></span> Configurações
                    </a>
                 </li>
                 <li>           
                 		<a href="sair.php" id="Form-logout"><span class="glyphicon glyphicon-off" > </span> Logout </a>         
           		</li>
           	 </ul>
      	   </li>
   		</ul>
      </div>
   </div>
 </nav>
   



<!------------------------------------------------------------------------------------------------------->

	    <div class="container">
	    	<div class="col-md-3">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				<label>@<?= $_SESSION['usuario'] ?></label>
	    				<hr>
	    				<div class="col-md-6">
	    					Displays<br>1
	    				</div>
	    				<div class="col-md-6">
	    					Seguidores<br>1
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    

	    <div class="col-md-6">
	    	<div class="panel panel-default">
	    		<div class="panel-body">
	    			<form id="form_tweet" method="post">
	    			<div class="input-group">
	    				<input type="text" id="tx_tweet" name="tx_tweet" class="form-control" placeholder="O que está acontecendo agora..." maxlength="140">
	    				<span class="input-group-btn">
	    					<button type="button" id="btn_tweet" class="btn btn-primary">
	    						public
	    					</button>
	    				</span>
	    			</div>
	    			</form>
	    		</div>
	    	</div>

	    	<div id="tweets" class="list-group">
	    		
	    	</div>

	    </div>
	    
	    <div class="col-md-3">
	    	<div class="panel panel-default">
	    		<div class="panel-body">
	    			<h4>
	    				<a href="#">Procurar por pessoas</a>
	    			</h4>
	    		</div>
	    	</div>
	    </div>

		
			
	
	  </div><!--/CONTAINER-->	
		<script src="js/bootstrap.min.js"></script>
		
		
	</body>
</html>