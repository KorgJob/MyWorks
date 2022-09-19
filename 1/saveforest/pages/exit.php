<?php
    setcookie('user', $user['name'], time() - 3600, '/');
    setcookie('login', $user['login'], time() - 3600, '/');
    setcookie('pass', $user['pass'], time() - 3600, '/');
    setcookie('img', $user['img'], time() - 3600, '/');
    header('Location: /');
?>