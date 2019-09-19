<!DOCTYPE html>
<html>
<body>

<form id="myForm" method="post"> 

    Name: <input type="text" name="name" /> 
    Comment: <textarea name="comment"></textarea>

    <input type="text" name="latitude">

    <input type="submit" value="Submit Comment">

</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
<script src="http://malsup.github.com/jquery.form.js"></script> 

<?php 


if($_SERVER["REQUEST_METHOD"] === "POST"){

	var_dump($_POST);

}


?>

</body>
</html>