<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вендоры");
?><?$APPLICATION->IncludeComponent(
	"test:vendor", 
	".default", 
	array(
		"FIELD_CODE" => array(
			0 => "DETAIL_TEXT",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "vendor",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "CATALOG",
			2 => "",
		),
		"SEF_FOLDER" => "/vendor/",
		"SEF_MODE" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"COMPONENT_TEMPLATE" => ".default",
		"SEF_URL_TEMPLATES" => array(
			"section" => "",
			"company" => "",
			"item" => "#ELEMENT_ID#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>