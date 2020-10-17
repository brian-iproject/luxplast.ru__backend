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
<style>
	<? include($_SERVER["DOCUMENT_ROOT"].$templateFolder."/style.css"); ?>
</style>


<div class="product-card">
	<div class="product-card__image">
		<? if ($arResult["DETAIL_PICTURE"]["SRC"]) { ?>
			<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">
		<? } ?>

		<? if ($arResult["PROPERTIES"]["TYPE"]["VALUE"] ) { ?>
			<div class="product-card__types">
				<? foreach ($arResult["PROPERTIES"]["TYPE"]["VALUE"] as $type) {
					if ($type !== "all") {
						echo $arResult["TYPES"][$type]["UF_FILE_HTML"];
					}
				} ?>
			</div>
		<? } ?>
	</div>
	<div class="product-card__info">
		<h2><?=$arResult['NAME']?></h2>
		<? if ($arResult["PROPERTIES"]["LIST_DESCRIPTION"]["VALUE"]["TEXT"]) { ?>
			<div class="product-card__description">
				<p><?=$arResult["PROPERTIES"]["LIST_DESCRIPTION"]["VALUE"]["TEXT"]?></p>
			</div>
		<? } ?>
		<? if ($arResult["PROPERTIES"]["LIST_USAGE"]["VALUE"]["TEXT"]) { ?>
			<div class="product-card__description">
				<p class="fw-500"><?=$arResult["PROPERTIES"]["LIST_USAGE"]["NAME"]?></p>
				<p><?= $arResult["PROPERTIES"]["LIST_USAGE"]["VALUE"]["TEXT"]?></p>
			</div>
		<? } ?>
		<? if ($arResult["PROPERTIES"]["LIST_CONTRAINDICATIONS"]["VALUE"]["TEXT"]) { ?>
			<div class="product-card__description">
				<p class="fw-500"><?=$arResult["PROPERTIES"]["LIST_CONTRAINDICATIONS"]["NAME"]?></p>
				<p><?= $arResult["PROPERTIES"]["LIST_CONTRAINDICATIONS"]["VALUE"]["TEXT"]?></p>
			</div>
		<? } ?>
		<? if ($arResult["PROPERTIES"]["LIST_PRECAUTIONS"]["VALUE"]["TEXT"]) { ?>
			<div class="product-card__description">
				<p class="fw-500"><?=$arResult["PROPERTIES"]["LIST_PRECAUTIONS"]["NAME"]?></p>
				<p><?= $arResult["PROPERTIES"]["LIST_PRECAUTIONS"]["VALUE"]["TEXT"]?></p>
			</div>
		<? } ?>

		<dl class="product-card__props">
			<?
			$propList = [
					'LIST_PROPERTIES',
					//'LIST_USAGE',
					//'LIST_CONTRAINDICATIONS',
					'LIST_COMPONENTS',
					//'LIST_PRECAUTIONS',
					'LIST_COMPOSITION',
					'LIST_MATERIAL',
					'LIST_COLOR',
					'LIST_VOLUME',
					'LIST_SIZE',
					'LIST_LENGTH',
					'LIST_WIDTH',
					'LIST_PACKAGE',
					'LIST_EVROPODVES',
					'LIST_PACKING',
					'LIST_BLOCK',
					'LIST_CARTON',
					'LIST_IMN',
					'LIST_CERTIFICATE',
					'LIST_MANUFACTURER',
					'LIST_COUNTRY',
					'LIST_STORAGE',
					'LIST_SHELFLIFE',
			];
			foreach ($propList as $prop) {
				?>
				<? if ($arResult["PROPERTIES"][$prop]["VALUE"]) { ?>
					<dt><span><?=$arResult['PROPERTIES'][$prop]['NAME']?></span></dt>
					<? if (!empty($arResult["PROPERTIES"][$prop]["VALUE"]["TEXT"])) { ?>
						<dd><span><?=$arResult["PROPERTIES"][$prop]["VALUE"]["TEXT"]?></span></dd>
					<? } else { ?>
						<dd><span><?=$arResult["PROPERTIES"][$prop]["VALUE"]?></span></dd>
					<? } ?>
				<? } ?>
			<? } ?>
		</dl>
	</div>
</div>

<div class="h2">Где купить</div>
<? if ($arResult["PHARMACIES"]) { ?>
	<div class="where-buy-pc">
		<div class="where-buy-pc__inner">
			<?foreach($arResult["PHARMACIES"] as $arItem) { ?>
				<div class="where-buy-pc__item">
					<? if ($arItem['LINK']) { ?>
						<a href="<?=$arItem['LINK']?>" target="_blank">
					<? } ?>
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
					<? if ($arItem['LINK']) { ?>
						</a>
					<? } ?>
				</div>
			<? } ?>
		</div>
	</div>
<? } else { ?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"where-buy-pc",
	array(
			"COMPONENT_TEMPLATE" => "where-buy-pc",
			"IBLOCK_TYPE" => "content",
			"IBLOCK_ID" => "1",
			"NEWS_COUNT" => "20",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_ORDER1" => "DESC",
			"SORT_BY2" => "SORT",
			"SORT_ORDER2" => "ASC",
			"FILTER_NAME" => "",
			"FIELD_CODE" => array(
					0 => "",
					1 => "",
			),
			"PROPERTY_CODE" => array(
					0 => "",
					1 => "",
			),
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "N",
			"PREVIEW_TRUNCATE_LEN" => "",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"SET_TITLE" => "N",
			"SET_BROWSER_TITLE" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_LAST_MODIFIED" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "N",
			"STRICT_SECTION_CHECK" => "N",
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "Новости",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"SET_STATUS_404" => "N",
			"SHOW_404" => "N",
			"MESSAGE_404" => ""
	),
	false
);?>
<? } ?>
