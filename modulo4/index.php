<?php 

require_once 'classes/autoload.php';
$func1 = new Funcionario();
$cli1= new Cliente();
$forn1 = new Fornecedor();

echo "<pre>";
print_r($func1);
 
echo "<hr>";
print_r($cli1);

echo "<hr>";
print_r($forn1);

echo "<pre>";

$nome = 'Roney Vila';
$tel = '(61) 9500-8900';
$email = 'roneyvns@gmail.com';
$cargo = 'Professor';
$sal = 1500;

$func1->validar($nome, $tel, $email, $cargo, $sal);
$func1->exibir();
$func1->enviarEmail();
?>