<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$year = $_POST['year'];
$token = "6298655909:AAEhdTpcq38qNWlaOaRwh41m4RYPj6SjLHY";
$chat_id = "-961064372";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Фамилия' => $surname,
  'year:' => $year
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../index.html');
} else {
  echo "Error";
}
?>