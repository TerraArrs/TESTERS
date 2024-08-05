<?php
$ip = $_SERVER['REMOTE_ADDR'];
$name = $_POST['Name'];
$AGE = $_POST['Age'];
$ST = $_POST['TS'];
$token = "6390919130:AAH4zu4wk9wGRIoOB91O4OqQ1fQgmfVhjZI";
$chat_id = "987482803";
$arr = array(
  'Имя: ' => $name,
  'Возраст: ' => $AGE,
  'Пожелание: ' => $ST,
  'Ip: ' => $ip,
  
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

fopen("http://phu/","r");  

?>