<?php
session_start();
include 'conn.php';
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>搜尋商品</title>
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
if (isset($_REQUEST['kw'])) {

  $keywords = $_REQUEST['kw'];
//包含关键词，进行搜索
$sql = "select * from goods where goods_name like '%".$keywords."%'";
$result = $conn->query($sql);
if($result->num_rows>0){
  while($row = $result->fetch_assoc()) {
    if (isset($_REQUEST['uid'])) {
        echo "<li class='search'><a style = 'font-size:19px' href='/goods.php?id=".$row['id']."&uid=".$_REQUEST['uid']."'><div class='searchd'><img  src='".$row['picture']."' width='200px'></div>".$row['goods_name'].'<br>'.$row['price']."</a></li>";
    }else {
      echo "<li class='search'><a style = 'font-size:19px' href='/goods.php?id=".$row['id']."'><div class='searchd'><img  src='".$row['picture']."' width='200px'></div>".$row['goods_name'].'<br>'.$row['price']."</a></li>";
    }
  }
}else{
  echo "沒有搜尋到關於：".$keywords;
}
}else {
  echo "all goods";
	//如果不包含關鍵字，則顯示全部商品
}

 ?>
</ul>
</div>
<div class="footer mt20">
<script type="text/javascript" src="../shopping_web/images/juicer.js"></script>
</body></html>
<?php
include 'db_close.php';
 ?>
