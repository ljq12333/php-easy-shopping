<?php
if (!isset($_REQUEST['goodsname'])) {
  echo "請輸入商品名稱！";
  exit;
}
if (!isset($_REQUEST['type'])) {
  echo "請輸入商品類型！";
  exit;
}
if (!isset($_REQUEST['oldprice'])) {
  echo "請輸入商品原價！";
  exit;
}
if (!isset($_REQUEST['price'])) {
  echo "請輸入商品特價！";
  exit;
}
if (!isset($_REQUEST['desc'])) {
  echo "請輸入商品描述！";
  exit;
}
if (!isset($_REQUEST['picture'])) {
  echo "請輸入商品圖片鏈接！";
  exit;
}

$goods_name = $_REQUEST['goodsname'];
$type = $_REQUEST['type'];
$old_price = $_REQUEST['oldprice'];
$description = $_REQUEST['desc'];
$price = $_REQUEST['price'];
$_picture = $_REQUEST['picture'];

include '../conn.php';
$sql = "insert into goods(goods_name,type,price,description,old_price,picture)"
      ." values('".$goods_name."','".$type."',".$price.",'".$description."',"
      .$old_price.",'".$picture."')";

if($conn->query($sql)=== TRUE){

    header("Location:../admin/goodslist.php");

}else{
  echo '添加商品失敗！';
}
?>