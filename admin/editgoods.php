<?php
include '../conn.php';
//获取商品id
$goods_id = $_REQUEST['gid'];

$sql = "select * from goods where id = ".$goods_id;
?>
<!DOCTYPE html>
<html lang="zh">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">
    <script src="./js/jquery.js"></script>
    <title>商品编辑</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/navbar-fixed-top.css" rel="stylesheet">
    <style>
      .file {
      position: relative;
      /* display: inline-block; */
      background: #D0EEFF;
      border: 1px solid #99D3F5;
      border-radius: 4px;
      vertical-align:middle
      /* padding: 4px 12px; */
      overflow: hidden;
      color: #1E88C7;
      text-decoration: none;
      text-indent: 0;
      margin-right: 20px;
    }
    .file input {
      position: absolute;
      font-size: 100px;
      width:60px;
      height:20px;
      margin-top:-20px;
      margin-left:154px;
      opacity: 0;
    }
    </style>
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
            <th colspan="2">編輯商品</th>

          </tr>
        </thead>
        <tbody>
          <form class="" action="../admin/doeditgoods.php?gid=<?php echo $goods_id?>" enctype="multipart/form-data"  method="post">
          <?php


          $result = $conn->query($sql);

          if ($result->num_rows>0) {
            //該商品存在
            while ($row=$result->fetch_assoc()) {

?>


    <tr>
      <td>商品名稱</td>
      <td><input type="text" name="goodsname" value="<?php echo $row['goods_name']?>"></td>
    </tr>

    <tr>
      <td>商品類型</td>
      <td><input type="text" name="type" value="<?php echo $row['type']?>"></td>
    </tr>

    <tr>
      <td>原價</td>
      <td><input type="text" name="oldprice" value="<?php echo $row['old_price']?>"></td>
    </tr>

    <tr>
      <td>特價</td>
      <td><input type="text" name="price" value="<?php echo $row['price']?>"></td>
    </tr>

    <tr>
      <td>商品描述</td>
      <td><input type="text" name="desc" value="<?php echo $row['description']?>"></td>
    </tr>
      <td>商品圖片鏈接</td>
      <td><input type="text" name="picture" id="image_url" value="<?php echo $row['picture']?>" width="200px"><a href="javascript:void(0);" class="file">上传图片
                                <input type="file" name="title_img" accept="image/png,image/jpeg" id="file1"></a>
      </td>
    </tr>
      
    <tr>
      <td></td>
      <td><input type="submit" class="btn btn-info" name="" value="更新"></td>
    </tr>
    <?php


  }
  }else{
  echo "該商品不存在！";
  }
     ?>
  </form>
    </tbody>
  </table>
    </div> 
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./js/bootstrap.min.js"></script>
    <script>
        $(function(){
            $("#file1").on('change',function(){
                var file_info = $("input[type='file']")[0].files[0]
                var formFile = new FormData();
                formFile.append("image", file_info)
                $.ajax({
                  url: "http://localhost/shop/admin/upload_image.php",
                  data:formFile,
                  type: "POST",
                  contentType: false,
                  processData: false,
                  success: function(res){
                    if (res["code"]==200){
                        $("#image_url").val(res["path"])
                    }else{
                      alert("上传失败");
                      return false
                    }
                  },
                  error: function(e){
                    console.log(e)
                  }
                })
            })
        }) 
    </script>
  </body>
</html>
