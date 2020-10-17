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
<? if (count($arResult["TYPES"]) > 0 && $arParams["NOT_FILTER"] != "Y") { ?>
	<div class="product-filter" data-section-id="<?=$arResult["SECTION"]["PATH"][0]["ID"]?>">
		<? foreach($arResult['TYPES'] as $type) { ?>
			<div class="product-filter__item<? if (strpos($type['UF_XML_ID'], 'all' ) !== false) { ?> -is-active<? } ?>" data-filter-type="<?=$type['UF_XML_ID']?>">
				<? if ($type['UF_FILE_HTML']) { ?>
					<div class="product-filter__icon">
						<?=$type['UF_FILE_HTML']?>
					</div>
				<? } ?>
				<span class="product-filter__link"><?=$type['UF_NAME']?></span>
			</div>
		<? } ?>
	</div>
<? } ?>