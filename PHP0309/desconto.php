<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <center>
    <?php
    include('menu.php');
    ?>
        <h1>
<!--Código PHP-->
<?php
//Funcao da calculadora:
function calcular($n1, $n2){
    if ($n2 <= 1){
        $nd = $n1 * 0.10;
        $nt = $n1 - $nd;
        echo ("Valor a pagar: R$$nt");
    }
    elseif ($n2 > 0 && $n2 < 4 ){
        $nd = $n1 * 0.05;
        $nt = $n1 - $nd;
        echo ("Valor a pagar: R$$nt");
    }
    elseif ($n2 >= 4){
        $nd = $n1 * 0.10;
        $nt = $n1 + $nd;
        echo ("Valor a pagar: R$$nt");
    }
    else{
        echo "Tente novamente";
    }
}
//Chamando a funcao
calcular($n1 = $_POST ["n1"], $n2 = $_POST ["n2"])
?>
        <br>
        <a href="form.php"> Voltar </a> 
        <a href="index.php"> Inicio  </a>
        </h1>
    </center>
    </body>
</html>
