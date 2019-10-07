<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">、
    <title>更新</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <link href="./css/navbar-fixed-top.css" rel="stylesheet">
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.js"></script>

  </head>
  <?php
  include '../conn.php';
  $adv_id =  $_REQUEST['advid'];
  $adv_name = $_REQUEST['advsname'];
  $key_word = $_REQUEST['key'];
  $pic = $_REQUEST['picture'];
  $link = $_REQUEST['link'];

  $sql = "update adv set name = '".$adv_name."',keywords='".$key_word."',picture='".$pic."',link='".$link."' where id = ".$adv_id;

  ?>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">後台管理</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../admin/main.php">首頁</a></li>
            <li><a href="../admin/userlist.php">會員列表</a></li>
            <li><a href="../admin/articlelist.php">文章列表</a></li>
            <li><a href="../admin/goodslist.php">商品列表</a></li>
            <li class="active"><a href="../admin/advlist.php">廣告列表</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php">進入前台 <span class="sr-only"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">


<br><br><br><br>
        <?php
        if ($conn->query($sql)) {
          echo "更新成功！正在跳轉...";
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
          echo "更新失敗，請返回重新操作！";
        }
         ?>
    </div> 




  </body>
</html>
<?php include '../db_close.php'; ?>
