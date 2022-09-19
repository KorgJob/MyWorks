<?php
    setcookie('user', $user['login'], time() - 3600, "/");
    setcookie('role', $user['role'], time() - 3600, "/");
    setcookie('email',$user['email'], time() - 3600, "/");
    setcookie('id',$user['id'], time() - 3600, "/");

    header("Location: ".$_SERVER['HTTP_REFERER']);
?>