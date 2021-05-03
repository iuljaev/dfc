<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
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
