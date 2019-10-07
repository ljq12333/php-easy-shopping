<?php
session_start();
include '../conn.php';
$uid=$_REQUEST['uid'];

$sql = "SELECT * FROM user where id = '".$uid."'";
$result = $conn->query($sql);

if ($result->num_rows <= 0) {

echo '請先註冊或登入！';
exit;
  }

?>
<!DOCTYPE>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>會員中心</title>
  <link rel="stylesheet" type="text/css" href="../css/general.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/general.js"></script>
  <script type="text/javascript" src="../js/carousel.js"></script>
</head>
<body>
<?php include '../header1.php'; ?>
<div class="container w1100">
      <br>  <br>  <br>  <br>
      <p style="font-size:30px">
<?php

while($row = $result->fetch_assoc()) {

if ($row['sex']==1) {
  $sexx = '男';
}else {
  $sexx = '女';
}

  echo "會員名稱：".$row['uname']
      ."<br>密碼:".$row['pwd']
      ."<br>電話號碼:".$row['tel']
      ."<br>性別:".$sexx
      ."<br>電子郵箱:".$row['email'];

}

 ?>
 </p>
 <p style='font-size:30px'><a href="../user/edituserinfo.php?uid=<?php echo $uid?>">修改資料</a></p>
<p style='font-size:30px'><a href="../user/order.php?uid=<?php echo $uid?>">我的訂單</a></p>
</div>
<div class="footer mt20">
<script type="text/javascript" src="../images/juicer.js"></script>
</body></html>
