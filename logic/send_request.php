<?php

    require_once 'db.php';

    if( !empty($_POST['fio']) && !empty($_POST['email']) && !empty($_POST['cont']) && !empty($_POST['req_descr']) && !empty($_POST['fl']) && !empty($_POST['tour'])) {
        $req_fio = $_POST['fio'];
        $req_email = $_POST['email'];
        $req_phone = $_POST['cont'];
        $req_descr = $_POST['req_descr'];
        $req_tour_name = $_POST['fl'];
        $req_ts_name = $_POST['tour'];
    } else {
        die ('Пожалуйста заполните все поля');
    }

    try {

        $pdo->beginTransaction();

        $sql = 'INSERT INTO res(fio, email, phone, descr, tour_name, ts_name) VALUES(:fio, :email, :phone, :descr, :tour_name, :ts_name)';
        $params = [
            ':fio' => $req_fio,
            ':email' => $req_email,
            ':phone' => $req_phone,
            ':descr' => $req_descr,
            ':tour_name' => $req_tour_name,
            ':ts_name' => $req_ts_name
        ];

        $stmt_cat = $pdo->prepare($sql);
        $stmt_cat->execute($params);

        $pdo->commit();
        echo 'Новая запись успешно добавлена';

    } catch(PDOException $e) {

        echo 'Во время добавления записи произошла ошибка: ' . $e->getMessage();
        $pdo->rollBack();

    }