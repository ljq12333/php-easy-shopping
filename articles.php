<?php
session_start();
include 'conn.php';
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
<title>文章</title>
<link rel="stylesheet" type="text/css" href="../shopping_web/css/general.css">
<link rel="stylesheet" type="text/css" href="../shopping_web/css/index.css">
<script type="text/javascript" src="../shopping_web/js/jquery.js"></script>
<script type="text/javascript" src="../shopping_web/js/general.js"></script>
<script type="text/javascript" src="../shopping_web/js/carousel.js"></script>
</head>
<body>
<?php include 'header.php'; ?>
	
<div class="container w1100">

      <br>  <br>  <br>  <br>
<ul>
<?php
$sql = "select * from wenzhang";
$result = $conn->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()) {
    ?>
    <li><a style = "font-size:19px"> <a href="../shopping_web/article.php?wzid=<?php echo $row['id'];
      if (isset($_REQUEST['uid'])) {
        echo "&uid=".$_REQUEST['uid'].">";
      }
      echo $row['title']."  作者：".$row['author']." 時間:".$row['time'];
      ?>">
		</a></li><br>
<?php
  }
}?>
</ul>
</div>
<?php
include 'db_close.php';
 ?>
