<?php
include '../conn.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>加入宣傳文章</title>
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
            <li><a href="../admin/goodslist.php">商品管理</a></li>
            <li><a href="../admin/userlist.php">會員管理</a></li>
            <li class="active"><a href="../admin/articlelist.php">文章管理</a></li>
            <li><a href="../admin/advlist.php">廣告管理</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../" >進入前台</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <br><br><br><br>
                <table class="table">
        <thead>
          <tr>
            <th colspan="2">添加宣傳文章</th>

          </tr>
        </thead>
        <tbody>
          <form class="" action="../admin/doaddarticle.php" method="post">
    <tr>
      <td>文章標題</td>
      <td>
        <input type="text" name="title" value="">
      </td>
    </tr>

    <tr>
      <td>作者</td>
      <td>
        <input type="text" name="author" value="">
      </td>
    </tr>

    <tr>
      <td>文章內容</td>
      <td>
        <input type="text" name="content" value="">
      </td>
    </tr>


<tr>
  <td colspan="2">
    <input type="submit" class="btn btn-success" value="添加文章">
  </td>
</tr>

</form>
    </tbody>
  </table>
    </div>
  </body>
</html>
