<?php
//? Manipulando JSON

$obj = new stdClass;
$obj->name = 'Luíz';
$obj->age = 22;
$obj->gender = 'M';
$obj->hmtl = '<title>PHP</title>';

print_r($obj);

print_r(json_encode($obj, JSON_PRETTY_PRINT |
    JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG));

echo PHP_EOL;
