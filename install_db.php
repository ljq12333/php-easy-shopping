<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>安裝資料庫</title>
  </head>
  <body>

  </body>
</html>
<?php

$_sql = file_get_contents('shop_navicat.sql');

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";

$_arr = explode(';', $_sql);
$_mysqli = new mysqli($DB_HOST,$DB_USER,$DB_PASS);

if (mysqli_connect_errno()) {
    exit('連接資料庫失敗');
}

$_mysqli->query("CREATE DATABASE IF NOT EXISTS shop DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;");
$_mysqli->query("USE shop");


foreach ($_arr as $_value) {
    $_mysqli->query($_value.';');
}
echo '執行成功！';
$_mysqli->close();
$_mysqli = null;
