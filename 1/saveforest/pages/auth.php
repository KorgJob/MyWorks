<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."qweqwe");

    $mysql = new mysqli('localhost', 't92587bs_savefor', 'Admin1', 't92587bs_savefor');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login`= '$login' AND `pass` = '$pass'");

    $user = $result->fetch_assoc();
    if(count($user) == 0) {
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, '/');
    setcookie('login', $user['login'], time() + 3600, '/');
    setcookie('pass', $user['pass'], time() + 3600, '/');
    setcookie('img', $user['img'], time() + 3600, '/');

    $mysql->close();

    header('Location: /pages/personalLK.php');
?>