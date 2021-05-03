<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("T_VEND_SEC_NAME"),
	"DESCRIPTION" => GetMessage("T_VEND_SEC_DESC"),
	"SORT" => 20,
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "vendor",
			"NAME" => GetMessage("T_VEND_SEC_NAME_CHILD")
		),
	),
);

?>
