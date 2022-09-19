<?php
    $name_info = filter_var(trim($_POST['name_info']),
    FILTER_SANITIZE_STRING);
    $surname_info = filter_var(trim($_POST['surname_info']),
    FILTER_SANITIZE_STRING);
    $city_info = filter_var(trim($_POST['city_info']),
    FILTER_SANITIZE_STRING);
    $address_info = filter_var(trim($_POST['address_info']),
    FILTER_SANITIZE_STRING);
    $index_info = filter_var(trim($_POST['index_info']),
    FILTER_SANITIZE_STRING);
    $user_id = $_COOKIE['id'];

    include('db.php');

    $mysql->query("INSERT INTO `info_users` (`name_info`, `surname_info`, `city_info`, `address_info`, `index_info`, `user_id`) VALUES ('$name_info', '$surname_info', '$city_info', '$address_info', '$index_info', '$user_id')");

    $mysql->close();

    header('Location: /pages/cart.php');
?>