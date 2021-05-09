<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<?$ElementID = $APPLICATION->IncludeComponent(
	"test:vendor.company",
	"",
	Array(
		"IBLOCK_TYPE_VENDOR" => $arParams["IBLOCK_TYPE_VENDOR"],
		"IBLOCK_ID_VENDOR" => $arParams["IBLOCK_ID_VENDOR"],
		"IBLOCK_TYPE_CATALOG" => $arParams["IBLOCK_TYPE_CATALOG"],
		"IBLOCK_ID_CATALOG" => $arParams["IBLOCK_ID_CATALOG"],
		"FIELD_CODE" => $arParams["FIELD_CODE"],
		"PROPERTY_CODE_VENDOR" => $arParams["PROPERTY_CODE_VENDOR"],
		"PROPERTY_CODE_CATALOG" => $arParams["PROPERTY_CODE_CATALOG"],
		"DISPLAY_PROPERTY_CODE" => $arParams["PROPERTY_CODE"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["company"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["vendor"],
		),
	$component
);?>
