<html>
 <head>
  <title>Valor das parcelas</title>
  <meta charset="UTF-8"/>
   <link rel="stylesheet" type="text/css" href="css/estilo.css" />
 </head>
  <body>
  <div>
  <table id="table">
<?php
$v = $_POST['valor'];
$p = $_POST['parcelas'];
    if($p <= 3){
        echo ('Valor ' .$v + $v * 0.05);
    }
    
    if($p >= 3){
        echo ('Valor ' .$v + $v * 0.1);
    }

    if($p = 1){
        echo ('Valor ' .$v - 5.0);
    }
?>
</table>
    </div>
  </body>
</html>