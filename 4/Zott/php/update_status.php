<?php
    
    $mysql = new mysqli('localhost', 'root', '', 'shopz');

    $order_status = $_POST['order_status'];
    $order = $_POST['order_id'];

    $result = $mysql->query("UPDATE `orders` SET `order_status` = '$order_status' WHERE `order_id` = '$order'");
    
    header('Location: /pages/personal.php');
?>