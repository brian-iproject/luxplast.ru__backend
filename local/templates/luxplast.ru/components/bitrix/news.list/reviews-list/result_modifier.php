<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
foreach ($arResult['ITEMS'] as &$arItem) {
	if ($arItem["PROPERTIES"]["PHOTO"]["VALUE"]) {
		$arResized = CFile::ResizeImageGet(
				$arItem["PROPERTIES"]["PHOTO"]["VALUE"],
				Array('width' => 84, 'height' => 84),
				BX_RESIZE_IMAGE_EXACT,
				false
		);
		foreach ($arResized as $key => $value) {
			$arItem["PX_PREVIEW_PICTURE"][strtoupper($key)] = $value;
		}
	}
}