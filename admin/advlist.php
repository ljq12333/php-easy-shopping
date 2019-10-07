<?php
include '../conn.php';
 ?>
<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>廣告管理</title>

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
            <li><a href="../admin/articlelist.php">文章管理</a></li>
            <li class="active"><a href="../admin/advlist.php">廣告管理</a>
			</li>
			<li><a href="../admin/orderlist.php">訂單列表</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php">進入前台</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="jumbotron">
        <h1>廣告管理</h1>
        <p>管理員您好，您可以對廣告進行增加刪除修改查詢！</p>
      </div>
<table class="table table-striped">
              <a href="../../addadv.php" class="btn btn-success">增加廣告</a>
              <thead>
                <tr>
                  <th width="34">編號</th>
                  <th width="34">名稱</th>
                  <th width="62">關鍵字</th>
                  <th width="74">執行動作</th>
                </tr>
              </thead>
              <tbody>
            <?php
            $sql = "SELECT * FROM adv";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                ?>

          <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["keywords"]; ?></td>
            <td>
              <a href="editadv.php?advid=<?php echo $row['id'];?>" class="btn btn-primary">編輯</a>
              <button  class="btn btn-danger" data-toggle="modal" onclick="deladv(<?php echo $row['id']?>)" data-target="#myModal">刪除</button>
            </td>
          </tr>

                <?php

              }
            } else {
              echo "0個結果";
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
                    <div class="modal-body">請問您是否確認刪除該廣告？</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" id="del" class="btn btn-danger" >刪除</button>
                        <script type="text/javascript">

                            function deladv(advid) {
                                $.post("../../admin/deladv.php",{
                                  adid:advid,
                                },function(data,status){
                                  sleep(300);
                                   if (data == 1) {
                                    alert('刪除成功');
                                  }
                                  sleep(300);
                                  location.href="../../admin/advlist.php";

                                });
                            }
                            function sleep(n) {
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
