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
		"IBLOCK_ID_VENDOR" => "9",
		"IBLOCK_TYPE_VENDOR" => "vendor",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PRODUCT",
			2 => "",
		),
		"SEF_FOLDER" => "/vendor/",
		"SEF_MODE" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "vendor",
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE_CATALOG" => "product_catalog",
		"IBLOCK_ID_CATALOG" => "11",
		"PROPERTY_CODE_VENDOR" => array(
			0 => "",
			1 => "PRODUCT",
			2 => "",
		),
		"PROPERTY_CODE_CATALOG" => array(
			0 => "",
			1 => "VENDOR",
			2 => "",
		),
		"SEF_URL_TEMPLATES" => array(
			"section" => "",
			"company" => "#ELEMENT_CODE#/",
			"item" => "#ELEMENT_CODE#/#ELEMENT_CODE#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
