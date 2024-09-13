<?php

require_once 'classes/Carro.class.php';

    $carro1 = new Carro(150);

    $carro1->ligar();

    $carro1->acelerar(30);
    echo "<pre>";
    print_r($carro1);

?>