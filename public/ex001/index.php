<?php

/* 
1. Calculando média entre 3 valores. 
*/

echo "Cálculo de Média \n\n";

$val1 = readline("1° número: ");
if (!is_numeric($val1)) {
    echo "Você precisa digitar somente números!\n";
    return;
}
$val1 = (int) $val1;

$val2 = readline("2° número: ");
if (!is_numeric($val2)) {
    echo "Você precisa digitar somente números!\n";
    return;
}
$val2 = (int) $val2;

$val3 = readline("3° número: ");
if (!is_numeric($val3)) {
    echo "Você precisa digitar somente números!\n";
    return;
}
$val3 = (int) $val3;

$media = ($val1 + $val2 + $val3) / 3;

echo "A média é: $media \n";