<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */

use Bitrix\Main\Loader,
	Bitrix\Main,
	Bitrix\Iblock;

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 300;

$arParams["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
if($arParams["IBLOCK_TYPE"] == '')
	$arParams["IBLOCK_TYPE"] = "news";
if($arParams["IBLOCK_TYPE"]=="-")
	$arParams["IBLOCK_TYPE"] = "";

$arParams['IBLOCKS']=intval($arParams['IBLOCKS']);
$arParams['PROPERTY_CODE']=intval($arParams['PROPERTY_CODE']);

if($arParams['IBLOCKS'] > 0 && $arParams['PROPERTY_CODE'] > 0 && $this->startResultCache(false, ($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups())))
{
	if(!Loader::includeModule("iblock"))
	{
		$this->abortResultCache();
		ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
		return;
	}
	$arSelect = array_merge($arParams["FIELD_CODE"], array(
		"ID",
		"IBLOCK_ID",
		"DETAIL_PAGE_URL",
		"NAME",
		"TIMESTAMP_X",
		"PROPERTY_*",
	));
		$bGetProperty = !empty($arParams["PROPERTY_CODE"]);

	$arFilter = array (
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID"=> $arParams["IBLOCKS"],
		"IBLOCK_LID" => SITE_ID,
		"ACTIVE" => "Y",
		"ACTIVE_DATE" => "Y",
		"CHECK_PERMISSIONS" => "Y",

	);
	$arOrder = array(
		$arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"],
		$arParams["SORT_BY2"]=>$arParams["SORT_ORDER2"],
	);


	if(!array_key_exists("ID", $arOrder))
		$arOrder["ID"] = "DESC";
	$arResult=array(
		"ITEMS"=>array(),
	);
	$rsElement = CIBlockElement::GetList(
					 array(),
					 $arFilter,
					 false,
					 false,
					 $arSelect
			 );
	 $rsElement->SetUrlTemplates($arParams['ELEMENT_URL'], $arParams['SECTION_URL']);
	 if ($obElement = $rsElement->GetNextElement()) {
				$arResult = $obElement->GetFields();
				$arResult['PROPERTIES'] = $obElement->GetProperties();

				foreach ($arResult['PROPERTIES'] as $code => $data)
				{
						$arResult['DISPLAY_PROPERTIES'][$code] = CIBlockFormatProperties::GetDisplayValue($arResult, $data, '');
				}
		}
	$rsItems = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
	$rsItems->SetUrlTemplates($arParams["DETAIL_URL"]);
	while($arItem = $rsItems->GetNext())
	{
		$arButtons = CIBlock::GetPanelButtons(
			$arItem["IBLOCK_ID"],
			$arItem["ID"],
			0,
			array("SECTION_BUTTONS"=>false, "SESSID"=>false)
		);
		$arItem["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
		$arItem["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];

			Iblock\InheritedProperty\ElementValues::queue($arItem["IBLOCK_ID"], $arItem["ID"]);
		$arItem["DISPLAY_PROPERTIES"] = array($arParams['PROPERTY_CODE']);

		$arResult["ITEMS"][]=$arItem;
		$arResult["LAST_ITEM_IBLOCK_ID"]=$arItem["IBLOCK_ID"];
	}
	if ($arParams["SET_LAST_MODIFIED"])
	{
		$time = DateTime::createFromUserTime($arItem["TIMESTAMP_X"]);
		if (
			!isset($arResult["ITEMS_TIMESTAMP_X"])
			|| $time->getTimestamp() > $arResult["ITEMS_TIMESTAMP_X"]->getTimestamp()
		)
			$arResult["ITEMS_TIMESTAMP_X"] = $time;
	}

	unset($arItem);
	$this->includeComponentTemplate();
}
