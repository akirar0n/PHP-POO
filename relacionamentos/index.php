<?php

    require_once 'classes/Escola.class.php';
    require_once 'classes/Aluno.class.php';

    $escola1 = new Escola('Senac');
    $aluno1 = new Aluno('Phillipe Coutinho', $escola1);

    echo "<pre>";
    print_r($aluno1);
    echo "<br>";
    var_dump($aluno1);

    echo"<hr>";

    require_once 'classes/Carrinho.class.php';
    require_once 'classes/Produtos.class.php';

    $produto1 = new Produtos('Computador');
    $produto2 = new Produtos('Mouse');
    $produto3 = new Produtos('Monitor');

    $carrinho = new Carrinho();

    $carrinho->adiciona($produto1);
    $carrinho->adiciona($produto2);
    $carrinho->adiciona($produto3);

    $carrinho->exibe();
?>