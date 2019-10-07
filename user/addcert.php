<?php
session_start();
include '../conn.php';
if (!isset($_REQUEST['uid'])||!isset($_REQUEST['gid'])||!isset($_REQUEST['count'])) {
  echo "無法訪問該網站！";
  exit;
}
$uid=$_REQUEST['uid'];
$gid = $_REQUEST['gid'];
$count = $_REQUEST['count'];
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
<?php include '../header.php'; ?>
<div class="container w1100">

      <br>  <br>  <br>  <br>
      <?php
      $sql = "INSERT INTO cart(user_id,goods_id,count) VALUES(".$uid.",".$gid.",".$count.")";

      if ($conn->query($sql) === TRUE) {
          echo "成功添加到購物車！正在跳轉回原頁面...";
          ?>
          <script type="text/javascript">
          $(function() {
          sleep(500);
          location.href="../goods.php?id=<?php echo $gid?>&uid=<?php echo $uid ?>";
          });

          function sleep(n) { 
           var start = new Date().getTime();
           while (true) if (new Date().getTime() - start > n) break;
          }
          </script>
          <?php
      }else {
        echo "添加購物車失敗！請檢查是否填寫商品數量！";
      }
?>
</div>
<?php include '../footer.php'; ?>
