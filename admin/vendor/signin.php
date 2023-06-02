<?php

    session_start();
    require_once 'connect.php'; // подключение БД

    // получение данных из формы авторизации
    $login = $_POST['login'];
    // $password = md5($_POST['password']);
    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'"); // запрос в БД
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];

        header('Location: ../admin_main.php'); // переход на главный раздел

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль'; // сообщение
        header('Location: ../autorization.php'); // переход на страницу авторизации
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
