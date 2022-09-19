<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
    $img = filter_var(trim($_POST['img']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."qweqwe");

    $mysql = new mysqli('localhost', 't92587bs_savefor', 'Admin1', 't92587bs_savefor');

    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`, `img`)
    VALUES('$login', '$pass', '$name', '$img')");

    $mysql->close();

    header('Location: /');
?>