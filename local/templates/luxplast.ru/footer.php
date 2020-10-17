<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
		<? if ($APPLICATION->GetCurPage() != SITE_DIR) { ?>
			</div>
		<? } ?>
	</main>

	<footer class="page-footer">
		<button class="site-button" data-form="feedback"><span class="site-button__text">Задать вопрос</span></button>
		<button class="site-button site-button--fill" data-form="reviews"><span class="site-button__text">Оставить отзыв</span></button>
		<div class="page-container page-footer__inner">
			<div class="page-footer__license">
				<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH."/includes-area/registration-certificate.php",
						"EDIT_TEMPLATE" => ""
				),
						false
				);?>
			</div>
			<div class="page-footer__contraindications">
				<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH."/includes-area/contraindications.php",
						"EDIT_TEMPLATE" => ""
				),
						false
				);?>
			</div>
		</div>
	</footer>
</div>
</body>
</html>