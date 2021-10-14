<?php
    setcookie('user', $user['name'], time() - 3600, "/");
    setcookie('name', $user['name'], time() - 3600, "/");
    setcookie('surname', $user['surname'], time() - 3600, "/");
    setcookie('email', $user['email'], time() - 3600, "/");
    header('location: /');
?>
