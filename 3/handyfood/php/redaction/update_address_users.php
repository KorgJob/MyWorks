<?php
    $mysql = new mysqli('localhost', 'root', '', 'handy');

    $user_id = $_COOKIE['user_id'];
    $street = $_POST['street'];
    $house = $_POST['house'];
    $entrance = $_POST['entrance'];
    $door_number = $_POST['door_number'];

    $result = $mysql->query("UPDATE `users_address` SET `street` = '$street', `house` = '$house', `entrance` = '$entrance', `door_number` = '$door_number' WHERE `users_id` = '$user_id'");
    
    header('Location: /pages/personal.php');
?>