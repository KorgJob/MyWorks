<?php
    $street = filter_var(trim($_POST['street']),
    FILTER_SANITIZE_STRING);
    $house = filter_var(trim($_POST['house']),
    FILTER_SANITIZE_STRING);
    $entrance = filter_var(trim($_POST['entrance']),
    FILTER_SANITIZE_STRING);
    $door_number = filter_var(trim($_POST['door_number']),
    FILTER_SANITIZE_STRING);

    $id = $_COOKIE['user_id'];

    include('../actions/db.php');

    $mysql->query("INSERT INTO `users_address` (`users_id`, `street`, `house`, `entrance`, `door_number`) VALUES ('$id', '$street', '$house', '$entrance', '$door_number')"); 

    $mysql->close();

    header('Location: /pages/personal.php');
?>