<?php
        $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
        $phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);
        $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
    
        $mysql = new mysqli('localhost','root','','purebeauty');

    
        $mysql->query("INSERT INTO `feedback` (`name`, `phone`, `email`) VALUES('$name', '$phone', '$email')");

        $mysql->close();
    
        header("Location: ".$_SERVER['HTTP_REFERER']);
?>