<?php
    $mysql = new mysqli('localhost', 'root', '', 'izgorodok');

    $order_id = $_GET['order_id'];
    $order_number = $_GET['order_number'];
    
    $result = $mysql->query("DELETE FROM `orders` WHERE `orders`.`order_id` = '$order_id'");

    header('Location: /pages/personal.php');
?>