<?php
session_start();
include '../conn.php';
$uid=$_REQUEST['uid'];

$sql = "SELECT * FROM user where id = '".$uid."'";
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
  <title>上傳大頭貼</title>
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
      <form action="doupload.php?uid=<?php echo $uid;?>" name="form" method="post" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" name="submit" value="上傳" />
      </form>

</div>
<div class="footer mt20">
<script type="text/javascript" src="../js/juicer.js"></script>
</body></html>
