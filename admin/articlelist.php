<?php
include '../conn.php';

?>
<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>文章管理</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/navbar-fixed-top.css" rel="stylesheet">
        <script src="./js/jquery.js"></script>
        <script src="./js/bootstrap.min.js"></script>
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
			<li><a href="../admin/orderlist.php">訂單列表</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php">進入前台<span class="sr-only"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="jumbotron">
        <h1>宣傳文章管理</h1>
        <p>管理員您好，您可對宣傳文章進行增加，刪除，修改，查詢管理</p>
      </div>

                <table class="table table-striped">

        <a href="../admin/addarticle.php" class="btn btn-success">添加文章</a>
        <thead>
          <tr>
            <th>編號</th>
            <th>標題</th>
            <th>作者</th>
            <th>時間</th>
            <th>執行動作</th>
          </tr>
        </thead>
        <tbody>
      <?php
      $sql = "SELECT * FROM wenzhang";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          ?>

    <tr>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["title"]; ?></td>
      <td><?php echo $row["author"]; ?></td>
      <td><?php echo $row["time"]; ?></td>
      <td>
        <a href="../admin/editarticle.php?aid=<?php echo $row["id"]; ?>" class="btn btn-primary">編輯</a>
        <button  class="btn btn-danger" data-toggle="modal" onclick="delarticle(<?php echo $row['id']?>)" data-target="#myModal">刪除</button>
      </td>
    </tr>
          <?php

        }
      } else {
        echo "0 个结果";
      }
      $conn->close();
      ?>
    </tbody>
  </table>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">提醒</h4>
              </div>
              <div class="modal-body">請問您是否確認要刪除該文章？</div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                  <button type="button" id="del" class="btn btn-danger" >刪除</button>
                  <script type="text/javascript">

                      function delarticle(articleid) {
                          $.post("../admin/delarticle.php",{
                            aid:articleid,
                          },function(data,status){
                            sleep(300);
                             if (data == 1) {
                              alert('刪除成功！');
                             }
                            sleep(300);
                            location.href="../admin/articlelist.php";

                          });
                      }
                      function sleep(n) { //n代表毫秒
                             var start = new Date().getTime();
                             while (true) if (new Date().getTime() - start > n) break;
                         }
                  </script>
              </div>
          </div>
      </div>
    </div>



  </body>
</html>
