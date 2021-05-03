<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

	if($arResult['PROPERTIES']['MORE_PHOTO']['VALUE']){
		$photos = [];
		foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $key => $photoId) {
			$arPhoto = CFile::ResizeImageGet($photoId, ["width" => 150, "height" => 150], BX_RESIZE_IMAGE_EXACT, true, false, false, 100);
			$arPhotoBig = CFile::ResizeImageGet($photoId, ["width" => 800, "height" => 600], BX_RESIZE_IMAGE_PROPORTIONAL, true, false, false, 100);
			$photos[] = ['SRC'=>$arPhoto['src'], 'SRC_BIG' => $arPhotoBig['src'], 'ALT'=>$arResult['PROPERTIES']['MORE_PHOTO']['DESCRIPTION'][$key]];
		}

		$arResult['GALLARY_PHOTOS'] = $photos;
		$this->__component->SetResultCacheKeys(['GALLARY_PHOTOS']);
	}?>

  
