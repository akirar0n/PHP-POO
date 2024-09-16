<?php

require_once 'classes/Carro.class.php';

    $carro1 = new Carro(150);

    $carro1->ligar();
    //$carro1->desligar();

    $carro1->acelerar(20);
    $carro1->acelerar(50);
    $carro1->acelerar(50);
    $carro1->acelerar(30);  

    echo "<pre>";
    print_r($carro1);

    echo "<hr>";
    $carro1->detalhes();
?>
