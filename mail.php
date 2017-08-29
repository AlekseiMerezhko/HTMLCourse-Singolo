<?php

$recepient = "merezhko.lesha@mail.ru";
$sitename = "Singolo";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$text = trim($_POST["text"]);
$subject = trim($_POST["subject"]);
$message = "Имя: $name \nE-mail $email \nТема: $subject \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");