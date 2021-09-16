<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['whatsapp'])) {$whatsapp = $_POST['whatsapp'];}
if (isset($_POST['telegram'])) {$telegram = $_POST['telegram'];}
if (isset($_POST['mail'])) {$mail = $_POST['mail'];}

/* Сюда впишите свою эл. почту */
$address = "arhipmen@gmail.com";

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Подписка на рассылку\nИмя: $name \nТелефон: $phone" \nE-mail: $email\nWhatsapp: $whatsapp\nTelegram: $telegram\nПочта: $mail; 

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Подписка на рассылку с сайта Tour-tour24'; //сабж
$email='Tour-tour24'; // от кого
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
