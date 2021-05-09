<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/*
if ($USER->IsAdmin()) {
  echo "arParams<br/><pre>";
  print_r($arParams);
  echo "</pre>";
}
*/
use Bitrix\Main\Loader,
	Bitrix\Main,
	Bitrix\Iblock;
$arDefaultUrlTemplates404 = array(
	"section" => "",
	"company" => "#ELEMENT_ID#/",
	"item" => "#SECTION_CODE#/#ELEMENT_ID#/",
);

$arDefaultVariableAliases404 = array();
$arDefaultVariableAliases = array();
$arComponentVariables = array(
	"SECTION_ID",
	"SECTION_CODE",
	"ELEMENT_ID",
	"ELEMENT_CODE",
);
/*
  if ($USER->IsAdmin()) {
    echo "arComponentVariables<br/><pre>";
    print_r($arComponentVariables);
    echo "</pre>";
  }
*/
if(!is_array($arParams["PROPERTY_CODE"]))
	$arParams["PROPERTY_CODE"] = array();
foreach($arParams["PROPERTY_CODE"] as $k=>$v)
	if($v==="")
		unset($arParams["PROPERTY_CODE"][$k]);

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
			"IBLOCK_TYPE_VENDOR" => $arParams["IBLOCK_TYPE_VENDOR"],
			"IBLOCK_TYPE_CATALOG" => $arParams["IBLOCK_TYPE_CATALOG"],
			"IBLOCK_ID_VENDOR"=> $arParams["IBLOCK_ID_VENDOR"],
			"IBLOCK_ID_CATALOG"=> $arParams["IBLOCK_ID_CATALOG"],
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

if($arParams["SEF_MODE"] == "Y")
{
	$arVariables = array();
	$arUrlTemplates = CComponentEngine::makeComponentUrlTemplates($arDefaultUrlTemplates404, $arParams["SEF_URL_TEMPLATES"]);
/*
  if ($USER->IsAdmin()) {
    echo "arUrlTemplates<br/><pre>";
    print_r($arUrlTemplates);
    echo "</pre>";
  }
*/
	$arVariableAliases = CComponentEngine::makeComponentVariableAliases($arDefaultVariableAliases404, $arParams["VARIABLE_ALIASES"]);

	$componentPage = CComponentEngine::ParseComponentPath($arParams["SEF_FOLDER"],$arUrlTemplates,$arVariables);
//  echo $componentPage."<br>";
	if (!$componentPage)
  {
    $componentPage = "section";
  }
// echo $componentPage;
	CComponentEngine::initComponentVariables($componentPage, $arComponentVariables, $arVariableAliases, $arVariables);

	$arResult = array(
		"FOLDER" => $arParams["SEF_FOLDER"],
		"URL_TEMPLATES" => $arUrlTemplates,
		"VARIABLES" => $arVariables,
		"ALIASES" => $arVariableAliases,
	);
}
else
{
	$arVariableAliases = CComponentEngine::makeComponentVariableAliases($arDefaultVariableAliases, $arParams["VARIABLE_ALIASES"]);
	CComponentEngine::initComponentVariables(false, $arComponentVariables, $arVariableAliases, $arVariables);

	$componentPage = "";

	if(isset($arVariables["ELEMENT_ID"]) && intval($arVariables["ELEMENT_ID"]) > 0)
		$componentPage = "company";
	elseif(isset($arVariables["ELEMENT_CODE"]) && strlen($arVariables["ELEMENT_CODE"]) > 0)
		$componentPage = "company";
	elseif(isset($arVariables["ITEM_ID"]) && intval($arVariables["ITEM_ID"]) > 0 && ($arVariables["ELEMENT_ID"]) && intval($arVariables["ELEMENT_ID"]) > 0)

  		  $componentPage = "item";
      else
        $componentPage = "section";

	$arResult = array(
		"FOLDER" => "",
		"URL_TEMPLATES" => array(
			"section" => htmlspecialcharsbx($APPLICATION->GetCurPage()),
			"company" => htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arVariableAliases["ELEMENT_ID"]."=#ELEMENT_ID#"),
			"company" => htmlspecialcharsbx($APPLICATION->GetCurPage()."?".$arVariableAliases["ITEM_ID"]."=#ITEM_ID#&".$arVariableAliases["ELEMENT_ID"]."=#ELEMENT_ID#"),

		),
		"VARIABLES" => $arVariables,
		"ALIASES" => $arVariableAliases,
	);
}

$this->includeComponentTemplate($componentPage);
