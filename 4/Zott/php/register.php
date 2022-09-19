<?php
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $pass = md5($pass."zott");

    include('db.php');

    $mysql->query("INSERT INTO `users` (`email`, `name`, `pass`, `role`) VALUES ('$email', '$name', '$pass', 'user')");

    $mysql->close();

    header('Location: /');
?>