<?php
    $mysql = new mysqli('localhost', 'root', '', 'handy');

    $user_id = $_COOKIE['user_id'];
    $user_name = $_POST['user_name'];
    $user_surname = $_POST['user_surname'];
    $user_date = $_POST['user_date'];
    $phone = $_POST['phone'];

    $result = $mysql->query("UPDATE `users_info` SET `user_name` = '$user_name', `user_surname` = '$user_surname', `user_date` = '$user_date', `phone` = '$phone' WHERE `users_id` = '$user_id'");
    
    header('Location: /pages/personal.php');
?>