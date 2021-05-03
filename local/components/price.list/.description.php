<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("T_IBLOCK_DESC_LINE"),
	"DESCRIPTION" => GetMessage("T_IBLOCK_DESC_LINE_DESC"),
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "price",
			"NAME" => GetMessage("T_IBLOCK_DESC_NEWS"),
			"SORT" => 10,
		)
	),
);

?>
