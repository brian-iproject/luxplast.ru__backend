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

$productClass = "product-list";
if (count($arResult["ITEMS"]) === 1)
	$productClass .= ' product-list--one';
if ($arParams["SLICK_SLIDER"] == "Y")
	$productClass .= ' js-product-list';
if ($arParams["ADD_CLASS"])
	$productClass .= ' '.$arParams["ADD_CLASS"];
?>
<div class="<?=$productClass?>" data-section-id="<?=$arResult["SECTION"]["PATH"][0]["ID"]?>">
	<? foreach($arResult["ITEMS"] as $arItem) { ?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="product-list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>"<? if ($arItem["PROPERTIES"]["TYPE"]["VALUE"]) { ?>  data-product-type="<?=implode(",", $arItem["PROPERTIES"]["TYPE"]["VALUE"])?>"<? } ?>>
			<div class="product-list__item-inner" data-product-id="<?=$arItem["ID"]?>">
				<? if ($arItem["PROPERTIES"]["HIT"]["VALUE"]) { ?>
					<div class="product-list__hit">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="58.69853" height="58.29972" viewBox="0 0 58.69853 58.29972">
							<defs>
								<radialGradient id="a" data-name="Безымянный градиент" cx="-284.95788" cy="427.5319" r="1" gradientTransform="matrix(-29.9062, -34.6797, -42.86941, 36.96863, 9847.7965, -25629.43671)" gradientUnits="userSpaceOnUse">
									<stop offset="0" stop-color="#ffca0d"/>
									<stop offset="1" stop-color="#fea014"/>
								</radialGradient>
							</defs>
							<path d="M28.8449.8172a2,2,0,0,1,2.3102,0l4.5004,3.18389a2,2,0,0,0,1.4191.34979l5.4645-.72777a2,2,0,0,1,2.0456,1.0736L47.09,9.60735a1.99986,1.99986,0,0,0,1.094.96925l5.1768,1.8951a1.99973,1.99973,0,0,1,1.3123,1.9012l-.0637,5.5124a1.99959,1.99959,0,0,0,.5183,1.3666l3.7031,4.0838a2.00008,2.00008,0,0,1,.2785,2.2934L56.491,32.4804a2.00014,2.00014,0,0,0-.1761,1.451l1.3811,5.3369a2.00018,2.00018,0,0,1-.8192,2.1601l-4.5729,3.0789a1.99958,1.99958,0,0,0-.8302,1.2029l-1.2573,5.3675a2.00006,2.00006,0,0,1-1.7292,1.5319l-5.4799.6011a2.00009,2.00009,0,0,0-1.2942.6793l-3.6077,4.1684a1.99983,1.99983,0,0,1-2.243.5528l-5.1316-2.0143a2,2,0,0,0-1.4616,0l-5.1316,2.0143a1.99983,1.99983,0,0,1-2.243-.5528L18.2869,53.89a2.00009,2.00009,0,0,0-1.2942-.6793l-5.4799-.6011a2,2,0,0,1-1.72918-1.5319L8.52635,45.7102a2.00009,2.00009,0,0,0-.83029-1.2029L3.12321,41.4284A2.00006,2.00006,0,0,1,2.304,39.2683l1.38114-5.3369a2.00011,2.00011,0,0,0-.17618-1.451L.89074,27.6291a2.00008,2.00008,0,0,1,.27847-2.2934l3.70314-4.0838a1.99991,1.99991,0,0,0,.51829-1.3666l-.06378-5.5124A1.9998,1.9998,0,0,1,6.6392,12.4717l5.1768-1.8951a1.99986,1.99986,0,0,0,1.094-.96925l2.5053-4.91064a2,2,0,0,1,2.0456-1.0736l5.4645.72777a2,2,0,0,0,1.4191-.34979Z" transform="translate(-0.65075 -0.44991)" style="fill: url(#a)"/>
							<path d="M13.8399,25.4608l2.7511,3.7156,2.4653-3.9111,3.4176-.128-3.9653,6.1828,4.7789,6.3955-3.4356.1288-3.0883-4.0632L14.024,38.0628l-3.3637.126,4.2556-6.608-4.4396-5.9939Zm10.3107-.3864,2.896-.1085.3074,8.2022,5.7004-8.4274,2.734-.1024.4719,12.5911-2.878.1079-.3067-8.1843-5.7011,8.4094-2.752.1032Zm24.4851,1.4601-4.0292.151.3829,10.2168-2.878.1079-.3829-10.2169-4.0112.1504-.0889-2.3744,10.9183-.4091Z" transform="translate(-0.65075 -0.44991)" style="fill: #fff"/>
						</svg>
					</div>
				<? } ?>
				<div class="product-list__image"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" loading="lazy"></div>
				<div class="product-list__title"><?=$arItem["NAME"]?></div>
				<? if ($arItem["PROPERTIES"]["PRICE"]["VALUE"]) { ?>
					<div class="product-list__price">от <?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> р.</div>
				<? } ?>
			</div>
		</div>
	<? } ?>
</div>