<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="reviews-list js-reviews-list">
	<? foreach($arResult["ITEMS"] as $arItem) { ?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="reviews-list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="reviews-list__item-inner">
				<? if ($arItem["PX_PREVIEW_PICTURE"]["SRC"]) { ?>
					<div class="reviews-list__image"><img src="<?=$arItem["PX_PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"></div>
				<? } ?>
				<div class="reviews-list__name"><?=$arItem["NAME"]?></div>
				<div class="reviews-list__post"><?=$arItem["PROPERTIES"]["POST"]["VALUE"]?></div>
				<div class="reviews-list__description"><?=$arItem["PREVIEW_TEXT"]?></div>
			</div>
		</div>
	<? } ?>
</div>
