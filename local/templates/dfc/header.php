<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>

		<?php
		use \Bitrix\Main\Page\Asset;
		$APPLICATION->ShowHead();
		?>
		<title><<?php $APPLICATION->ShowTitle()?></title>
		<?php
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/global.css");
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/layout.css");
		Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH."/css/jquery.fancybox.css");
		 ?>
		<?php
		Asset::getInstance()->addString('<meta name="author" content="" />');
		Asset::getInstance()->addString('<meta name="description" content="" />');
		Asset::getInstance()->addString('<meta name="keywords" content="" />');
		Asset::getInstance()->addString('<meta name="category" content="" />');
		Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
		?>
    <link rel="shortcut icon" href="/favicon.ico" />
		<?php
		Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH."/js/jquery-3.6.0.min.js");
		Asset::getInstance()->addJS(DEFAULT_TEMPLATE_PATH."/js/jquery.fancybox.js");
		Asset::getInstance()->addJS(DEFAULT_TEMPLATE_PATH."/js/main.js");
		Asset::getInstance()->addJS(DEFAULT_TEMPLATE_PATH."/js/custom.js");
		 ?>
	</head>
	<body>
		<div id="panel"><?php $APPLICATION->ShowPanel() ?>
		</div>
	<!-- Wrapper begin-->
	<div class="wrapper">
		<!-- Header begin -->
		<div class="header">
			<h1><a class="logo" href="/">DFC Information — информационный путеводитель</a></h1>

			<ul class="help">
				<li><a class="hot" href="#">Горячие предложения</a></li>
				<li><a class="find-tour" href="#">Найти тур</a></li>
				<li><a class="clients" href="#">Подержка клиентов</a></li>
			</ul>
			<div>
				<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "menu"
	),
	false
);?>
				<!-- <li><a class="active" href="#">Главная</a></li>
				<li><a href="#">О компании</a></li>
				<li><a href="#">Страны</a></li>
				<li><a href="#">Туры</a></li>
				<li><a href="#">Контакты</a></li> -->
			</div>
		</div>
		<!-- Content begin-->
		<div class="content">
			<div class="section">
