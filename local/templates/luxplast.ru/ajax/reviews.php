<?
define("STOP_STATISTICS", true);
define("PUBLIC_AJAX_MODE", true);
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
?>
<div>
<?$APPLICATION->IncludeComponent(
		"pixelplus:feedback",
		"site-form",
		array(
				"ADDDATA_IN_INFOBLOCK" => "Y",
				"ADD_PLACEHOLDER" => "Y",
				"AJAX_VARIBLE" => "",
				"CACHE_TIME" => "0",
				"CACHE_TYPE" => "A",
				"EVENT_MESSAGE_ID" => array(
						0 => "11",
						1 => "",
				),
				"EVENT_NAME" => "FEEDBACK_FORM",
				"FIELDS_LIST" => array(
						0 => "NAME",
						1 => "PHONE",
						2 => "EMAIL",
						3 => "MESSAGE",
						4 => "PHOTO",
						5 => "",
				),
				"FIELDS_LIST_REQUIRED" => array(
						0 => "NAME",
						1 => "EMAIL",
						2 => "MESSAGE",
				),
				"FIELDS_PREFIX" => "REVIEWS",
				"FORM_NAME" => "Оставить отзыв",
				"PARAM_FOR_PT" => array(
						0 => "PRODUCT_ID",
						1 => "",
				),
				"PX_AJAX" => "N",
				"SHOW_ERROR_LIST" => "N",
				"USE_BASE" => "N",
				"USE_CAPTCHA" => "N",
				"USE_CSS_FILE" => "Y",
				"USE_JS_FILE" => "N",
				"COMPONENT_TEMPLATE" => "site-form",
				"IBLOCK_ID" => "3",
				"ADDDATA_IN_INFOBLOCK_NAME" => "#NAME#",
				"SECTION_ID" => "",
				"ADD_NA" => "Y",
				"PREVIEW_TEXT_FIELDS" => "MESSAGE",
				"WRITE_TO_DETAIL_TEXT" => "N",
				"FORM_DESCRIPTION" => "",
				"BASE_IBLOCK_ID" => "2",
				"BASE_ID" => $_REQUEST["PRODUCT_ID"],
				"FORM_CSS_CLASS" => "",
				"YM_COUNTER_ID" => "",
				"YM_GOAL_ID_SUBMIT" => "",
				"YM_GOAL_ID_SUCCESS" => "",
				"AJAX_MODE" => "Y"
		),
		false
);?>
</div>
<? require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); ?>