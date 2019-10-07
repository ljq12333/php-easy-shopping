<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <script type="text/javascript" src="./js/jquery.js"></script>
</head>
<body>
<?php
include '../conn.php';

$advsname = $_REQUEST['advsname'];
$keywords = $_REQUEST['keywords'];
$picture  = $_REQUEST['picture'];
$link     = $_REQUEST['link'];

$sql = "insert into adv(name,keywords,picture,link) values('".$advsname."','".$keywords."','".$picture."','".$link."')";
if ($conn->query($sql)== TRUE) {
  echo "添加廣告成功！正在跳轉...";
  ?>
  <script type="text/javascript">
  $(function() {
  sleep(500);
  location.href="../admin/advlist.php";
  });

  function sleep(n) { 
   var start = new Date().getTime();
   while (true) if (new Date().getTime() - start > n) break;
  }
  </script>
  <?php
}else {
  echo "添加失敗請重試！";
}

  ?>

  </body>
</html>
