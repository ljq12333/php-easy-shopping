<?php
include '../conn.php';

$adv_id = $_REQUEST['advid'];

$sql = "select * from adv where id = ".$adv_id;
?>
<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>編輯廣告</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
=
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
            <li><a href="../admin/main.php">首頁</a></li>
            <li><a href="../admin/goodslist.php">商品管理</a></li>
            <li><a href="../admin/userlist.php">會員管理</a></li>
            <li><a href="../admin/articlelist.php">文章管理</a></li>
            <li class="active"><a href="../admin/advlist.php">廣告管理</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php">進入前台 <span class="sr-only"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">


<br><br><br><br>
        <table class="table table-striped">
        <thead>
          <tr>
            <th colspan="2">編輯廣告</th>

          </tr>
        </thead>
        <tbody>
          <form class="" action="../admin/doeditadv.php?advid=<?php echo $adv_id?>" method="post">
			  
          <?php
          $result = $conn->query($sql);

          if ($result->num_rows>0) {
            while ($row=$result->fetch_assoc()) {?>


    <tr>
      <td>廣告名稱</td>
      <td><input type="text" name="advsname" value="<?php echo $row['name']?>"></td>
    </tr>

    <tr>
      <td>關鍵字</td>
      <td><input type="text" name="key" value="<?php echo $row['keywords']?>"></td>
    </tr>

    <tr>
      <td>圖片</td>
      <td><input type="text" name="picture" value="<?php echo $row['picture']?>"></td>
    </tr>

    <tr>
      <td>鏈接</td>
      <td><input type="text" name="link" value="<?php echo $row['link']?>"></td>
    </tr>

    <tr>
      <td></td>
      <td><input type="submit" class="btn btn-info" name="" value="更新"></td>
    </tr>
    <?php


  }
  }else{
  echo "該廣告不存在！";
  }
     ?>
  </form>
    </tbody>
  </table>
    </div> 
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
