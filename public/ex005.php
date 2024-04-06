<?php

/*
5. Conversor de moedas Avançado. Buscando cotações da API pública do Banco Central.
*/
const SYMBOL_USD = 'US$';
const SYMBOL_EUR = '€';
const SYMBOL_GBP = '£';

$value = (float) readline("Quanto você tem em R$?\n=> ");

echo "\nPara qual moeda quer converter?\n";
echo '1. Dólar Americano (' . SYMBOL_USD . ")\n";
echo '2. Euro (' . SYMBOL_EUR . ")\n";
echo '3. Libra esterlina (' . SYMBOL_GBP . ")\n";
$opc = (int) readline("\n=> ");

switch ($opc) {
    case 1:
        $cotacaoUSD = get_usd_rate();

        $newValue = round($value / $cotacaoUSD, 2, PHP_ROUND_HALF_UP);
        echo "\nCotação de hoje: R$1,00 => " . SYMBOL_USD . "{$cotacaoUSD}\n";
        echo "\nR$", "{$value} equivalem a " . SYMBOL_USD . "{$newValue}\n";
        break;
    case 2:
        $cotacaoEUR = get_eur_rate();

        $newValue = round($value / $cotacaoEUR, 2, PHP_ROUND_HALF_UP);
        echo "\nCotação de hoje: R$1,00 => " . SYMBOL_EUR . "{$cotacaoEUR}\n";
        echo "\nR$", "{$value} equivalem a " . SYMBOL_EUR . "{$newValue}\n";
        break;
    case 3:
        $cotacaoGBP = get_gbp_rate();

        $newValue = round($value / $cotacaoGBP, 2, PHP_ROUND_HALF_UP);
        echo "\nCotação de hoje: R$1,00 => " . SYMBOL_GBP . "{$cotacaoGBP}\n";
        echo "\nR$", "{$value} equivalem a " . SYMBOL_GBP . "{$newValue}\n";
        break;
    default:
        echo "Escolha uma opção válida!\n";
        break;
}

function get_usd_rate()
{
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'USD\'&@dataInicial=\'04-03-2024\'&@dataFinalCotacao=\'04-05-2024\'&$top=3&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $data = json_decode(file_get_contents($url), true);
    $cotacao = (float) $data['value'][0]['cotacaoCompra'];


    return round($cotacao, 2, PHP_ROUND_HALF_UP);
}
function get_eur_rate()
{
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'EUR\'&@dataInicial=\'04-03-2024\'&@dataFinalCotacao=\'04-05-2024\'&$top=3&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $data = json_decode(file_get_contents($url), true);
    $cotacao = (float) $data['value'][0]['cotacaoCompra'];

    return round($cotacao, 2, PHP_ROUND_HALF_UP);
}
function get_gbp_rate()
{
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'GBP\'&@dataInicial=\'04-03-2024\'&@dataFinalCotacao=\'04-05-2024\'&$top=3&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $data = json_decode(file_get_contents($url), true);
    $cotacao = (float) $data['value'][0]['cotacaoCompra'];

    return round($cotacao, 2, PHP_ROUND_HALF_UP);
}