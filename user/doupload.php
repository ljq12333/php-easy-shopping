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
      <?php
      $file = $_FILES['file'];
      $name = $file['name'];
      $type = strtolower(substr($name,strrpos($name,'.')+1)); //轉成小寫後綴名
      $allow_type = array('jpg','jpeg','gif','png'); //允許上傳的類型
      if(!in_array($type, $allow_type)){
        //如果不允許
        return ;
      }
      if(!is_uploaded_file($file['tmp_name'])){
        return ;
      }
      $upload_path = "../user/touxiang"; //頭貼放的路徑
      if(move_uploaded_file($file['tmp_name'],$upload_path.$file['name'])){
        if (updateAvatar($conn,$uid,$name)) {
            echo "頭貼上傳成功！";
            exit;
        }
        echo "頭貼上傳失敗!";
        exit;
      }else{
        echo "頭貼上傳失敗!";
      }
?>
</div>
<?php include '../footer.php'; ?>
