<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['message'])) {$message = $_POST['message'];}
// if (isset($_POST['email'])) {$email = $_POST['email'];}

/* Сюда впишите свою эл. почту */
$address = "tour-tour24@yandex.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Форма сертификат\nИмя: $name \nТелефон: $phone \nСообщение: $message"; //\nE-mail: $email\nСообщение: $message

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Форма сертификат 1000р Tour-tour24'; //сабж
$email='Tour-tour24'; // от кого
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
