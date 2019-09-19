<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form id="group" name="cadastro">
        <label for="id">
            Name:
            <input type="text" name="id">
        </label>

        <label for="email">
            Email:
            <input type="email" name="email">
        </label>

        <label for="password">
            Senha:
            <input type="password" name="password">
        </label>

        <input type="submit" name="submit">
    </form>

    <div id="resposta" style="margin-top: 20px; position: relative;">
        <span id="text"></span>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>