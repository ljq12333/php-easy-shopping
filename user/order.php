<?php
session_start();
include '../conn.php';
include 'function.php';
if (!isset($_REQUEST['uid'])) {
  echo "無法訪問該網站！";
  exit;
}
$uid=$_REQUEST['uid'];

$sql = "SELECT * FROM user where id = ".$uid;
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
<table width="688" border="1" class="table-head">

<?php
$sql = "SELECT * FROM orders where user_id = ".$uid;
$result = $conn->query($sql);
if (isset($result->num_rows) && ($result->num_rows > 0)) {
while($row = $result->fetch_assoc()) {

?>
	    <div class="header row">

<tr>
  <td width="89" style="font-size: 18px">訂單編號</td>

  <td width="87" style="font-size: 18px">商品名稱</td>

  <td width="66" style="font-size: 18px">數量</td>

  <td width="63" style="font-size: 18px">單價</td>

  <td width="63" style="font-size: 18px">總價</td>

  <td width="63" style="font-size: 18px">訂單狀態</td>
</tr></div>

	<tr>

  <td width="87"><?php echo $row['id']; ?></td>

  <td width="63"><?php echo getGoodsNameById($conn,$row['goods_id'])?></td>

  <td width="36"><?php echo $row['count']?></td>

  <td width="51"><?php echo getGoodsPriceById($conn,$row['goods_id']); ?></td>

  <td width="50"><?php echo  $row['count']*getGoodsPriceById($conn,$row['goods_id'])?></td>

</tr>

<?php

}
}else{
  echo "目前無訂單";
}
 ?>
</table>

</div>
<?php include '../footer.php'; ?>
