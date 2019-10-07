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
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$tel      = $_REQUEST['tel'];
$sex      = $_REQUEST['sex'];
$email    = $_REQUEST['email'];
$address  = $_REQUEST['address'];
$sql = "update user set uname = '".$username."',pwd = '".$password."',tel = '".$tel."',sex = '".$sex."',email = '".$email."',address = '".$address."' where id = ".$uid;

if ($result = $conn->query($sql)) {
   echo "";
  ?>
  <script type="text/javascript">
  $(function() {
    alert("更新成功！正在跳轉...");
    sleep(300);
    location.href="center.php?uid=<?php echo $uid?>";
  });

  function sleep(n) {
         var start = new Date().getTime();
         while (true) if (new Date().getTime() - start > n) break;
     }
  </script>
  <?php
}else {
  echo "更新失敗！";
}
?>

</body>
</html>
