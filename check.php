<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $surName = filter_var(trim($_POST['surName']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),
    FILTER_SANITIZE_STRING);

    if (mb_strlen($login) < 3 || mb_strlen($login) > 30){
        echo "Invalid login length";
        exit();
    } else if(mb_strlen($name) < 3 || mb_strlen($name) > 90) {
        echo "Invalid name length";
        exit();
    } else if(mb_strlen($surName) < 3 || mb_strlen($surName) > 90) {
        echo "Invalid surname length";
        exit();
    } else if(mb_strlen($pass) < 6 || mb_strlen($pass) > 90) {
        echo "Invalid password length (6 to 90)";
        exit();
    } else if(mb_strlen($email) < 3 || mb_strlen($email) > 90) {
        echo "Invalid email length";
        exit();
    }

    $pass = md5($pass."mh;dlmhlre123");

    $mySql = new mysqli('localhost', 'root', 'root', 'register_bd');

    $mySql -> query("INSERT INTO users (name, surname, login, pass, email)  VALUES('$name', '$surName', '$login', '$pass', '$email') ");

    $mySql -> close();

    header('location: /');
?>


