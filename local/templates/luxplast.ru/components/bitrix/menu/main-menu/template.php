<?php
/**
 * @var array $arResult
 * @var array $arParams
 */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

$result = &$arResult;
$params = &$arParams;

if (empty($result)) {
    return;
}
global $APPLICATION;
$currentPage = $APPLICATION->GetCurPage();
?>
<div class="main-menu">
  <ul class="main-menu__list">
    <?
    foreach ($result as $item) {
      if ($params['MAX_LEVEL'] == 1 && $item['DEPTH_LEVEL'] > 1) {
        continue;
      } ?>
	      <li class="main-menu__item">
	        <? if ($item['SELECTED']) {
	          if ($currentPage == $item['LINK']) { ?>
	            <span<? if ($item['PARAMS']['SCROLL_TO']) { ?> data-scroll-to="<?=$item['PARAMS']['SCROLL_TO']?>"<? } ?> class="main-menu__link<? if (!$item['PARAMS']['SCROLL_TO']) { ?> main-menu__link--selected<? } ?>"><?=$item['TEXT']?></span>
	          <? } else { ?>
	            <a href="<?=$item['LINK']?><?=$item['PARAMS']['SCROLL_TO']?>" class="main-menu__link main-menu__link--selected"><?=$item['TEXT']?></a>
	          <? }
	        } else { ?>
	          <a href="<?=$item['LINK']?><?=$item['PARAMS']['SCROLL_TO']?>" class="main-menu__link"><?=$item['TEXT']?></a>
	        <? } ?>
	      </li>
      <? } ?>
  </ul>
</div>