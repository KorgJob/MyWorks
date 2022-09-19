<?php
    
    $mysql = new mysqli('localhost', 't92587bs_savefor', 'Admin1', 't92587bs_savefor');

    $id = $_POST['id'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];
    

    $result = $mysql->query("UPDATE `users` SET `login` = '$login', `pass` = '$pass', `name` = '$name' WHERE `id` = '$id'");
    
    header('Location: ../../personalLK.php');
?>