<?php
//? Fazendo requisições HTTP com cURL.

//* GET
$response = curl_get('https://dummyjson.com/posts/1');
// echo $response['title'] . PHP_EOL;
var_dump($response);

//* POST
$payload = [
    'title' => 'Testing...',
    'userId' => 5,
];
$response = curl_post('https://dummyjson.com/posts/add', $payload);
// print_r($response);
var_dump($response);

/**
 * Faz uma requisição HTTP GET com cURL.
 * @param string $url É a url para onde será feita a requisição
 */
function curl_get(string $url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    curl_close($curl);

    return json_decode($response, true);
}

function curl_post(string $url, array $payload)
{
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => [
            'Authorization: Bearer-Token',
            'Content-Type: application/json'
        ],
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_RETURNTRANSFER => true,
    ]);
    $response = curl_exec($curl);
    curl_close($curl);
    return json_decode($response, true);
}