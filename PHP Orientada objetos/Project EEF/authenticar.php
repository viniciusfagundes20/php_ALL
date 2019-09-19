<?php

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
$avaliar = isset($_GET['avaliar']) ? $_GET['avaliar'] : 0;


?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Autenticação - EEF</title>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
     


      $(document).ready(function(){

          $('#erroID').hide();

      $('#btHome').click(function(){
        var url = 'index.php';
        $(location).attr('href', url);
      })


        $('#btSubmit').click(function(){
          var campo = false;

          if($('#usuario').val() == ''){
            campo = true;
          }else if($('#senha').val() == ''){
            campo = true;
          }

        if(campo == true){
          
          $('#erroID').show();
          return false;

        }else{
          $('#erroID').hide();
         
        }
        });
    });
       
    </script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <div class="container" data-role="page" data-position="fixed">

      <div class="navbar navbar-fixed-top navbar-default"  data-role="header" style="text-align: center;">
             <span>Iniciar sessão</span>
          
          <div class="dropdown-menu">
           <ul class="nav navbar-nav navbar-right">
              <li><a href="#">teste</a></li>
            </ul>
          </div>
       </div>

       


      <div class="row" data-role="page" style="margin-top: 100px;">
        <div class="col-md-4"></div>
          <div class="col-md-4">

              <form method="post" role="athenticar" action="validar_acesso.php">
               
               <div class="form-group input-group">
                  <span class="input-group-addon" id="sizing-addon2">@</span>
                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" aria-describedby="sizing-addon2">
              </div>

              <div class="form-group input-group">
                  <span class="input-group-addon" id="sizing-addon2" style="padding-right: 20px;">#</span>
                  <input type="password" class="form-control" id="senha" name="senha" placeholder="Password" aria-describedby="sizing-addon2">
              </div>

                <div class="checkbox">
                  <label><input type="checkbox" id="checkboxLembrar">Continuar conectado</label>
                </div>

                  <button type="submit" id="btSubmit" class="btn btn-primary">Authenticar</button>

                  <button type="button" id="btHome" class="btn btn-danger">Home</button> 

              </form>

            

                <label style="font-size: 18px; text-align: center; color: red; margin-top: 50px;">
                  <?php if($erro == 1) echo 
                    '<div class="alert alert-danger" role="alert">
                      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                      <span class="sr-only">Error:</span>
                      Enter a valid user and pass address
                    </div>';
                                     ?>
                </label>

                <label id="erroID" style="font-size: 18px; text-align: center; color: red;">Error! preencha todos os dados.
                </label>
          </div>
          <div class="col-md-4"></div>
      </div>
 </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>