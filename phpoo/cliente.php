<?php

require_once 'classes/Cliente.class.php';

    $cliente1 = new Cliente();
    $cliente2 = new Cliente();
    
    $cliente1->validar('Roney Vila', 'roneyvns@gmail.com');
    $cliente1->nome = 'Testando kkj...';
    $cliente1->exibir();

    $cliente2->validar('Dimitri Payet', 'payet10vasco@gmail.com');
    $cliente2->exibir();
?>