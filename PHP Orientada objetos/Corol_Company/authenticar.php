<?php

$erro = isset($_GET['erro']) ? : 0;

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Autenticação - Corol Company</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    
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
          <h3>Iniciar sessão</h3>
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
                  <label><input type="checkbox" checked="false" id="checkboxLembrar" name="checkboxLembrar">Continuar conectado</label>
                </div>

                  <button type="submit" id="btSubmit" class="btn btn-primary">Authenticar</button>

                  <button type="button" id="btHome" class="btn btn-danger">Home</button> 

              </form>

            
            <?php if($erro == 1){ ?>
                <label style="font-size: 18px; text-align: center; color: red; margin-top: 50px;">
                    <div class="alert alert-danger" role="alert">
                      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                      <span class="sr-only">Error:</span>
                      Enter a valid user and pass address
                    </div>                                     
                </label>
              <?php } ?>

                <label id="erroID" style="font-size: 18px; text-align: center; color: red;">Error! preencha todos os dados.
                </label>
          </div>
          <div class="col-md-4"></div>
      </div>
 </div>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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

  </body>
</html>
