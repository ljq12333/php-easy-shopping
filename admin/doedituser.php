<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>更新結果</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <link href="./css/navbar-fixed-top.css" rel="stylesheet">
    <script type="text/javascript" src="./js/jquery.js">

    </script>
  </head>
  <body>

<?php
include '../conn.php';

$uid = $_REQUEST['uid'];

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$tel      = $_REQUEST['tel'];
$sex      = $_REQUEST['sex'];
$email    = $_REQUEST['email'];
$address  = $_REQUEST['address'];

$sql = "update user set uname = '".$username."',pwd = '".$password."',tel = '".$tel."',sex = '".$sex."',email = '".$email."',address = '".$address."' where id = ".$uid;

if ($conn->query($sql)) {
  echo "更新會員資料成功！正在跳轉...";
  ?>
  <script type="text/javascript">
    $(function() {
      sleep(500);
      location.href="../admin/userlist.php";
    });

    function sleep(n) {
           var start = new Date().getTime();
           while (true) if (new Date().getTime() - start > n) break;
       }
  </script>
  <?php
}else {
 echo "更新會員資料失敗，請重試！error:update goods_info error!";
}?>
	</body>
</html>
