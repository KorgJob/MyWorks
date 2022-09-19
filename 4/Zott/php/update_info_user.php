<?php
    
    $mysql = new mysqli('localhost', 'root', '', 'shopz');

    $user_id = $_POST['user_id'];
    $name_info = $_POST['name_info'];
    $surname_info = $_POST['surname_info'];
    $city_info = $_POST['city_info'];
    $address_info = $_POST['address_info'];
    $index_info = $_POST['index_info'];

    $result = $mysql->query("UPDATE `info_users` SET `name_info` = '$name_info', `surname_info` = '$surname_info', `city_info` = '$city_info',`address_info` = '$address_info', `index_info` = '$index_info' WHERE `user_id` = '$user_id'");
    
    header('Location: /pages/personal.php');
?>