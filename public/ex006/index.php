<?php

$arr = [
    'Nome' => 'Luiz',
    'Idade' => 22,
    'País' => 'Brasil'
];

//? Trabalhando com arrays

//? adiciona no inicio do array
// array_unshift($arr, 5);

//? adiciona no final do array
// array_push($arr, 40);

//? remove o primeiro elemento
// array_shift($arr);

//? remove o última elemento
// array_pop($arr);

//? Transforma todas as chaves do array para lowercase
// $arr = array_change_key_case($arr, CASE_LOWER);

//? Transforma chave->valor do array em variáveis e adiciona um prefixo ao nome
// extract($arr, EXTR_PREFIX_ALL, 'extr');

//? Ignora as chaves que já existe variável com o mesmo nome
// extract($arr, EXTR_SKIP);
// echo $extr_idade . PHP_EOL;

//? Cria um array buscando pelos nomes das variáveis passadas por parâmetro
// $arr2 = compact(
//     'extr_nome',
//     'extr_idade',
//     'extr_país'
// );

//? Concatena os elementos do array com um separador.
//? array_filter filtra os valores nulos, vazios, etc...
// echo implode(' - ', array_filter($arr)) . PHP_EOL;
