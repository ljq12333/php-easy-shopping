
<?php
session_start();
include '../conn.php';
include 'function.php';

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
  <title>愛的小鋪</title>
  <link rel="stylesheet" type="text/css" href="../css/general.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/general.js"></script>
  <script type="text/javascript" src="../js/carousel.js"></script>
</head>
<body>
<?php include '../header1.php'; ?>
<div class="container w1100">
  <p style="font-size:30px">選擇您的支付方式：</p>
      <br>  <br>  <br>  <br>
      <p >
<select class="" name="pay_method">


        <?php
$sql = "SELECT * FROM pay ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
?>
<option value="<?php echo $row['id']?>"><?php
  echo $row['pay_method'];
 ?></option>

<hr>
 <?php
}
}
 ?> </select></p><br>
 <p style='font-size:30px'><a href="../user/paysuccess.php?uid=<?php echo $uid?>">支付</a></p>


</div>
<div class="footer mt20">
<script type="text/javascript" src="../js/juicer.js"></script>
</body></html>
