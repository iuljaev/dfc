<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Прайс-лист");
?><?$APPLICATION->IncludeComponent(
	"price.list",
	"",
	Array(
		"FIELD_CODE" => array("TIMESTAMP_X",""),
		"IBLOCKS" => "10",
		"IBLOCK_TYPE" => "manual",
		"PROPERTY_CODE" => array("","FILE","CATEGORIES")
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>