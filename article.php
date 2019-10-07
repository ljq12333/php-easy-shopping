<!DOCTYPE>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF8">
<?php
session_start();
include 'conn.php';
if (isset($_REQUEST['wzid'])) {
  $wzid = $_REQUEST['wzid'];
}else {
  echo "無法訪問該網頁";
}
?>
<title>文章宣傳</title>
<link rel="stylesheet" type="text/css" href="./css/general.css">
<link rel="stylesheet" type="text/css" href="./css/index.css">
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/general.js"></script>
<script type="text/javascript" src="./js/carousel.js"></script>
</head>
<body>
<?php include 'header.php'; ?>
<div class="container w1100">

      <br>  <br>  <br>  <br>
<?php
$sql = "select * from wenzhang where id = ".$wzid;
$result = $conn->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()) {
      echo "<p style='font-size:30px'>".$row['title']."</p><br>";
      echo "<br>作者：".$row['author']." 時間:".$row['time'];
      echo "<br><br><br><p style='font-size:15px'>".$row['content']."</p>";
  }
}
 ?>
</div>
<?php
include 'db_close.php';
 ?>
