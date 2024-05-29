<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty($login || empty($pass))) {
    echo "<script>alert('Заполните все поля');</script> ";
    require('gl.php');
}
else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' and pass = '$pass'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<script>alert('Добро пожаловать');</script> " . $row ['login'];
        }
        require('index.php');
    }
    else {
        echo "<script>alert('Нет такого пользователя');</script> ";
        require('gl.php');
    }
}