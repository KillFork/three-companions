<?php

$recepient = "tri-tovarischa_bot@mail.ru";
$sitename = "Три товарища";

$name = htmlspecialchars(strip_tags(stripslashes(trim($_POST["name"]))));
$phone = htmlspecialchars(strip_tags(stripslashes(trim($_POST["phone"]))));
$time = htmlspecialchars(strip_tags(stripslashes(trim($_POST["time"]))));

$message = "Имя: $name \nТелефон: $phone \nВремя: $time";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>﻿