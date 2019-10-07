<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>管理員登入</title>
<link rel="stylesheet" type="text/css" href="../css/general.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/general.js"></script>
</head>
<body>
<div class="header">
  <div class="w900 mt30 cut">
    <div class="logo"><a href="/"><img src="../images/logo.gif" width="204"></a></div>
  </div>
</div>
<div class="container w900 mt20">
  <div class="wbox cut">
    <div class="login-banner fl cut"></div>
    <form method="post" action="dologin.php" id="login-form">
      <input type="password" value="" class="hide">
      <div class="login ml530">
        <h2 class="c666">管理員登入</h2>
        <dl class="username mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="username" id="username" type="text" placeholder="請輸入會員名稱"></dd>
        </dl>
        <dl class="pwd mt20">
          <dt><i class="icon"></i></dt>
          <dd><input name="password" id="password" type="password" placeholder="請輸入密碼"></dd>
        </dl>
        <div class="ck module mt20 cut">
          <div class="fl"></div>
          <div class="fr"></div>
        </div>
        <input class="form-submit aln-c radius4 mt20" style="width:100px;display:inline;margin-left:33px" type="submit" value="登入">
        <input class="form-submit aln-c radius4 mt20" style="width:100px;display:inline;margin-left:33px" type="reset" value="重置">
      </div>
    </form>
  </div>
<div class="cl"></div>
<div class="footer mt20">
  <div class="links radius4 mt20">
<script type="text/javascript" src="../images/md5.js"></script>
	</body>
	</html>
