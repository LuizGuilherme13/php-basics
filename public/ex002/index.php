<?php

/* 
2. Calculando IMC. Fórmula = (Peso(kg) / Altura(metros) * Altura(metros)) 
*/

$altura = readline("Qual sua altura(mts)?: ");
if (!is_numeric($altura)) {
    echo "Você precisa digitar somente números!\n";
    return;
}
$altura = (float) $altura;

$peso = readline("Qual seu peso(kg)?: ");
if (!is_numeric($peso)) {
    echo "Você precisa digitar somente números!\n";
    return;
}
$peso = (float) $peso;

$imc = round($peso / ($altura ** 2), 2, PHP_ROUND_HALF_UP);

$msg = '';
if ($imc < 18.5) {
    $msg = 'Abaixo do peso';
} else if ($imc > 18.5 && $imc <= 24.9) {
    $msg = 'Peso normal';
} else if ($imc > 24.99 && $imc <= 29.9) {
    $msg = 'Sobrepeso';
} else if ($imc > 29.99 && $imc <= 34.9) {
    $msg = 'Obesidade grau I"';
} else if ($imc > 34.9 && $imc <= 39.9) {
    $msg = 'Obesidade grau II"';
} else {
    $msg = 'Obesidade grau III (mórbida)"';
}

echo "Seu IMC é: ", $imc, " - ", $msg, "\n";
