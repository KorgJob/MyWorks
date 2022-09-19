<?php
    $mysql = new mysqli('localhost', 'root', '', 'handy');

    $id_prog = $_GET['id_prog'];
    
    $result = $mysql->query("DELETE FROM `form_prog` WHERE `form_prog`.`id_prog` = '$id_prog'");

    header('Location: /pages/personal.php');
?>