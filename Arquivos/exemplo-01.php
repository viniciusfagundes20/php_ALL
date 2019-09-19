<?php 

$name = "config";

if(!is_dir($name)){
    mkdir($name);
}

$file = fopen($name . "/log.ini", "a+");

fwrite($file, date("d-m-Y H:i:s") . "\n");
fclose($file);

?>
<DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>HTML 5 - localhost</title>
        
        <style type="text/css">
            
            p.lead{
                color: #c3c3c3;
                font-size: 20px;
                
            }
            
            p.server{
                color: blue;
                font-size: 20px;
            }
            
        </style>
        
    </head>    
<body>
    <p class="lead">Hello world.</p>
    <p id="hour" class="server"></p>
</body>
    
    
<script language="javascript">
    
    var myVar = setInterval(myTimer ,1000);
    
    function myTimer() {
        var d = new Date(), displayDate;
       if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
          displayDate = d.toLocaleTimeString('pt-BR');
       } else {
          displayDate = d.toLocaleTimeString('pt-BR', {timeZone: 'America/Belem'});
       }
          document.getElementById("hour").innerHTML = displayDate;
    }
    
</script>

</html>