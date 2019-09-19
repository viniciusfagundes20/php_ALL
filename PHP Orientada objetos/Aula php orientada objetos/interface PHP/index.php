<?php 

require "./icurso.php";
require "./cursoGraduacao.php";
require "./cursoPosGraduacao.php";

$curso = new cursoGraduacao();

$cursoPos = new cursoPosGraduacao();

?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>HTML 5</title>

<style type="text/css">

p.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.d-block{
	display: block !important;
}
		
</style>

</head>
<body>

<p class="lead">Curso: <?= $curso->disciplina('Desenvolvimento PHP') ?>

<span class="d-block">Professor: <?= $curso->professor("Luiz") ?></span>
<hr />

<p class="lead">

	<span class="d-block">Curso: <?= $cursoPos->disciplina("Desevolvimento-web") ?></span>

	<span class="d-block">Professor: <?= $cursoPos->professor("Vinicin bads") ?></span>

	<span class="d-block">Nível: Pos-Graduado</span>
</p>


</body>
</html>