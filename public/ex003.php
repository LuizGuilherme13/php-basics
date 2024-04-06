<?php

/*
3. Conversor de moedas simples.
*/

$value = (float) readline("Quanto você tem em R$?\n=> ");

echo "\nPara qual moeda quer converter?\n";
echo "1. Dólar Americano (US$)\n";
echo "2. Euro (€)\n";
echo "3. Libra esterlina (£)";
$opc = (int) readline("\n=> ");

$symbol = '';
$newValue = 0.0;
$exchangeRate = 0.0;
switch ($opc) {
    case 1:
        $symbol = 'US$';
        $exchangeRate = 5.07;
        $newValue = round($value / $exchangeRate, 2, PHP_ROUND_HALF_UP);
        break;
    case 2:
        $symbol = '€';
        $exchangeRate = 5.50;
        $newValue = round($value / $exchangeRate, 2, PHP_ROUND_HALF_UP);
        break;
    case 3:
        $symbol = '£';
        $exchangeRate = 6.40;
        $newValue = round($value / $exchangeRate, 2, PHP_ROUND_HALF_UP);
        break;
    default:
        echo "Escolha uma opção válida!\n";
        break;
}

echo "\nCotação de hoje: R$1,00 => $symbol{$exchangeRate}";
echo "\nR$", "{$value} são $symbol{$newValue} \n";