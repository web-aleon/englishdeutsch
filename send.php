<?php

	$recepient = "web-a.leon@ukr.net";
	$sitename = "English & Deutch club";

	$name = trim($_POST["name"]);
	$phone = trim($_POST["phone"]);
	$text = trim($_POST["text"]);
	$email = trim($_POST["email"]);
	$message = "Имя: $name \nТелефон: $phone \nEmail: $email \nТекст: $text";

	$pagetitle = "Новая заявка с сайта \"$sitename\"";
	mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>