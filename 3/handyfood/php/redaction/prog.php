<?php
    $phone = filter_var(trim($_POST['phone']),
    FILTER_SANITIZE_STRING);
    $tab_day = filter_var(trim($_POST['tab_day']),
    FILTER_SANITIZE_STRING);

    include('../actions/db.php');

    $mysql->query("INSERT INTO `form_prog` (`phone`, `tab_day`) VALUES ('$phone', '$tab_day')"); 

    $mysql->close();

    header('Location: /');
?>