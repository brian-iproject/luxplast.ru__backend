<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;
use \Bitrix\Main\IO\File;

/* Выбираем уникальные ссылки
		на аптеки, если они заданы */

if ($arResult["PROPERTIES"]["PHARMACIES"]["VALUE"] && $arResult["PROPERTIES"]["PHARMACIES_LINKS"]["VALUE"]) {
	$arResult["PHARMACIES"] = [];

	$arSelect = array("ID", "NAME", "PREVIEW_PICTURE");
	$arFilter = array("IBLOCK_ID" => 1, "ID" => $arResult["PROPERTIES"]["PHARMACIES"]["VALUE"]);
	$res = CIBlockElement::GetList(["SORT" => "DESC"], $arFilter, false, false, $arSelect);
	while ($arRes = $res->GetNext()) {
		$arRes["PREVIEW_PICTURE"] = CFile::GetFileArray($arRes["PREVIEW_PICTURE"]);
		$arResult["PHARMACIES"][$arRes["ID"]] = $arRes;
	}

	foreach ($arResult["PROPERTIES"]["PHARMACIES"]["VALUE"] as $key => $pharmacyId) {
		$arResult["PHARMACIES"][$pharmacyId]["LINK"] = $arResult["PROPERTIES"]["PHARMACIES_LINKS"]["VALUE"][$key];
	}
}

/* Выбираем типы пластырей */

$arTypeCode = [];
foreach ($arResult["PROPERTIES"]["TYPE"]["VALUE"] as $typeCode) {
	if (array_search($typeCode, $arTypeCode, true) === false) {
		$arTypeCode[] = $typeCode;
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
	$arData['UF_FILE'] = CFile::GetPath($arData['UF_FILE']);

	if (!empty($arData['UF_FILE'])) {
		$arData["UF_FILE_HTML"] = File::getFileContents($_SERVER["DOCUMENT_ROOT"] . $arData['UF_FILE']);
	}

	$arResult['TYPES'][$arData["UF_XML_ID"]] = $arData;
}