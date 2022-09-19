<?php
    $sum = filter_var(trim($_POST['sum']),
    FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    

    $mysql = new mysqli('localhost', 't92587bs_savefor', 'Admin1', 't92587bs_savefor');

    $mysql->query("INSERT INTO `donate` (`sum`, `login`)
    VALUES('$sum', '$login')");


    $mysql->close();

    

    header('Location: personalLK.php');
?>