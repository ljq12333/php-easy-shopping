<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>清空購物車</title>
    <script src="../js/jquery.js"></script>
  </head>
  <body>

<?php
include '../conn.php';

$uid = $_REQUEST['uid'];
$sql = "delete from cart where user_id = ".$uid;
if ($conn->query($sql)) {
  echo "購物車清空成功！正在跳轉...";
  ?>
  <script type="text/javascript">
	  //跳廣告
  $(function() {
  sleep(500);
  location.href="../user/cart.php?uid=<?php echo $uid ?>";
  });

  function sleep(n) { 
   var start = new Date().getTime();
   while (true) if (new Date().getTime() - start > n) break;
  }
  </script>
  <?php
}else {
  echo "清空購物車失敗！";
}

 ?>
</body>
</html>
