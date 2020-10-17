<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
	<script>window.MSInputMethodContext && document.documentMode && document.write('<script src="https://cdn.jsdelivr.net/gh/nuxodin/ie11CustomProperties@4.1.0/ie11CustomProperties.min.js"><\x2fscript>');</script>
	<?
	$APPLICATION->ShowHead(false);

	CUtil::InitJSCore();

	use \Bitrix\Main\Page\Asset;
	$asset = Asset::getInstance();

	$asset->addCss(SITE_TEMPLATE_PATH.'/variables.css');
	$asset->addCss(SITE_TEMPLATE_PATH.'/libs/normalize/normalize.css');
	$asset->addCss('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Yanone+Kaffeesatz:wght@200;300&display=swap');

	$asset->addJs(SITE_TEMPLATE_PATH.'/libs/jquery/jquery-3.4.1.min.js');
	$asset->addJs(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.min.js');
	$asset->addJs(SITE_TEMPLATE_PATH.'/libs/slick/slick.min.js');
	$asset->addJs(SITE_TEMPLATE_PATH.'/libs/maskedinput/jquery.maskedinput.min.js');
	$asset->addJs(SITE_TEMPLATE_PATH.'/libs/formstyler/jquery.formstyler.min.js');

	$asset->addJs(SITE_TEMPLATE_PATH.'/script.js');

	$asset->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
	$asset->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');

	$asset->addString('<link rel="shortcut icon" href="'.SITE_TEMPLATE_PATH.'/favicon.ico" type="image/x-icon">');
	$asset->addString('<link rel="icon" href="'.SITE_TEMPLATE_PATH.'/favicon.ico" type="image/x-icon">');

	$asset->addCss(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.min.css');
	$asset->addCss(SITE_TEMPLATE_PATH.'/libs/slick/slick.css');
	$asset->addCss(SITE_TEMPLATE_PATH.'/libs/formstyler/jquery.formstyler.css');

	$asset->addCss(SITE_TEMPLATE_PATH.'/blocks/advantages/style.css');
	$asset->addCss(SITE_TEMPLATE_PATH.'/blocks/instructions/style.css');
	$asset->addCss(SITE_TEMPLATE_PATH.'/blocks/page-content/style.css');
	$asset->addCss(SITE_TEMPLATE_PATH.'/blocks/page-footer/style.css');
	$asset->addCss(SITE_TEMPLATE_PATH.'/blocks/page-header/style.css');
	$asset->addCss(SITE_TEMPLATE_PATH.'/blocks/plasters-type/style.css');
	$asset->addCss(SITE_TEMPLATE_PATH.'/blocks/spray-block/style.css');

	$asset->addJs(SITE_TEMPLATE_PATH.'/blocks/instructions/script.js');
	?>

</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="page-wrapper">
	<header class="page-header" id="header">
		<div class="page-container page-header__inner">
			<div class="page-header__top">
				<div class="page-header__logo">
					<div class="page-header__logo-name">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_TEMPLATE_PATH."/includes-area/logo.php",
								"EDIT_TEMPLATE" => ""
						),
								false
						);?>
					</div>
					<div class="page-header__logo-slogan">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_TEMPLATE_PATH."/includes-area/slogan.php",
								"EDIT_TEMPLATE" => ""
						),
								false
						);?>
					</div>
				</div>
				<div class="page-header__buttons">
					<button class="site-button site-button--white" data-form="feedback">Задать вопрос</button>
					<button class="site-button site-button--white-fill" data-form="reviews">Оставить отзыв</button>
				</div>
			</div>
			<div class="page-header__heading">
				<div class="page-header__heading-title">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH."/includes-area/logo.php",
							"EDIT_TEMPLATE" => ""
					),
							false
					);?>
				</div>
				<div class="page-header__heading-subtitle">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH."/includes-area/subtitle.php",
							"EDIT_TEMPLATE" => ""
					),
							false
					);?>
				</div>
				<div class="page-header__heading-description">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH."/includes-area/heading-description.php",
							"EDIT_TEMPLATE" => ""
					),
							false
					);?>
				</div>
			</div>

			<nav class="page-header__nav">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"main-menu",
					array(
						"COMPONENT_TEMPLATE" => "main-menu",
						"ROOT_MENU_TYPE" => "top",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "N",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "left",
						"USE_EXT" => "N",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "Y"
					),
					false
				);?>
			</nav>
		</div>
	</header>

	<main class="page-content">
		<? if ($APPLICATION->GetCurPage() != SITE_DIR) { ?>
			<div class="page-container page-content__wide-block">
				<h1 class="ta-c"><?=$APPLICATION->ShowTitle(false)?></h1>
		<? } ?>