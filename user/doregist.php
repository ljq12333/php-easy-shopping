<!DOCTYPE>
<html >
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
include '../conn.php';

if (!isset($_POST['username'])) {
  echo "請填寫會員名！";
  exit;
}
if (!isset($_POST['password'])) {
  echo "請填寫密碼！";
  exit;
}
if (!isset($_POST['tel'])) {
  echo "請填寫手機號碼！";
  exit;
}
if (!isset($_POST['email'])) {
  echo "請填寫電子郵箱！";
  exit;
}
if (!isset($_POST['address'])) {
  echo "請填寫居家住址！";
  exit;
}
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$tel = $_REQUEST['tel'];
$sex = $_REQUEST['sex'];
$birthday = $_REQUEST['birthday'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
?>

<title>用戶註冊</title>
<link rel="stylesheet" type="text/css" href="../css/general.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/general.js"></script>

</head>
<body>
<div class="header">
  <div class="w900 mt30 cut">
    <div class="logo"><a href="#"><img src="../images/logo.gif" width="250" height="50
    "></a></div>
  </div>
</div>
<div class="container w900 mt20">
<div class="container w900 mt20">
  <div class="wbox cut">
    <div class="login-banner fl cut"></div>

<?php
$sql = "INSERT INTO user(uname,pwd,tel,sex,birthday,email,address) VALUES('".$username."','".$password."','".$tel."','".$sex."','".$birthday."','".$email."','".$address."')";
$checkout_name =sprintf("select * from user where uname=%s", $username);
$result = $conn->query($checkout_name);
if (mysqli_num_rows($result)>0){
  echo "该账户已存在";
}
else{
if ($conn->query($sql) === TRUE) {
?>
註冊成功，請
<a href="../user/login.php">登入</a>！
<?php
} else {
  ?>
 註冊失敗，請重新
  <a href="../user/regist.php">註冊</a>！
  <?php
}

$conn->close();
}
 ?>

  </div>
</div>
<div class="cl"></div>
<div class="footer mt20">
  <div class="links radius4 mt20">
      </div>
</div>
<script type="text/javascript" src="../js/md5.js"></script>


</body></html>
