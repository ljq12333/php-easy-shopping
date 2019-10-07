<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <link href="./css/navbar-fixed-top.css" rel="stylesheet">
  <script type="text/javascript" src="../js/jquery.js">

  </script>
</head>
<body>
<?php
include '../conn.php';

$gid = $_REQUEST['gid'];

$goods_name  = $_REQUEST['goodsname'];
$type        = $_REQUEST['type'];
$old_price   = $_REQUEST['oldprice'];
$price       = $_REQUEST['price'];
$desc =  $_REQUEST['desc'];
$picture = $_REQUEST['picture'];

$sql = "update goods set goods_name = '".$goods_name."',type = '".$type."',old_price = ".$old_price.",description = '".$desc ."',picture='".$picture."' where id = ".$gid;

if ($conn->query($sql)) {
  echo "更新商品成功！正在跳轉...";
  ?>
  <script type="text/javascript">
    $(function() {
      sleep(500);
      location.href="../admin/goodslist.php";
    });

    function sleep(n) { 
           var start = new Date().getTime();
           while (true) if (new Date().getTime() - start > n) break;
       }
  </script>
  <?php
}else {
 echo "更新商品失敗，請重試！error:update goods_info error!";
}
 ?>
</body>
</html>
