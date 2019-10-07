<?php
include '../conn.php';
?>
<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商品清單</title>

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
            <li class="active"><a href="../admin/goodslist.php">商品管理</a></li>
            <li><a href="../admin/userlist.php">會員管理</a></li>
            <li><a href="../admin/articlelist.php">文章管理</a></li>
            <li><a href="../admin/advlist.php">廣告管理</a></li>
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
        <h1>商品管理</h1>
        <p>這裡是商品管理，您可以針對商品進行增加、刪除、修改、查詢。</p>
		</div>
        <table class="table table-striped">

        <a href="../admin/addgoods.php" class="btn btn-success">增加商品</a>
        <thead>
          <tr>
            <th>編號</th>
            <th>名稱</th>
            <th>類型</th>
            <th>原價</th>
            <th>特價</th>
            <th>描述</th>
            <th>執行動作</th>
          </tr>
        </thead>
        <tbody>
      <?php
      $sql = "SELECT * FROM goods";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          ?>

    <tr>
      <td><?php echo $row["id"]; ?></td>
      <td><?php echo $row["goods_name"]; ?></td>
      <td><?php echo $row['type'] ?></td>
      <td><?php echo $row['old_price'] ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row['description'] ?></td>
      <td>
        <a href="../admin/editgoods.php?gid=<?php echo $row['id']?>" class="btn btn-primary">編輯</a>
        <button  class="btn btn-danger" data-toggle="modal" onclick="delgoods(<?php echo $row['id']?>)" data-target="#myModal">刪除</button>
       
      </td>
    </tr>
          <?php
        }
      } else {
        echo "0 個結果";
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
              <div class="modal-body">確認是否進行刪除？</div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                  <button type="button" id="del" class="btn btn-danger">刪除</button>
                  <script type="text/javascript">

                      function delgoods(goodsid) {
                          $.post('../admin/delgoods.php',
								 {
							  gid:goodsid
						  },
								 function(data,status){
							  if (data == 1) {
								  alert('刪除成功！');
							  }
							  dataType: "text",
								  sleep(300);
							  location.href="../admin/goodslist.php";
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
    </div>
  </body>
</html>
