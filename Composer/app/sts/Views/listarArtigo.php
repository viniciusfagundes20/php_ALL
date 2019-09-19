<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<title>PHP - LISTANDO</title>

	<style type="text/css">
		
		table{
			border-collapse: collapse;
		}

		tr, td{
			border: 1px solid #9B30FF;
			margin: 3px;
		}

	</style>

</head>
<body>

	<table width="100%">
		<thead>
			<tr>
				<td>ID</td>
				<td>Titulo</td>
				<td>Conteúdo</td>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($this->data['artigos'] as $value) {
				extract($value); ?>
				<tr>
					<td><?= $ID ?></td>
					<td><?= utf8_encode($TITULO) ?></td>
					<td><?= utf8_encode($CONTEUDO) ?></td>
				</tr>

			<?php } ?>

		</tbody>
	</table>

</body>
</html>

