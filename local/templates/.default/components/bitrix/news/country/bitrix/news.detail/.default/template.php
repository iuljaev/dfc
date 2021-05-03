<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="city-detail">
	<div>
		<h2><?=$arResult["NAME"]?></h2>
	</div>
	<div class="gallary">
		<?if($arResult['GALLARY_PHOTOS']) { ?>
		<? foreach ($arResult['GALLARY_PHOTOS'] as $photo) { ?>
			<div class="gallary_item">
				<a href="<?=$photo['SRC_BIG'];?>" class="fancybox" data-fancybox="images" data-caption="<?=$photo['ALT'];?>" >
					<img src="<?=$photo['SRC'];?>" alt="<?=$photo['ALT'];?>">
				</a>
			</div>
		<? }} ?>
	</div>

<div class="city_detail_content">
	<p><?echo $arResult["DETAIL_TEXT"];?></p>
</div>
</div>
<div class="city_info">


<div class="city_hotels">
	<div>
		<h3>Отели</h3>
	</div>
	<ul class="hotel_list">
		<?foreach($arResult["PROPERTIES"]["HOTELS"]["VALUE"] as $hotels):?>
	<?$res = CIBlockElement::GetByID($hotels);?>
	<?if($ar_res = $res->GetNext())?>
		<li>
			<a href='<?=$ar_res["DETAIL_PAGE_URL"];?>'><?=$ar_res["NAME"];?></a>
		</li>
	<?endforeach;?>
	</ul>
</div>

<div class="city_tours">
	<div>
		<h3>Туры</h3>
	</div>
	<ul class="tours_list">
		<?foreach($arResult["PROPERTIES"]["TOURS"]["VALUE"] as $tours):?>
	<?$res = CIBlockElement::GetByID($tours);?>
	<?if($ar_res = $res->GetNext())?>
		<li>
			<a href='<?=$ar_res["DETAIL_PAGE_URL"];?>'><?=$ar_res["NAME"];?></a>
		</li>
	<?endforeach;?>
	</ul>
</div>
</div>
