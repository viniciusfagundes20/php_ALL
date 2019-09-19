<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- estilo -->
    <link href="css/estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
	.teste{
		background: transparent; border: 0; color: #FFF;
	}
</style>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
    	
    	$(document).ready(function(){
    		var control = 0;
    	
    		var i = '<?php echo 5; ?>';

    		$('#dropdowniten').blur(function(){
    			$('#dropdowniten').hide();
    			control = 0;
    		})

    		$('#btn_menu').click(function(){
    			if (control == 0){
    				$('#dropdowniten').show();
    				control = 1;
    			}else{
    				control = 0;
    				$('#dropdowniten').hide();
    			}
    			
    		})


    	});

    </script>


</head>
<body>

<div class="container" style="margin-top: 50px;">
<div class="btn-group">
  <button type="button" class="btn btn-danger">Action</button>
  <button type="button" id="btn_menu" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul id="dropdowniten" class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>

</div>


</body>
</html>