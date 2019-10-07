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
  <title>修改我的資料</title>
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
 ?>
 <form class="" action="doedituserinfo.php?uid=<?php echo $uid?>" method="post">
<table>
  <tr>
    <td>會員名稱：</td>
    <td><input type="text" name="username" value="<?php echo $row['uname']?>"></td>
  </tr>
  <tr>
    <td>密碼：</td>
    <td><input type="password" name="password" value="<?php echo $row['pwd']?>"></td>
  </tr>
  <tr>
    <td>手機號碼：</td>
    <td><input type="text" name="tel" value="<?php echo $row['tel']?>"></td>
  </tr>
  <tr>
    <td>性别：</td>
    <td>
      <select class="" name="sex">
        <option value="0">女</option>
        <option value="1">男</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>電子郵箱：</td>
    <td><input type="text" name="email" value="<?php echo $row['email']?>"></td>
  </tr>
  <tr>
    <td>居家住址：</td>
    <td>
    <input type="text" name="address" value="<?php echo $row['address']?>">
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="" value="更新"></td>
  </tr>
</table>

</form>
<?php } ?>
 </p>

</div>
<div class="footer mt20">
<script type="text/javascript" src="../images/juicer.js"></script>
</body></html>
