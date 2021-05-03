<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<div class="news-list">

	<?php foreach($arResult["ITEMS"] as $arItem):?>
<div class="news-item">
	<div >
		<a class="img_news" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"	style="float:left"/>
		</a>
	</div>
	<div class="news-content">
		<h3>
			<a href="<?=$arItem['DETAIL_PAGE_URL']; ?>"><?=$arItem['NAME'];?></a>
		</h3>
			<p><?=$arItem['PREVIEW_TEXT']; ?></p>
		</div>
	</div>
<?php endforeach;?>
<?php if ($arParams['DISPLAY_BOTTOM_PAGER']): ?>
	<?=$arResult['NAV_STRING']; ?>
<?php endif; ?>
</div>
