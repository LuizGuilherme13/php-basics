<?php
//? Consumindo a API do ViaCEP com cURL.

$url = "viacep.com.br/ws/$argv[1]/json/";

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_RETURNTRANSFER => true,
]);

try {
    $response = json_decode(curl_exec($curl), true);
    if (!isset($response['cep'])) {
        throw new Exception("CEP não encontrado... Verifique e tente novamente.", 404);
    }

    print_r($response);
} catch (\Exception $e) {
    echo $e->getCode(), PHP_EOL, $e->getMessage(), PHP_EOL;
}
curl_close($curl);

