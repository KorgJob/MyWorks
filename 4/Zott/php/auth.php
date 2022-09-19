<?php
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."zott");

    include('db.php');

    $result = $mysql->query("SELECT * FROM `users` WHERE `email`= '$email' AND `pass` = '$pass'");

    $user = $result->fetch_assoc();
    if(count($user) == 0) {
        header('Location: /pages/404.php');
        exit();
    }

    setcookie('user', $user['email'], time() + 3600, '/');
    setcookie('pass', $user['pass'], time() + 3600, '/');
    setcookie('role', $user['role'], time() + 3600, '/');
    setcookie('id', $user['id'], time() + 3600, '/');

    $mysql->close();

    header('Location: /');
?>