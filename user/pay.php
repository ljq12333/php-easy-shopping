<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="../js/jquery.js"></script>
  </head>
  <body>
<?php
include '../conn.php';

$uid = $_REQUEST['uid'];
$goods_id = $_REQUEST['gid'];
$count = $_REQUEST['count'];

$sql = "insert into orders(user_id,goods_id,count) values(".$uid.",".
$goods_id.",".$count.")";


if ($conn->query($sql) === TRUE) {
    echo "購買成功！正在跳轉...";
    ?>
  <script type="text/javascript">
  $(function() {
  sleep(500);
  location.href="../user/order.php?uid=<?php echo $uid ?>";
  });

  function sleep(n) { 
   var start = new Date().getTime();
   while (true) if (new Date().getTime() - start > n) break;
  }
  </script>
    <?php
  }else {
    echo "購買失敗！請返回重試！";
  }
   ?>


</body>
</html>
