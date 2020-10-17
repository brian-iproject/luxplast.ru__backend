<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
	die();
}

$result = &$arResult;
$params = &$arParams;

foreach ($result as &$item) {
	if (strpos($item['LINK'], 'index.php') !== false)
		$item['LINK'] = str_replace('index.php', '', $item['LINK']);
}

