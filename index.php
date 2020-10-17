<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("LUXPLAST® Пластыри на все случаи жизни");
?>
<div class="page-container page-content__wide-block">
	<div class="h1">Хиты</div>
	<?
	$GLOBALS["filterHits"] = array(
			"SECTION_ID" => 1,
			"!PROPERTY_HIT" => false
	);
	$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"product-list",
			array(
					"COMPONENT_TEMPLATE" => "product-list",
					"IBLOCK_TYPE" => "products",
					"IBLOCK_ID" => "4",
					"NEWS_COUNT" => "20",
					"SORT_BY1" => "ACTIVE_FROM",
					"SORT_ORDER1" => "DESC",
					"SORT_BY2" => "SORT",
					"SORT_ORDER2" => "ASC",
					"FILTER_NAME" => "filterHits",
					"FIELD_CODE" => array(
							0 => "",
							1 => "",
					),
					"PROPERTY_CODE" => array(
							0 => "TYPE",
							1 => "HIT",
							2 => "PRICE",
							3 => "",
							4 => "",
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
					"CACHE_GROUPS" => "Y",
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
					"INCLUDE_SUBSECTIONS" => "Y",
					"STRICT_SECTION_CHECK" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Новости",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"SET_STATUS_404" => "N",
					"SHOW_404" => "N",
					"MESSAGE_404" => "",
					"SLICK_SLIDER" => "Y"
			),
			false
	);?>
</div>
<div class="page-container page-content__wide-block">
	<div class="h1">Наборы</div>
	<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"product-filter",
			array(
					"COMPONENT_TEMPLATE" => "product-filter",
					"IBLOCK_TYPE" => "products",
					"IBLOCK_ID" => "4",
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
							0 => "TYPE",
							1 => "SPECIFICATIONS",
							2 => "PRICE",
							3 => "",
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
					"CACHE_GROUPS" => "Y",
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
					"PARENT_SECTION" => "1",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "Y",
					"STRICT_SECTION_CHECK" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
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
	<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"product-list",
			array(
					"COMPONENT_TEMPLATE" => "product-list",
					"IBLOCK_TYPE" => "products",
					"IBLOCK_ID" => "4",
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
							0 => "TYPE",
							1 => "SPECIFICATIONS",
							2 => "PRICE",
							3 => "",
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
					"CACHE_GROUPS" => "Y",
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
					"PARENT_SECTION" => "1",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "Y",
					"STRICT_SECTION_CHECK" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Новости",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"SET_STATUS_404" => "N",
					"SHOW_404" => "N",
					"MESSAGE_404" => "",
					"SLICK_SLIDER" => "Y"
			),
			false
	);?>
</div>

<div class="page-container page-content__wide-block">
	<div class="h1">Основы пластырей LUXPLAST<sup>®</sup></div>
	<div class="plasters-type">
		<div class="plasters-type__item">
			<div class="plasters-type__item-inner">
				<div class="plasters-type__title">Полимерная:</div>
				<div class="plasters-type__desc">
					<ul class="ul-marker">
						<li>Водонепроницаемая</li>
					</ul>
				</div>
				<div class="plasters-type__image">
					<img src="<?=SITE_TEMPLATE_PATH?>/blocks/plasters-type/images/type1.png" alt="">
				</div>
			</div>
		</div>
		<div class="plasters-type__item">
			<div class="plasters-type__item-inner">
				<div class="plasters-type__title">Нетканная:</div>
				<div class="plasters-type__desc">
					<ul class="ul-marker">
						<li>Подходит для чувствительной кожи</li>
						<li>Воздухопроницаемая</li>
					</ul>
				</div>
				<div class="plasters-type__image">
					<img src="<?=SITE_TEMPLATE_PATH?>/blocks/plasters-type/images/type2.png" alt="">
				</div>
			</div>
		</div>
		<div class="plasters-type__item">
			<div class="plasters-type__item-inner">
				<div class="plasters-type__title">Тканевая:</div>
				<div class="plasters-type__desc">
					<ul class="ul-marker">
						<li>Эластичная</li>
						<li>Воздухопроницаемая</li>
						<li>Надежно фиксируется на коже</li>
					</ul>
				</div>
				<div class="plasters-type__image">
					<img src="<?=SITE_TEMPLATE_PATH?>/blocks/plasters-type/images/type3.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>

<div class="page-container page-content__wide-block">
	<div class="h1">Спрей-пластырь</div>
	<div class="spray-block">
		<div class="spray-block__product">
			<?$APPLICATION->IncludeComponent(
					"bitrix:news.list",
					"product-list",
					array(
							"COMPONENT_TEMPLATE" => "product-list",
							"IBLOCK_TYPE" => "products",
							"IBLOCK_ID" => "4",
							"NEWS_COUNT" => "1",
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
									0 => "TYPE",
									1 => "SPECIFICATIONS",
									2 => "PRICE",
									3 => "",
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
							"CACHE_GROUPS" => "Y",
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
							"PARENT_SECTION" => "2",
							"PARENT_SECTION_CODE" => "",
							"INCLUDE_SUBSECTIONS" => "Y",
							"STRICT_SECTION_CHECK" => "N",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"PAGER_TEMPLATE" => ".default",
							"DISPLAY_TOP_PAGER" => "N",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"PAGER_TITLE" => "Новости",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"SET_STATUS_404" => "N",
							"SHOW_404" => "N",
							"MESSAGE_404" => "",
							"SLICK_SLIDER => "
					),
					false
			);?>
		</div>
		<div class="spray-block__video">
			<img src="<?=SITE_TEMPLATE_PATH?>/blocks/spray-block/images/spray-video.jpg" alt="">
		</div>
	</div>
</div>

<div class="page-container page-content__wide-block">
	<div class="instructions">
		<div class="instructions__title">Инструкция по применению</div>
		<div class="instructions__tabs">
			<div class="instructions-tabs js-instructions-tabs">
				<button class="instructions-tabs__item">Наборы</button>
				<button class="instructions-tabs__item">Для сухих мозолей</button>
				<button class="instructions-tabs__item">Спрей</button>
				<button class="instructions-tabs__item">Перцовые</button>
			</div>
		</div>
		<div class="instructions__panels">
			<div class="instructions-panels js-instructions__panels">
				<div class="instructions-panels__item">
					<div class="instructions-list">
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="40" height="40">
									<use xlink:href="#icon-box" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Вскрыть упаковку, снять защитный бумажный слой и зафиксировать лейкопластырь на сухой чистой коже.</div>
						</div>
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="45" height="45">
									<use xlink:href="#icon-replace" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Рекомендуется менять лейкопластыри по мере необходимости, но не реже одного раза в день.</div>
						</div>
					</div>
				</div>
				<div class="instructions-panels__item">
					<div class="instructions-list">
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="30" height="52">
									<use xlink:href="#icon-thermometer" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Распарить мозоль в течение 15-20 мин.</div>
						</div>
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="35" height="45">
									<use xlink:href="#icon-drop" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Вытереть кожу досуха.</div>
						</div>
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="40" height="40">
									<use xlink:href="#icon-box" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Вскрыть упаковку, отделить пластырь от бумажной основы и зафиксировать на коже так, чтобы центральняа часть подушечки с салициловой кислотой располагалась точно по центру мозоли.</div>
						</div>
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="45" height="45">
									<use xlink:href="#icon-replace" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Процедуру повторять каждый раз при смене лейкопластыря.</div>
						</div>
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="40" height="47">
									<use xlink:href="#icon-timer" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Продолжать курс до полного исчезновения мозоли.</div>
						</div>
					</div>
				</div>
				<div class="instructions-panels__item">
					<div class="instructions-list">
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="35" height="45">
									<use xlink:href="#icon-drop" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Очистить, продезинфицировать и высушить рану.</div>
						</div>
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="32" height="53">
									<use xlink:href="#icon-spray" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Встряхнуть баллон и направить на рану струю спрея с расстояния 5-ти сантиметров для создания пленки.</div>
						</div>
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="40" height="47">
									<use xlink:href="#icon-timer" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Подождать 30 секунд.</div>
						</div>
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="45" height="45">
									<use xlink:href="#icon-replace" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">При необходимости повторить процедуру.</div>
						</div>
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="44" height="49">
									<use xlink:href="#icon-interval" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Наносить пластырь-спреи не реже одного раза в день.  Длительность действия защитной пленки составляет 24 часа. Смывается водой с мылом.</div>
						</div>
					</div>
				</div>
				<div class="instructions-panels__item">
					<div class="instructions-list">
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="35" height="45">
									<use xlink:href="#icon-drop" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Перед использованием пластыря вытрите кожу насухо.</div>
						</div>
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="40" height="40">
									<use xlink:href="#icon-box" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Вскройте упаковку, удалите защитный слой бумаги и зафиксируйте пластырь на коже, слегка прижав и разгладив. </div>
						</div>
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="45" height="45">
									<use xlink:href="#icon-replace" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">Меняйте пластырь по мере необходимости. </div>
						</div>
						<div class="instructions-list__item">
							<div class="instructions-list__icon">
								<svg class="svg-icon" width="40" height="47">
									<use xlink:href="#icon-timer" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
								</svg>
							</div>
							<div class="instructions-list__title">При отсутствии сильного жжения пластырь можно не снимать в течение двух суток.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="page-container page-content__wide-block">
	<div class="h1">Пластыри-катушки</div>
	<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"product-filter",
			array(
					"COMPONENT_TEMPLATE" => "product-filter",
					"IBLOCK_TYPE" => "products",
					"IBLOCK_ID" => "4",
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
							0 => "TYPE",
							1 => "SPECIFICATIONS",
							2 => "PRICE",
							3 => "",
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
					"CACHE_GROUPS" => "Y",
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
					"PARENT_SECTION" => "3",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "Y",
					"STRICT_SECTION_CHECK" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
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
	<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"product-list",
			array(
					"COMPONENT_TEMPLATE" => "product-list",
					"IBLOCK_TYPE" => "products",
					"IBLOCK_ID" => "4",
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
							0 => "TYPE",
							1 => "SPECIFICATIONS",
							2 => "PRICE",
							3 => "",
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
					"CACHE_GROUPS" => "Y",
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
					"PARENT_SECTION" => "3",
					"PARENT_SECTION_CODE" => "",
					"INCLUDE_SUBSECTIONS" => "Y",
					"STRICT_SECTION_CHECK" => "N",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Новости",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"SET_STATUS_404" => "N",
					"SHOW_404" => "N",
					"MESSAGE_404" => "",
					"SLICK_SLIDER" => "Y",
					"ADD_CLASS" => "product-list--big"
			),
			false
	);?>
</div>

<div class="page-container page-content__wide-block">
	<div class="h1">Преимущества</div>
	<div class="advantages">
		<div class="advantages__list">
			<div class="advantages__item">
				<div class="advantages__icon">
					<svg class="svg-icon">
						<use xlink:href="#icon-factory" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
					</svg>
				</div>
				<div class="advantages__title">Собственное производство пластырей</div>
			</div>
			<div class="advantages__item">
				<div class="advantages__icon">
					<svg class="svg-icon">
						<use xlink:href="#icon-award" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
					</svg>
				</div>
				<div class="advantages__title">Качественные материалы</div>
			</div>
			<div class="advantages__item">
				<div class="advantages__icon">
					<svg class="svg-icon">
						<use xlink:href="#icon-feather" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
					</svg>
				</div>
				<div class="advantages__title">Гипоаллергенный клеевой слой</div>
			</div>
			<div class="advantages__item">
				<div class="advantages__icon">
					<svg class="svg-icon">
						<use xlink:href="#icon-plast" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
					</svg>
				</div>
				<div class="advantages__title">Надежная фиксация</div>
			</div>
		</div>
	</div>
</div>

<div class="page-container page-content__wide-block">
	<div class="h1">Стрип-ленты</div>
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"product-list",
		array(
			"COMPONENT_TEMPLATE" => "product-list",
			"IBLOCK_TYPE" => "products",
			"IBLOCK_ID" => "4",
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
				0 => "TYPE",
				1 => "SPECIFICATIONS",
				2 => "PRICE",
				3 => "",
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
			"CACHE_GROUPS" => "Y",
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
			"PARENT_SECTION" => "4",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "Y",
			"STRICT_SECTION_CHECK" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"PAGER_TITLE" => "Новости",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"SET_STATUS_404" => "N",
			"SHOW_404" => "N",
			"MESSAGE_404" => "",
			"SLICK_SLIDER" => "Y",
			"ADD_CLASS" => "product-list--big"
		),
		false
	);?>
</div>

<div class="page-container page-content__wide-block">
	<div class="h1">Перцовые пластыри</div>
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"product-list",
		array(
			"COMPONENT_TEMPLATE" => "product-list",
			"IBLOCK_TYPE" => "products",
			"IBLOCK_ID" => "4",
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
				0 => "TYPE",
				1 => "SPECIFICATIONS",
				2 => "PRICE",
				3 => "",
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
			"CACHE_GROUPS" => "Y",
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
			"PARENT_SECTION" => "5",
			"PARENT_SECTION_CODE" => "",
			"INCLUDE_SUBSECTIONS" => "Y",
			"STRICT_SECTION_CHECK" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"PAGER_TITLE" => "Новости",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"SET_STATUS_404" => "N",
			"SHOW_404" => "N",
			"MESSAGE_404" => "",
			"SLICK_SLIDER" => "Y"
		),
		false
	);?>
</div>

<div class="page-container page-content__wide-block" id="reviews-list">
	<div class="h1">Отзывы</div>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"reviews-list", 
	array(
		"COMPONENT_TEMPLATE" => "reviews-list",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "3",
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
			0 => "POST",
			1 => "PHOTO",
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
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
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
</div>

<div class="page-container page-content__wide-block" id="faq-list">
	<div class="h1">Вопросы и ответы</div>
	<?$APPLICATION->IncludeComponent("bitrix:news.list", "faq-list", Array(
		"COMPONENT_TEMPLATE" => "faq-list",
			"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
			"IBLOCK_ID" => "2",	// Код информационного блока
			"NEWS_COUNT" => "20",	// Количество новостей на странице
			"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
			"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
			"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
			"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
			"FILTER_NAME" => "",	// Фильтр
			"FIELD_CODE" => array(	// Поля
				0 => "",
				1 => "",
			),
			"PROPERTY_CODE" => array(	// Свойства
				0 => "",
				1 => "",
			),
			"CHECK_DATES" => "N",	// Показывать только активные на данный момент элементы
			"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
			"AJAX_MODE" => "N",	// Включить режим AJAX
			"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
			"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
			"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
			"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
			"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
			"CACHE_GROUPS" => "N",	// Учитывать права доступа
			"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
			"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
			"SET_TITLE" => "N",	// Устанавливать заголовок страницы
			"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
			"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
			"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
			"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
			"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
			"PARENT_SECTION" => "",	// ID раздела
			"PARENT_SECTION_CODE" => "",	// Код раздела
			"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
			"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
			"DISPLAY_DATE" => "N",	// Выводить дату элемента
			"DISPLAY_NAME" => "N",	// Выводить название элемента
			"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
			"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
			"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
			"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
			"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
			"PAGER_TITLE" => "Новости",	// Название категорий
			"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
			"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
			"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
			"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
			"SET_STATUS_404" => "N",	// Устанавливать статус 404
			"SHOW_404" => "N",	// Показ специальной страницы
			"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		),
		false
	);?>
</div>

<div class="page-container page-content__wide-block" id="where-buy">
	<div class="h1">Где купить</div>
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"where-buy", 
	array(
		"COMPONENT_TEMPLATE" => "where-buy",
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
			0 => "LINK",
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
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>