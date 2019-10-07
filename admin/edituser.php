<?php
include '../conn.php';

?>
<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>編輯會員資料</title>

 
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
            <li><a href="../admin/main.php">首頁</a></li>
            <li><a href="../admin/goodslist.php">商品管理</a></li>
            <li class="active"><a href="../admin/userlist.php">會員管理</a></li>
            <li><a href="../admin/articlelist.php">文章管理</a></li>
            <li><a href="../admin/advlist.php">廣告管理</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../index.php" >進入前台</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <br><br><br><br><br>
                <table class="table">
        <thead>
          <tr>
            <th colspan="2">編輯會員資料</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $uid = $_REQUEST['uid'];
          $sql = "select * from user where id = ".$uid;
          $result = $conn->query($sql);
          if ($result->num_rows>0) {
            while ($row = $result->fetch_assoc()) {

           ?>
          <form class="" action="../admin/doedituser.php?uid=<?php echo $row['id']?>" method="post">
    <tr>
      <td>會員名稱：</td>
      <td>
        <input type="text" name="username" value="<?php echo $row['uname']?>">
      </td>
    </tr>

    <tr>
      <td>密碼：</td>
      <td>
        <input type="text" name="password" value="<?php echo $row['pwd']?>">
      </td>
    </tr>

    <tr>
      <td>電話號碼：</td>
      <td>
        <input type="text" name="tel" value="<?php echo $row['tel']?>">
      </td>
    </tr>

    <tr>
      <td>性別：</td>
      <td>
        <select class="select" name="sex">
          <option value="男">男</option>
          <option value="女">女</option>
        </select>
      </td>
    </tr>

    <tr>
      <td>電子郵件：</td>
      <td>
        <input type="text" name="email" value="<?php echo $row['email']?>">
      </td>
    </tr>
    <tr>
      <td>居家住址：</td>
      <td>
        <input type="text" name="address" value="<?php echo $row['address']?>">
      </td>
    </tr>
<?php
      }
    }
 ?>
<tr>
  <td colspan="2">
    <input type="submit" class="btn btn-success" value="更新">
  </td>
</tr>
</form>
    </tbody>
  </table>
	  </div>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
