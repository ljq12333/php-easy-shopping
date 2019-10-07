<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.js"></script>
<body>

</body>
</html>
<?php
include '../conn.php';
$aid = $_REQUEST['aid'];
$title = $_REQUEST['title'];
$author = $_REQUEST['author'];
$content     = $_REQUEST['content'];

$sql = "update wenzhang set title = '".$title."',author = '".$author."',content = '".$content."' where id = ".$aid;

if ($conn->query($sql)) {
  echo "更新文章成功！正在跳轉...";
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
  echo "更新文章失敗，請重試！error:update article error!";
}
   ?>
