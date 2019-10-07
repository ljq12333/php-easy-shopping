<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  </body>
</html>
<?php
include '../conn.php';
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$tel      = $_REQUEST['tel'];
$sex      = $_REQUEST['sex'];
$email    = $_REQUEST['email'];
$address  = $_REQUEST['address'];


  $sql = "insert into user(uname,pwd,tel,sex,email,address) values('".$username."','".$password."','".$tel."','".$sex."','".$email."','".$address."')";
  if ($conn->query($sql)==TRUE) {
    echo "成功！";
  }else {
    echo "失敗！";
  }

  ?>