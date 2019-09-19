<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Error 404</title>

    <style>
        div.container {

            position: relative;
            height: auto;
            margin-top: 150px;

        }

        body,
        * {
            font-family: "Georgia", serif;
            font-size: 25px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">

                    <img src="<?= URL . "assets/img/Page404/img.png" ?>" alt="File not founds" class="img-fluid">

                    <p id="text" class="text-danger"></p>

                    <span>Controller: <?= $this->Dados['url'] ?></span>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let p = document.getElementById("text");
        let i = 5;
        let href = "<?= URL ?>";


        p.innerHTML = "Está página não existe. Você será redirecionado em " + i + " segundos...";

        setInterval(() => {
            p.innerHTML = "Está página não existe. Você será redirecionado em " + i + " segundos...";
            i--;
        }, 1000);

        setTimeout(() => {
            window.location.href = href;
        }, 6000);
    </script>

</body>

</html>