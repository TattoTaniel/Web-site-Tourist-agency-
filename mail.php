<?php


    $fio = $_POST['fio'];
    $email = $_POST['email'];
    $cont = $_POST['cont'];
    $mess = $_POST['message'];
    
	// Формируем массив для JSON ответа
    $result = array(
    	'fio' => $fio,
        'email' => $email,
        'cont' => $cont,
        'message' => $mess
    ); 


    $to = "lyzotatyana@mail.ru"; /*Укажите ваш адрес электоронной почты*/
    $headers = "Content-type: text/plain; charset=utf-8";
    $subject = "Сообщение с вашего сайта";
    $message = "Имя пославшего: $fio \n Электронный адрес: $email \n Контакты: $cont \n Сообщение: $mess";
    $send = mail($to, $subject, $message, $headers);
    if ($send == 'true')
    {
    echo "Спасибо. Ваше сообщение будет передано специалисту!";
    }
    else
    {
    echo "Ошибка. Сообщение не отправлено!";
    }