<!DOCTYPE>
<html>
  <head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="會員登入">
<meta name="description" content="會員登入">
<title>會員註冊</title>
<link rel="stylesheet" type="text/css" href="../css/general.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/general.js"></script>
<script src="../js/jquery.validate.min.js"></script>
</head>
<body>
<div class="header">
  <div class="w900 mt30 cut">
    <div class="logo"><a href=""><img src="../images/logo.gif" width="306"></a></div>
  </div>
</div>
<div class="container w900 mt20">
  <div class="wbox cut">
    <div class="login-banner fl cut"></div>
    <form method="post" action="../user/doregist.php" id="regform">
      <input type="password" value="" class="hide">
      <div class="login ml530">
        <h2 class="c666">會員註冊</h2>
        <dl class="username mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="username" id="username" type="text" placeholder="請輸入會員名稱" onKeyUp="value=value.replace(/[^\w\.\/]/ig,'')" required></dd>

        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="password" id="password" type="password" placeholder="請輸入密碼" required></dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="tel"  type="number" max="1000000000" min="0900000000" placeholder="手機號碼" required>
          <?php
			  if(isset($_POST["tel"]))
			  {
				  if(substr($_POST["tel"],0,2)=="09")
				  {
					  $_SESSION['finish']++;
				  }
				  else
				  {
					  $_SESSION['finish']=0;
					  echo "手機號碼必須為09開頭！";
				  }
			  }
			  else
			  {
				  echo "手機請輸入10碼";
			  }
			  ?>
       </dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
			<input type="radio" name="sex" value="man" placeholder="性别"  required checked> 男 
			<input type="radio" name="sex" value="Bananas" placeholder="性别" required > 女<br>
			</dd>
        </dl>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="birthday"  type="date" placeholder="生日" required></dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="email"  type="email" placeholder="123456@xxxx.com" required></dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="address"  type="text" placeholder="居家住址" required></dd>
        </dl>
        <div class="ck module mt20 cut">
          <div class="fl"></div>
          <div class="fr"></div>
        </div>
        <input class="form-submit aln-c radius4 mt20" type="submit" value="註&nbsp;冊">


      </div>
    </form>
  </div>
</div>
<div class="cl"></div>
<div class="footer mt20">
  <div class="links radius4 mt20">

      </div>
</div>

<script type="text/javascript">
$().ready(function() {
  $("#regform").validate();
}
</script>

</body></html>
