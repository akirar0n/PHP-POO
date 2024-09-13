<?php

require_once 'classes/Aluno.class.php';

$aluno1 = new Aluno();
$aluno2 = new Aluno();

$aluno1 -> nome = 'Roney Vila';
$aluno1 -> email = 'roneyvns@gmail.com';

$aluno2 -> nome = 'Pablo Vegetti';
$aluno2 -> email = 'pablo99@gmail.com';

echo 'Nome: '. $aluno1-> nome. '<br>';
echo 'Email: '. $aluno1-> email. '<br>';
echo '<br>';
echo 'Nome: '. $aluno2-> nome. '<br>';
echo 'Email: '. $aluno2-> email. '<br>';

echo '<hr>';

echo "<pre>";
print_r($aluno1);
var_dump($aluno1);

print_r($aluno2);
var_dump($aluno2);
?>