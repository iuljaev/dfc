<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if ($_SERVER['REQUEST_URI']!="/countries/") {

	$this->setFrameMode(true);
	?>
	<div class="city_list">

		<?php foreach($arResult["ITEMS"] as $arItem):?>
	<div class="city_item">
		<div >
			<a class="city_img" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<?php if(!empty($arItem["PREVIEW_PICTURE"]["SRC"] )){
						?>
  				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"	style="float:left"/>
					<?php
					}else{?>
  				<img src="/upload/no-image.png" alt="" />
					<? } ?>
			</a>
		</div>
		<div class="city_content">
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


<?}	?>
