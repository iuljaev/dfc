<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("T_VEND_COMP_NAME"),
	"DESCRIPTION" => GetMessage("T_VEND_COMP_DESC"),
	"SORT" => 30,
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "vendor",
			"NAME" => GetMessage("T_VEND_COMP_NAME_CHILD"),
			"SORT" => 10,
		),
	),
);

?>
