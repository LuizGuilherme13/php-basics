<?php
//? Trabalhando com formulários 
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

echo $name, "</br>", $email, "</br>", $phone;

