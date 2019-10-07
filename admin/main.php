<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>後台管理</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/navbar-fixed-top.css" rel="stylesheet">
  </head>
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
            <li class="active"><a href="../admin/main.php">首頁</a></li>
            <li><a href="../admin/goodslist.php">商品列表</a></li>
            <li><a href="../admin/userlist.php">會員列表</a></li>
            <li><a href="../admin/articlelist.php">文章列表</a></li>
            <li><a href="../admin/advlist.php">廣告列表</a></li>
		    <li><a href="../admin/orderlist.php">訂單列表</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php">進入前台 <span class="sr-only"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="jumbotron">
        <h1>管理員，您好！</h1>
        <p>這裡是愛的小鋪後台管理系統，你可以針對商品，會員，文章，廣告進行管理。</p>
      </div>
    </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
