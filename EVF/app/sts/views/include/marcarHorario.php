<?php


if(!isset($_SESSION['user'])) {

   header('Location: ./Autentication&page=marcarhorario');

}

if($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $date = date("Y-m-d H:i:s", strtotime($_POST['date'] . " " . $_POST['hours']));

    $obj = new sql();

    $SQL = "INSERT INTO tb_agenda(user, admin, service, dateTime, created, number) 
    VALUES (:USER, :ADMIN, :SERVICE,:DATETIME, :CREATED, :NUMBER); lastInsertId();";
    
    $row = $obj->insert($SQL, array(":USER" => $_SESSION['user'], ":ADMIN" => $_SESSION['admin'], ":SERVICE" => $_POST['service'],
    ":DATETIME" => $date, ":CREATED" => date("Y-m-d H:i:s"), ":NUMBER" => $_POST['number'])); 

}

class data {

    public function optionDate($i) {

        $date = new DateTime();

        $interval = new DateInterval("P{$i}D");
        $date->add($interval);

        return '<option>' . $date->format("d-m-Y") . '</option>';

    }

}


?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marcar Horário</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style type="text/css">
        *{
            font-family: Georgia, serif;
            font-size: 16px;
        }
    </style>

</head>
<body>

<header class="header-main">
    <nav class="navbar navbar-expand-md navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index"><i class="fa fa-fw fa-home"></i>Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item menu">
                        <a class="nav-link" href="./sobre_empresa"><i class="fa fa-fw fa-fire"></i>Promoções</a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="https://goo.gl/maps/4ckneDmAoZZqvnou7" target="__blank"><i class="fa fa-fw fa-compass"></i>Localidade</a>
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
                          <a class="btn btn-link text-light dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-user"></i><?= $_SESSION['user']; ?>
                          </a>

                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                            <a class="dropdown-item" href="#">Perfil</a>

                            <div class="dropdown-divider"></div>

                            <?php if($_SESSION['admin'] == 1){ ?>
                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-cubes"></i>Configurações</a>
                            <?php } ?>
                            <a class="dropdown-item" href="#"><i class="fa fa-fw fa-star"></i>Avaliar</a>
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

<div class="container mt-4">
<div class="card">

<div class="card-header">
    <h3 class="text-center text-primary">Agendamento</h2>
</div>

<div class="card-body">

<p class="text-center">
    Olá <?= isset($_SESSION['user']) ? $_SESSION['user'] : 'Null'; ?>, o sistema de agendamento funciona da seguinte maneira.<br>
    Você solicitará uma data e hora, e quem estiver gerenciando aprovara sua requisição, chegará uma messagem em verde<br>
    confirmando sua Data/Hora agendada.
</p>

<form id="form" method="POST">

<div class="form-group text-center">
    <label>Serviço: </label>
    <select  class="d-inline-block" name="service">
        <option selected>Estética</option>
        <option value="Manicure">Manicure</option>
        <option value="Cabeleleiro">Cabeleleiro</option>
    </select>
</div>

    <div class="form-group">
        <label class="text-light">Olá <?= isset($_SESSION['user']) ? $_SESSION['user'] : 'Null'; ?> você está prestes a marcar seu horário<br>
            apenas precisamos de alguns dados.
        </label>
        <label for="">Data: </label>
    <select name="date">
        <option selected><?= isset($_POST['date']) ? $_POST['date'] : date("d-m-Y") ?></option>
    <?php
        $obj = new data();
        for ($i = 1; $i <= 5; $i++) {
            echo $obj->optionDate($i);
        }
                                
    ?>
    </select>
    <span class="text-center">Ás</span>
    <select  class="d-inline-block" name="hours">
        <option selected><?= isset($_POST['hours']) ? $_POST['hours'] : '13:00'; ?></option>
        <?php
        for ($i = 7; $i <= 17; $i++) {
            if($i < 10) {
                echo '<option>0' . $i . ':00</option>';
            } else {
                echo '<option>' . $i . ':00</option>';
            }           
        }
        ?>
    </select>
    </div>
    
    <div class="form-group text-center">
        <label for="number">Número: </label>
        <input type="text" id="number" name="number" onKeyPress='formata(this, "(##)#####-####")' class="form-control col-3 text-center mr-auto ml-auto d-inline" placeholder="ex.:(31)1234-4556" value="<?= isset($_POST['number']) ? $_POST['number'] : '' ?>">
    </div>
    
    <input id="submit" type="submit" class="btn btn-lg btn-primary float-right" value="Solicitar">

</form>

<?php if(isset($row) && $row != 0) { ?>
    <div class="alert alert-success" role="alert">Sucesso, seu pedido foi enviado. Arguarde confirmação!<br>
        Voltando a Home em <span id="time">5</span>s aguarde...
    </div>
<?php } ?>



</div>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>

function formata(src, mask)
{
  var i = src.value.length;
  var saida = "#";
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida)
  {
	src.value += texto.substring(0,1);
  }
}

$('#submit').click(function(e) {
    
    var number = $('#number').val();

    if(number.length != 14) {
        alert("Número de telefone inválido");
        e.preventDefault();
    } 

});


</script>

</body>
</html>