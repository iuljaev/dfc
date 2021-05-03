<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="price">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="price_items row">
			<div class="price_data ">
				<h2><?=$arItem['NAME']?></h2>
				<i><? echo $arResult['DISPLAY_PROPERTIES']['CATEGORIES']['DISPLAY_VALUE'];?></i>
			</div>
			<div class="price_data ">
				<b>Дата обновления</b>
				<span><?=$arItem['TIMESTAMP_X']?></span>
			</div>
			<div class="price_data ">
				<?if($arResult['FILE_PROP']) { ?>
				<? foreach ($arResult['FILE_PROP'] as $file){ ?>
				<b>Файл:<?=$file['TYPE'];?></b>
<?} }?>

				<a href="<?=CFile::GetPath($arResult["PROPERTIES"]["FILE"]["VALUE"]); ?>">Скачать </a>

			</div>

		</div>
<?php endforeach; ?>

</div>
<pre><?print_r($arResult);?></pre>
