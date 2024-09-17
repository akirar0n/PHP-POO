<?php 

require_once 'classes/Cliente.class.php';
require_once 'classes/Conta.class.php';

$cliente = new Cliente('Dimitri Payet');
$conta = new Conta($cliente);

$depositos = [500, 1000, 200];
foreach($depositos as $valores):
    $conta->depositar($valores);
endforeach;

$saques = [100, 200, 300];
foreach($saques as $valores):
    $conta->sacar($valores);
endforeach;

$conta->exibir();

echo "<hr>";

echo "<pre>";
print_r($conta);

?>