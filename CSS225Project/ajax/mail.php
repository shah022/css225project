<?php
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$email = $_POST['email'];

	$message = "Имя: ".$name." Фамилия: ".$surname." Телефон: ".$phone." Город: ".$city." Почта: ".$email;

	$subject="=?utf-8?B?".base64_encode("Сообщение с сайта")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

	$success = mail("siteadmin@mail.ru", $subject, $message, $headers);
	echo $success;
?>