<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kurs";
$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    die ("Connetion failed" . mysqli_connect_error());
} 
?>