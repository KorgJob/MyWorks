<?php
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."izgorod");

    include('db.php');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login`= '$login' AND `pass` = '$pass'");

    $authusers = $result->fetch_assoc();
    if(count($authusers) == 0) {
        header('Location: /pages/404.php');
        exit();
    }

    setcookie('id', $authusers['id'], time() + 3600, '/');
    setcookie('login', $authusers['login'], time() + 3600, '/');
    setcookie('pass', $authusers['pass'], time() + 3600, '/');
    setcookie('role', $authusers['role'], time() + 3600, '/');

    $mysql->close();

    header('Location: /');
?>