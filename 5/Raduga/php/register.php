<?php
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."izgorod");

    include('db.php');

    $mysql->query("INSERT INTO `users` (`email`, `login`, `pass`, `role`) VALUES ('$email', '$login', '$pass', 'user')");

    $mysql->close();

    header('Location: /');
?>