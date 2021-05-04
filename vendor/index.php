<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вендоры");
?><?$APPLICATION->IncludeComponent(
	"test:vendor",
	"",
	Array(
		"FIELD_CODE" => array("DETAIL_TEXT","DETAIL_PICTURE",""),
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "vendor",
		"PROPERTY_CODE" => array("","CATALOG",""),
		"SEF_FOLDER" => "/vendor/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("company"=>"#ELEMENT_CODE#/","item"=>"#ELEMENT_CODE#/#ELEMENT_ID#/","section"=>""),
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>