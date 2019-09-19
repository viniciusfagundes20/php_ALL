<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sistema de Busca sem Refresh</title>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="javascriptpersonalizado.js"></script>
	</head>
	<body>
		<h1>Pesquisar Cursos</h1>
		<form method="POST" id="form-pesquisa" action="">
			Pesquisar: <input type="text" name="pesquisa" id="pesquisa" placeholder="O que você está procurando?">
			<input type="submit" name="enviar" value="Pesquisar">
		</form>
		
		<ul class="resultado">
		
		</ul>
	</body>
</html>