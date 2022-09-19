<?php
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['surname']),
    FILTER_SANITIZE_STRING);
    $city = filter_var(trim($_POST['city']),
    FILTER_SANITIZE_STRING);
    $urban = filter_var(trim($_POST['urban']),
    FILTER_SANITIZE_STRING);
    $telnumber = filter_var(trim($_POST['telnumber']),
    FILTER_SANITIZE_STRING);
    

    $mysql = new mysqli('localhost', 't92587bs_savefor', 'Admin1', 't92587bs_savefor');

    $mysql->query("INSERT INTO `callback` (`name`, `surname`, `city`, `urban`, `telnumber`)
    VALUES('$name', '$surname', '$city', '$urban', '$telnumber')");

    $mysql->close();

    header('Location: /');
?>