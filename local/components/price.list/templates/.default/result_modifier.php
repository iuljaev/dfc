<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

	if($arResult['DISPLAY_PROPERTIES']['FILE']){
		$file = [];
		foreach ($arResult['DISPLAY_PROPERTIES']['FILE'] as $key => $fileId) {
			$arFile = CFile::CheckFile(array ("name","size","type"),0,false,false,false,false);
			$file[] = ['NAME'=>$arFile['name'], 'SIZE' => $arFile['size'], 'TYPE' => $arFile['type']];
		}

		$arResult['FILE'] = $file;

	}?>
