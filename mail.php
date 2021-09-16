<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['name'])) {$name = $_POST['name'];}
// if (isset($_POST['email'])) {$email = $_POST['email'];}
// if (isset($_POST['message'])) {$message = $_POST['message'];}

/* Сюда впишите свою эл. почту */
$address = "arhipmen@gmail.com";

/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "Тема: Запрос обратного звонка\nИмя: $name \nТелефон: $phone"; //\nE-mail: $email\nСообщение: $message

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Задать вопрос с сайта Tour-tour24'; //сабж
$email='Tour-tour24'; // от кого
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
