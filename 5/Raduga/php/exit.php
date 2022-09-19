<?php
    setcookie('id', $authusers['id'], time() - 3600, '/');
    setcookie('login', $authusers['login'], time() - 3600, '/');
    setcookie('pass', $authusers['pass'], time() - 3600, '/');
    setcookie('role', $authusers['role'], time() - 3600, '/');
    header('Location: /');
?>