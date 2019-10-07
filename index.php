<?php
session_start();
include 'conn.php';

$flag = 0;

?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF8">
<link rel="stylesheet" type="text/css" href="./css/general.css">
<link rel="stylesheet" type="text/css" href="./css/index.css">
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/general.js"></script>
<script type="text/javascript" src="./js/carousel.js"></script>
<title>愛的小鋪</title>
</head>
<body>
<?php include 'header.php';?>

<div class="container w1100">
  <div class="module cut">
    <!-- <div class="catebar w210 fl">
    </div>
    <div class="w640 fl cut"></div> -->
    <div class="mt30 cut" style="width:60%;margin-top:0px;float:left">
      <div class="gli_t">
        <h2 class="fl">全部商品</h2>
      </div>
      <div class="gli w1110">
        <ul>
            <?php
            $sql = "SELECT * FROM goods";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    ?>
                    <li>
                  <div class="im"><a href="../shopping_web/goods.php?id=<?php echo $row["id"];
                    if ($flag == 1) {
                        echo '&uid=' . $uid;
                    }
                    ?>"><img  src="<?php echo $row['picture'] ?>"></a></div>
                  <h3><a href="../shopping_web/goods.php?id=<?php echo $row["id"];
                    if ($flag == 1) {
                        echo '&uid=' . $uid;
                    }
                    ?>">
            <?php
            echo $row["goods_name"];
                    ?></a> </h3>
                  <del> <p class="price"><i>原價 NT.</i>
            <?php
            echo $row["old_price"]
                    ?>
                  </p></del>
                  <p class="price"><i>現價 NT.</i>
            <?php
            echo $row["price"]
                    ?>
                  </p>
                  </li>
                    <?php
            }
            } else {
                echo "0 個結果";
            }
            ?>
                      </ul>
                      </div>
                <div class="carousel cut">
                  <div class="carousel-imgs cut">
                    <?php
            $sql = "select * from adv";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $count = $result->num_rows;
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <a href="<?php echo $row['link'] ?>" style="display: block;"> <img src="<?php echo $row['picture'] ?>" width="630" height="240"  border="0"> </a>
                    <?php
            }
                ?>
                    <ul class="carousel-tog">
                      <?php
            while ($count > 0) {
                    ?>
                      <li class="cur"><?php echo $count ?></li>
                      <?php
            $count -= 1;
                }
                ?>
                    </ul>
                    <?php
            }
            ?>
      </div>
    </div>
    </div>
    <div class="w240 fr cut" style="margin-top:20px">
      <div class="news mt10" style="height: 240px">
        <h2><a href="articles.php<?php
              if (isset($_REQUEST['uid'])) {
                  echo '?uid=' . $_REQUEST['uid'];
              }
              ?>" class="fr">更多 <i>&gt;</i></a>最新資訊</h2>
                <ul>
                  <?php
                    $sql = "SELECT * FROM wenzhang limit 5";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                                        <li><a  href="../shopping_web/article.php?wzid=<?php echo $row['id'];
                            if (isset($_REQUEST['uid'])) {
                                echo '&uid=' . $_REQUEST['uid'];
                            }
                            ?>"><?php echo $row['title'] ?></a></li>
                                        <?php
                    }
                    }
                    ?>
                  </ul>
          </div>
    </div>
  </div>
<?php include 'footer.php';?>
