<?php
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."handy");

    include('db.php');

    $mysql->query("INSERT INTO `users` (`name`, `login`, `email`, `pass`, `role`) VALUES ('$name', '$login', '$email', '$pass', 1)"); 

    $mysql->close();

    header('Location: /');
?>