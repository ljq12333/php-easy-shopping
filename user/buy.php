<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<?php
session_start();
include '../conn.php';

$uid=$_REQUEST['uid'];
$goods_id = $_REQUEST['gid'];
$count = $_REQUEST['count'];

$sql = "SELECT * FROM user where id = '".$uid."'";
$result = $conn->query($sql);

if ($result->num_rows <= 0) {

echo '請先註冊或登入！';
exit;
  }

?>


<meta name="verydows-baseurl" content="">
<meta name="keywords" content="">
<meta name="description" content="">
<title>我的訂單</title>
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
        <p style='font-size:20px'>訂單詳情：</p><br>
      <p style='font-size:30px'>

<?php
$sql = "SELECT * FROM goods where id = '".$goods_id."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
  echo "商品:".$row['goods_name'];
  echo "<br>價格:".$row['price'].'元';
  echo "<br>數量:".$count;
  echo "<br><h3 style='font-size:25px;color:red'>總價:NT.".$count*$row['price'];
}

}
 ?>/元</h3>
 </p>
<p style='font-size:30px'>
  <a href="../user/pay.php?uid=<?php echo $uid?>&gid=<?php echo $goods_id?>&count=<?php echo $count?>">
    付款 購買</a></p>

</div>
<div class="footer mt20">
<script type="text/javascript" src="../js/juicer.js"></script>
</body></html>
