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
  <p style="font-size:30px">我的購物車</p>
      <br>  <br>  <br>  <br>
      <p >
        <?php
$sql = "SELECT * FROM cart where user_id = ".$uid;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {

  echo "<br>商品名稱:".getGoodsNameById($conn,$row['goods_id'])."<br>購買數量:".$row['count']."<br>商品單價:".getGoodsPriceById($conn,$row['goods_id'])."<br>總價:". $row['count']*getGoodsPriceById($conn,$row['goods_id']);
 ?>
<hr>
 <?php
}
}
 ?> </p>
 <p style='font-size:30px'><a href="../user/payall.php?uid=<?php echo $uid?>">結帳</a></p>
 <p style='font-size:30px'><a href="../user/cleancart.php?uid=<?php echo $uid?>">清空購物車</a></p>

</div>
<div class="footer mt20">
<script type="text/javascript" src="../js/juicer.js"></script>
</body></html>
