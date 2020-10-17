<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
$APPLICATION->SetTitle("Потерялись?");
$APPLICATION->AddChainItem("404");
?>
<div class="h3">Страница не найдена или такой страницы больше нет</div>
<p>К сожалению, такой страницы не существует.</p>
<p>Предлагаем перейти на <a href="/">главную страницу</a>.</p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>