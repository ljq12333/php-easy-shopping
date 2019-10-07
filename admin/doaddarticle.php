<?php
if (!isset($_REQUEST['title'])) {
  echo "請輸入文章標題！";
  exit;
}
if (!isset($_REQUEST['author'])) {
  echo "請輸入作者！";
  exit;
}
if (!isset($_REQUEST['content'])) {
  echo "請輸入文章內容！";
  exit;
}


$title = $_REQUEST['title'];
$author = $_REQUEST['author'];
$content = $_REQUEST['content'];
$time = date('y-m-d h:i:s',time());

include 'conn.php';
$sql = "insert into wenzhang(title,content,author,time)"
      ." values('".$title."','".$content."','".$author."','".$time."')";

if($conn->query($sql)=== TRUE){

    header("Location:../admin/articlelist.php");

}else{
  echo '添加文章失敗！:error:add article failed!';
}
?>