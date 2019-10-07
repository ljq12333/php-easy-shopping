
<div class="header mt30">
  <div class="w1100">
    <div class="module cut">
      <div class="logo fl"><a href="index.php" ><img src="../shopping_web/images/logo.gif" alt="" width="178" border="0"></a></div>
      <div class="top-search fl">
           <form method="get" action="../shopping_web/search.php">
        <?php
          if (isset($_REQUEST['uid'])) {
          ?>
          <input type="text"  style="display:none;" name="uid" value="<?php echo $_REQUEST['uid']?>">
          <?php
          }
         ?>
                    <div class="sf cut">
            <input class="fl" name="kw" type="text" value="" placeholder="搜尋您想要的商品">
            <button class="fr" type="submit">搜尋</button>
          </div>
        </form>

      </div>
      <?php
      if (isset($_REQUEST['uid'])) {
        ?>
        <div class="top-cart fr">
          <div class="radius4 mt10">
            <i class=""><img src="../shopping_web/images/cart.gif" style="width: 20px"> </i>
            <a href="../shopping_web/user/cart.php?uid=<?php echo $_REQUEST['uid']?>"><font>我的購物車</font></a></div>
        </div>
        <?php
      }
       ?>

    </div>
    <div class="module mt20">
      <div class="nav cut">

        <div class="cross cut">
          <ul>

          <?php
          if(isset($_REQUEST['uid'])){
            $uid = $_REQUEST['uid'];
            if(isset($_SESSION['uid'.$uid]))
            {
              $flag=1;
	             ?>
               <li><a href="../shopping_web/index.php?uid=<?php echo $uid?>">首頁</a></li>
               <li><a href="../shopping_web/user/center.php?uid=<?php echo $uid?>">會員中心</a></li>
              <li><a href="logout.php?uid=<?php echo $uid?>">登出</a></li>
               <?php

             }
           }
             else
             {?>
               <li><a href="../shopping_web/index.php">首頁</a></li>
               <li><a href="../shopping_web/user/login.php">登入</a></li>
               <li><a href="../shopping_web/user/regist.php">註冊</a></li>
               <?php

              }
            ?>

			</ul>
        </div>
      </div>
    </div>
  </div>
</div>
