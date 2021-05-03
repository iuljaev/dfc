<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("VEND_ITEM_NAME"),
	"DESCRIPTION" => GetMessage("VEND_ITEM_NAME_DESC"),
	"SORT" => 40,
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "vendor",
			"NAME" => GetMessage("VEND_ITEM_NAME_CHILD"),
			"SORT" => 40,
		),
	),
);

?>
