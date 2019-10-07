<?php
include '../conn.php';

?>
<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加商品</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/navbar-fixed-top.css" rel="stylesheet">

  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">切換前後台</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">後台管理</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="../admin/main.php">首頁</a></li>
            <li class="active"><a href="../admin/goodslist.php">商品管理</a></li>
            <li><a href="../admin/userlist.php">會員管理</a></li>
            <li><a href="../admin/articlelist.php">文章管理</a></li>
            <li><a href="../admin/advlist.php">廣告管理</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php">進入前台</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <br><br>
      <br><br><br>
      <table class="table ">


        <thead>
          <tr>
            <th colspan="2">添加商品</th>
          </tr>
        </thead>
        <tbody>

<form class="" action="../admin/doaddgoods.php" method="post">

    <tr>
      <td>商品名稱：</td>
      <td><input type="text" name="goodsname" value=""></td>
    </tr>
    <tr>
      <td>商品類型：</td>
      <td><input type="text" name="type" value=""></td>
    </tr>
    <tr>
      <td>原價：</td>
      <td><input type="text" name="oldprice" value=""></td>
    </tr>
    <tr>
      <td>特價：</td>
      <td><input type="text" name="price" value=""></td>
    </tr>
    <tr>
      <td>商品描述：</td>
      <td><input type="text" name="desc" value=""></td>
    </tr>
    <tr>
      <td>商品圖片：</td>
      <td><input type="text" name="picture" value=""></td>
    </tr>
    <tr colspan="2">
      <td>
        <input type="submit" class="btn btn-success" value="添加該商品">
      </td>
    </tr>
  </form>

    </tbody>
  </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="./assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
