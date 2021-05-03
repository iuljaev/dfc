<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

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

	<div class="city_detail_data">
		<span><?=$arResult["PROPERTIES"]["TIME_DAY"]["NAME"].' : '.$arResult["PROPERTIES"]["TIME_DAY"]["VALUE"] ?></span>
		<span><?=$arResult["PROPERTIES"]["PRICE"]["NAME"].' : '.$arResult["PROPERTIES"]["PRICE"]["VALUE"] ?></span>
	</div>
	<div class="city_detail_content">
		<p><?echo $arResult["DETAIL_TEXT"];?></p>
	</div>
</div>
<div class="city_info">
	<div class="city_hotels">
		<div>
			<h3>Страны</h3>
		</div>
		<ul class="hotel_list">
			<?foreach($arResult["PROPERTIES"]["COUNTRIES"]["VALUE"] as $country):?>
			<?$res = CIBlockSection::GetByID($country);?>
			<?if($ar_res = $res->GetNext())?>
				<li>
					<a href='<?=$ar_res["SECTION_PAGE_URL"];?>'><?=$ar_res["NAME"];?></a>
				</li>
			<?endforeach;?>
		</ul>
	</div>
	<div class="city_tours">
		<div>
			<h3>Города</h3>
		</div>
		<ul class="tours_list">
			<?foreach($arResult["PROPERTIES"]["CITY"]["VALUE"] as $city):?>
			<?$res = CIBlockElement::GetByID($city);?>
			<?if($ar_res = $res->GetNext())?>
				<li>
					<a href='<?=$ar_res["DETAIL_PAGE_URL"];?>'><?=$ar_res["NAME"];?></a>
				</li>
			<?endforeach;?>
		</ul>
	</div>
	<div class="city_tours">
		<div>
			<h3>Отели</h3>
		</div>
		<ul class="tours_list">
			<?foreach($arResult["PROPERTIES"]["HOTELS"]["VALUE"] as $tours):?>
			<?$res = CIBlockElement::GetByID($tours);?>
			<?if($ar_res = $res->GetNext())?>
				<li>
					<a href='<?=$ar_res["DETAIL_PAGE_URL"];?>'><?=$ar_res["NAME"];?></a>
				</li>
			<?endforeach;?>
		</ul>
	</div>
</div>
