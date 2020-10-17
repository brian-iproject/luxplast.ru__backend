<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

$arTypeCode = [];
foreach ($arResult["ITEMS"] as $arItem) {
	foreach ($arItem["PROPERTIES"]["TYPE"]["VALUE"] as $typeCode) {
		if (array_search($typeCode, $arTypeCode, true) === false) {
			$arTypeCode[] = $typeCode;
		}
	}
}

if (empty($arTypeCode)) return false;

$hlblock_id = 2;
$hlblock = HL\HighloadBlockTable::getById($hlblock_id)->fetch();
$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

$rsData = $entity_data_class::getList(array(
		"select" => array("*", "UF_FILE"),
		"order" => array("ID" => "ASC"),
		"filter" => array("UF_XML_ID" => $arTypeCode)
));

while ($arData = $rsData->Fetch()) {
	$arResult['TYPES'][$arData["UF_XML_ID"]] = $arData;
}