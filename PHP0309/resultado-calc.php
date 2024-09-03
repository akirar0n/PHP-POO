<?php
function calcular($n1 , $n2 , $n3, $acao){
if($acao=="somar"){
$resultado=$n1+$n2+$n3;
echo "<center> A soma é $resultado </center>";
}

if($n1 > $n2 && $n1 > $n3){
    echo "<center> O maior número é o primeiro: $n1</center>";
}
if($n2 > $n1 && $n2 > $n3){
    echo "<center> O maior número é o segundo: $n2</center>";
}
if($n3 > $n1 && $n3 > $n2){
    echo "<center> O maior número é o terceiro: $n3</center>";
}

}
 ?>