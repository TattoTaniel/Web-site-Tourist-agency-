<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Обратная связь</title>
</head>
<body>
<?php
if (isset($_POST['fio'])) {$fio = $_POST['fio'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['cont'])) {$cont = $_POST['cont'];}
if (isset($_POST['tour'])) {$cont = $_POST['tour'];}
if (isset($_POST['message'])) {$mess = $_POST['message'];}

$to = "lyzotatyana@mail.ru"; /*Укажите ваш адрес электоронной почты*/
$headers = "Content-type: text/plain; charset=utf-8";
$subject = "Сообщение с вашего сайта";
$mess = "Имя пославшего: $fio \n Электронный адрес: $email \n Контакты: $cont  \n Тур: $tour \n Сообщение: $message";
$send = mail ($to, $subject, $mess, $headers);
if ($send == 'true')
{
echo <p>"Забронировано. Наш специалист свяжется с вами в ближайшее время!"<p>;
echo <a href="index.html">Нажмите, чтобы вернуться на главную страницу</a>
}
else
{
echo "<p><b>Ошибка. Сообщение не отправлено!";
}
?>
</body>
</html>