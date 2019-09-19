<?php 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Busca UserName</title>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</head>
<body>

	<p class="lead"></p>

	<form name="form_busca">
		<input type="text" id="usuario" name="usuario">
	</form>

	<script type="text/javascript">
		
		$('#usuario').on('keyup', function(){

			var val = $(this).val();

			if(val != null){

				var data = {
					user : val
				}

				$.post('filter.php', data, function(e){

					$('p').html(e);

				});

			}

		});

	</script>

</body>
</html>