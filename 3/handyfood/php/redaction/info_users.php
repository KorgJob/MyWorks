<?php
    $user_name = filter_var(trim($_POST['user_name']),
    FILTER_SANITIZE_STRING);
    $user_surname = filter_var(trim($_POST['user_surname']),
    FILTER_SANITIZE_STRING);
    $user_date = filter_var(trim($_POST['user_date']),
    FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']),
    FILTER_SANITIZE_STRING);

    $id = $_COOKIE['user_id'];

    include('../actions/db.php');

    $mysql->query("INSERT INTO `users_info` (`users_id`, `user_name`, `user_surname`, `user_date`, `phone`) VALUES ('$id', '$user_name', '$user_surname', '$user_date', '$phone')"); 

    $mysql->close();

    header('Location: /pages/personal.php');
?>