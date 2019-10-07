
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
else{
  $sql = "select * from cart where user_id = '".$uid."'";
  $result = $conn->query($sql);
  if ($result->num_rows>0){
  while($row = $result->fetch_assoc()) {
    $order_insert =sprintf("insert into orders(user_id, goods_id, count, status) values(%s, %s, %s, '%s')", $uid, $row["goods_id"], $row["count"], "待出貨");
    $conn->query($order_insert);
  }
  $cart_delete = "delete from cart where user_id = '".$uid."'";
  $conn->query($cart_delete);
  }
  else{
    echo "购物车为空";
    exit;
  }
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
<br>
<br>
<br>
支付成功！
</div>
<div class="footer mt20">
<script type="text/javascript" src="../js/juicer.js"></script>
</body></html>
