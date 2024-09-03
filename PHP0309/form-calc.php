<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora 2</title>
    <?php include('resultado-calc.php'); ?>
</head>
<body>
    <?php
    include('menu.php');
    ?>
    <form method = "POST" action = "">
        Calculadora <br>
        Número 1: <input type = "text" name = "n1"> <br>
        Número 2: <input type = "text" name = "n2"> <br>
        Número 3: <input type = "text" name = "n3"> <br>
        <button type = "submit" name = "acao" value = "somar"> SOMAR </button>
</form>
<?php  
  calcular(@$_POST["n1"], @$_POST["n2"], @$_POST["n3"], @$_POST["acao"]);
  ?>
</body>
</html>