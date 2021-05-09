<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arIBlockVendorType = CIBlockParameters::GetIBlockTypes();
$arIBlockCatalogType = CIBlockParameters::GetIBlockTypes();

$arIBlockVendor=array();
$rsIBlockVendor = CIBlock::GetList(Array("SORT" => "ASC"), Array("TYPE" => $arCurrentValuesVendor["IBLOCK_TYPE_VENDOR"], "ACTIVE"=>"Y"));
while($arr=$rsIBlockVendor->Fetch())
{
	$arIBlockVendor[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
}

$arIBlockCatalog=array();
$rsIBlockCatalog = CIBlock::GetList(Array("SORT" => "ASC"), Array("TYPE" => $arCurrentValuesCatalog["IBLOCK_TYPE_CATALOG"], "ACTIVE"=>"Y"));
while($arr=$rsIBlockCatalog->Fetch())
{
	$arIBlockCatalog[$arr["ID"]] = "[".$arr["ID"]."] ".$arr["NAME"];
}

$arSorts = Array("ASC"=>GetMessage("T_IBLOCK_DESC_ASC"), "DESC"=>GetMessage("T_IBLOCK_DESC_DESC"));
$arSortFields = Array(
		"ID"=>GetMessage("T_IBLOCK_DESC_FID"),
		"NAME"=>GetMessage("T_IBLOCK_DESC_FNAME"),
		"ACTIVE_FROM"=>GetMessage("T_IBLOCK_DESC_FACT"),
		"SORT"=>GetMessage("T_IBLOCK_DESC_FSORT"),
		"TIMESTAMP_X"=>GetMessage("T_IBLOCK_DESC_FTSAMP")
	);
	$arProperty_LNS_Vendor = array();
	$rsProp = CIBlockProperty::GetList(array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>(isset($arCurrentValuesVendor["IBLOCK_TYPE_VENDOR"])?$arCurrentValuesVendor["IBLOCK_TYPE_VENDOR"]:$arCurrentValues["ID"])));
	while ($arr=$rsProp->Fetch())
	{
		$arProperty[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
		if (in_array($arr["PROPERTY_TYPE"], array("L", "N", "S")))
		{
			$arProperty_LNS_Vendor[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
		}
	}

	$arProperty_LNS_Catalog = array();
	$rsProp = CIBlockProperty::GetList(array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y", "IBLOCK_ID"=>(isset($arCurrentValuesCatalog["IBLOCK_TYPE_CATALOG"])?$arCurrentValuesCatalog["IBLOCK_TYPE_CATALOG"]:$arCurrentValues["ID"])));
	while ($arr=$rsProp->Fetch())
	{
		$arProperty[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
		if (in_array($arr["PROPERTY_TYPE"], array("L", "N", "S")))
		{
			$arProperty_LNS_Catalog[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
		}
	}



$arComponentParameters = array(
	"GROUPS" => array(
  ),
	"PARAMETERS" => array(
		"VARIABLE_ALIASES" => Array(
			"ELEMENT_ID" => Array("NAME" => GetMessage("NEWS_ELEMENT_ID_DESC")),
		),
		"SEF_MODE" => Array(
			"section" => array(
				"NAME" => GetMessage("T_IBLOCK_SEF_PAGE_NEWS"),
				"DEFAULT" => "",
				"VARIABLES" => array(),
			),
			"company" => array(
				"NAME" => GetMessage("T_IBLOCK_SEF_PAGE_NEWS_SECTION"),
				"DEFAULT" => "#ELEMENT_ID#/",
				"VARIABLES" => array("ELEMENT_ID"),
			),
			"item" => array(
				"NAME" => GetMessage("T_IBLOCK_SEF_PAGE_NEWS_DETAIL"),
				"DEFAULT" => "#ELEMENT_ID#/",
				"VARIABLES" => array("ELEMENT_ID"),
			),
		),
		"IBLOCK_TYPE_VENDOR" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BN_P_IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlockVendorType,
			"REFRESH" => "Y",
		),
		"IBLOCK_ID_VENDOR" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BN_P_IBLOCK"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlockVendor,
			"REFRESH" => "Y",
			"ADDITIONAL_VALUES" => "Y",
		),

		"IBLOCK_TYPE_CATALOG" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BN_P_IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlockCatalogType,
			"REFRESH" => "Y",
		),
		"IBLOCK_ID_CATALOG" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("BN_P_IBLOCK"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlockCatalog,
			"REFRESH" => "Y",
			"ADDITIONAL_VALUES" => "Y",
		),


		"SORT_BY1" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("T_IBLOCK_DESC_IBORD1"),
			"TYPE" => "LIST",
			"DEFAULT" => "ACTIVE_FROM",
			"VALUES" => $arSortFields,
			"ADDITIONAL_VALUES" => "Y",
		),
		"SORT_ORDER1" => Array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("T_IBLOCK_DESC_IBBY1"),
			"TYPE" => "LIST",
			"DEFAULT" => "DESC",
			"VALUES" => $arSorts,
			"ADDITIONAL_VALUES" => "Y",
		),
		"FIELD_CODE" => CIBlockParameters::GetFieldCode(GetMessage("IBLOCK_FIELD"), "DATA_SOURCE"),
		"PROPERTY_CODE_VENDOR" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("T_IBLOCK_PROPERTY"),
			"TYPE" => "LIST",
			"MULTIPLE" => "Y",
			"VALUES" => $arProperty_LNS_Vendor,
			"ADDITIONAL_VALUES" => "Y",
		),
		"PROPERTY_CODE_CATALOG" => array(
			"PARENT" => "DATA_SOURCE",
			"NAME" => GetMessage("T_IBLOCK_PROPERTY"),
			"TYPE" => "LIST",
			"MULTIPLE" => "Y",
			"VALUES" => $arProperty_LNS_Catalog,
			"ADDITIONAL_VALUES" => "Y",
		),


	),
);
