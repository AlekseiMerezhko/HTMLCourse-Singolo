<?php


$recepient = "my_bus@mail.ua";
$sitename = "My-bus";
$name = trim($_POST["bcname"]);
$phone = trim($_POST["bcphone"]);
$subject = "Тема Сообщения";
$subject = "=?utf-8?B?".base64_encode($subject)."?=";
$city1 = trim($_POST["city1"]);
$brdate1 = trim($_POST["brdate1"]);
$colvopers = trim($_POST["colvopers"]);
$city2 = trim($_POST["city2"]);
$brdate2 = trim($_POST["brdate2"]);
$brname = trim($_POST["brname"]);
$brnumber = trim($_POST["brnumber"]);
$text = trim($_POST["text"]);
$to = "my_bus@mail.ua"; 
$message = "Имя: $name \nНомер телефона: $phone ";
$brmessage = "Имя: $brname \nНомер телефона: $brnumber \nКоментарий: $text \nГород отправления: $city1 \nТуда: $brdate1 \n Кол-во пассажиров: $colvopers \nГород назначения : $city2 \n Обратно: $brdate2";
$brpagetitle = "Бронирование мест с сайта \"$sitename\"";

mail($to, $subject, $brpagetitle, $brmessage, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");


?>