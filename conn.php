<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123";
$dbname = "shop";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$conn->query('set names utf8');
?>