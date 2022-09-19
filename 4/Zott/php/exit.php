<?php
    setcookie('user', $user['email'], time() - 3600, '/');
    setcookie('pass', $user['pass'], time() - 3600, '/');
    setcookie('role', $user['role'], time() - 3600, '/');
    setcookie('id', $user['id'], time() - 3600, '/');
    header('Location: /');
?>