<?php
    $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']),
        FILTER_SANITIZE_STRING);

    $pass = md5($pass."mh;dlmhlre123");

    $mySql = new mysqli('localhost', 'root', 'root', 'register_bd');

    $result = $mySql -> query("SELECT * FROM users WHERE login = '$login' AND pass = '$pass'");
    $user = $result -> fetch_assoc();
    if (count($user) == 0){
        echo "Username or password not found!";
        exit();
    }


    setcookie('user', $user['login'], time() + 3600, "/");
    setcookie('name', $user['name'], time() + 3600, "/");
    setcookie('surname', $user['surname'], time() + 3600, "/");
    setcookie('email', $user['email'], time() + 3600, "/");

    $mySql -> close();

header('location: /');
?>
