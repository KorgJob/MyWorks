<?php
    include('db.php');

    $id = $_GET['user_id'];
    
    $result = $mysql->query("DELETE FROM `info_users` WHERE `info_users`.`user_id` = '$id'");

    header('Location: /pages/personal.php');
?>