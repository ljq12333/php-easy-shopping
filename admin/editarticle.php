<?php
include '../conn.php';

$article_id = $_REQUEST['aid'];

$sql = "select * from wenzhang where id = ".$article_id;
?>
<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>編輯文章</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <link href="./css/navbar-fixed-top.css" rel="stylesheet">

  </head>

  <body>
<div class="container">
  <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="#">後台管理</a> </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../admin/main.php">首頁</a></li>
              <li><a href="../admin/goodslist.php">商品管理</a></li>
              <li><a href="../admin/userlist.php">會員管理</a></li>
              <li class="active"><a href="../admin/articlelist.php">文章管理</a></li>
              <li><a href="../admin/advlist.php">廣告管理</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="../index.php">進入前台 <span class="sr-only"></span></a></li>
            </ul>
          </div>
        </div>
  </nav>
<br><br><br><br>
        <table class="table table-striped">
        <thead>
          <tr>
            <th colspan="2">編輯文章</th>
          </tr>
        </thead>
        <tbody>
          <form class="" action="../admin/doeditarticle.php?aid=<?php echo $article_id?>" method="post">
          <?php


          $result = $conn->query($sql);

          if ($result->num_rows>0) {
            while ($row=$result->fetch_assoc()) {

?>


    <tr>
      <td>文章標題</td>
      <td><input type="text" name="title" value="<?php echo $row['title']?>"></td>
    </tr>

    <tr>
      <td>作者</td>
      <td><input type="text" name="author" value="<?php echo $row['author']?>"></td>
    </tr>

    <tr>
      <td>文章內容</td>
      <td><input type="text" name="content" value="<?php echo $row['content']?>"></td>
    </tr>

    <tr>
      <td></td>
      <td><input type="submit" class="btn btn-info" name="" value="更新"></td>
    </tr>
    <?php
												}
		  }
				else{
  echo "該文章不存在！";
  }
     ?>
  </form>
    </tbody>
  </table>
    </div> 
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
