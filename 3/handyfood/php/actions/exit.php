<?php
    setcookie('login', $user['login'], time() - 3600, '/');
    setcookie('pass', $user['pass'], time() - 3600, '/');
    setcookie('role', $user['role'], time() - 3600, '/');
    setcookie('user_id', $user['user_id'], time() - 3600, '/');
    header('Location: /');
?>