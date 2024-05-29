<?php
 require_once ('db.php');
$login = $_POST ["login"];
$pass = $_POST ["pass"];
$repeatpass = $_POST ["repeatpass"];
$email = $_POST ["email"];

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    echo "<script>alert('Заполните все поля'); </script>";
    require('gl.php');
}
else {
    if ($pass != $repeatpass) {
        echo "<script>alert('Пароли не совпадают'); </script>";
        require('gl.php');
    }
    else {
        $sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
        if ($con -> query($sql) === TRUE) {
            echo "<script>alert('Регистрация прошла успешно'); </script>";
            require('gl.php');
        }
        else {
            echo "Ошибка: " . $con -> error;
            require('gl.php');
        }
    }
}
