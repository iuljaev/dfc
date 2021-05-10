<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$this->setFrameMode(true);
?>
<?$ElementID = $APPLICATION->IncludeComponent(
	"test:vendor.item",
	"",
	Array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE_CATALOG"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID_CATALOG"],
		"FIELD_CODE" => $arParams["FIELD_CODE"],
		"PROPERTY_CODE" => $arParams["PROPERTY_CODE_CATALOG"],
		"DISPLAY_PROPERTY_CODE" => $arParams["PROPERTY_CODE"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["item"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["vendor"],
		),
	$component
);?>
