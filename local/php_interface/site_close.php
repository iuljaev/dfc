
<?php
use \Bitrix\Main\Page\Asset;
$APPLICATION->ShowHead();
?>
<!DOCTYPE html>
<html>
	<head>
    <title><<?php $APPLICATION->ShowTitle()?></title>
<?php
Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/bootstrap.min.css");
Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/style.css");
 ?>
  <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css' />
<?php
Asset::getInstance()->addString('<meta charset="utf-8" />');
Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />');
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0" />');
Asset::getInstance()->addString('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />');
?>
<link rel="shortcut icon" href="/favicon.ico" />
<?php
Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH."/js/jquery-3.6.0.min.js");
Asset::getInstance()->addJS(DEFAULT_TEMPLATE_PATH."/js/bootstrap.min.js");
Asset::getInstance()->addJS(DEFAULT_TEMPLATE_PATH."/js/countdown.js");
Asset::getInstance()->addJS(DEFAULT_TEMPLATE_PATH."/js/custom.js");
 ?>
</head>
<body style="background-image:url('<?php echo DEFAULT_TEMPLATE_PATH ?>/img/background/bg_01.jpg')">
<div id="panel"><?php $APPLICATION->ShowPanel() ?>
</div>
		<div class="container">

<div id="title"><h1><a href="#">Micros Developers</a></h1><h2 class="turqouish"><strong>Скоро Откроемся</strong></h2></div><!--end title-->

<div id="countdown"></div><!--end countdown-->
<div id="email">
  <h4>Узнайте о нас первыми!</h4>
  <form role="form" action="" method="post" />
    <div class="form-group">
      <input type="email" name="EMAIL" class="form-control" id="exampleInputEmail1" placeholder="Введите E-MAIL" />
    </div>
    <button type="submit" class="btn">Отправить</button>
  </form>
</div><!--end email-->

</div><!--end container-->
<!--Social Media-->
<div id="socialmedia">
    <ul>
        <a href="https://www.facebook.com/UCDMicros/" target="_blank"><li><img src="<?php echo DEFAULT_TEMPLATE_PATH ?>/img/social/facebook.png" /></li></a>
        <a href="https://www.twitter.com" target="_blank"><li><img src="<?php echo DEFAULT_TEMPLATE_PATH ?>/img/social/twitter.png" /></li></a>
        <a href="http://www.instagram.com" target="_blank"><li><img src="<?php echo DEFAULT_TEMPLATE_PATH ?>/img/social/instagram.png" /></li></a>
    </ul>
</div><!--end Social Media-->
  <div id="footer"><p><small>&copy; 1995-2016 СП "UCD Micros". Все права защищены.</small></p></div><!--end footer-->
</body>
</html>
