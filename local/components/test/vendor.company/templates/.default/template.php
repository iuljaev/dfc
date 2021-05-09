<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<?php debug($arResult['ITEMS']); ?>
<div class="company">
	<h2><?=$arResult["NAME"]?></h2>
	<div class="">
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="">
	</div>
	<div class="company_cont">
		<p><?=$arResult["DETAIL_TEXT"]?></p>
	</div>
</div>
<div class="">
	<ul>
		<?php


		$arSelect_cat = Array("NAME","DETAIL_PICTURE","DETAIL_PAGE_URL",);
		$arFilter_cat = Array("IBLOCK_ID"=>11, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y","!PROPERTY_VENDOR"=>false);
		$res = CIBlockElement::GetList(Array(), $arFilter_cat, false, false, $arSelect_cat);
		while($ob = $res->GetNextElement())
		{
		 $arFields = $ob->GetFields();?>

		 	<li> <a href="<?=$arFields["DETAIL_PAGE_URL"]?>"><?=$arFields["NAME"]?></a> </li>
		<? } ?>


	</ul>
</div>
