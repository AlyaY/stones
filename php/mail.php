<?php
$formName = $_POST['form'];
$fio= $_POST['name'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$emailTo = 'alya.yurevich@yandex.ru'; //Сюда введите Ваш email
$body = "$fio \n\n$phone\n\n$email \n\n$adres";
$headers = "Content-Type: text/plain; charset=utf-8\r\n".'From: MySite <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $emailTo;
mail($emailTo, $fio, $body, $headers);
$emailSent = true;
?>