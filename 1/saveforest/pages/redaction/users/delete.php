<?php
    $mysql = new mysqli('localhost', 't92587bs_savefor', 'Admin1', 't92587bs_savefor');

    $id = $_GET['id'];
    
    $result = $mysql->query("DELETE FROM `users` WHERE `users`.`id` = '$id'");

    header('Location: ../../personalLK.php');
?>