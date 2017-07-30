<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<link href="<?=SITE_TEMPLATE_PATH?>/themes/bootstrap.css" type="text/css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/themes/tether.min.js"></script>
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/themes/bootstrap.js"></script>
		<title><?$APPLICATION->ShowTitle()?></title>
	</head>

	<body>
		<?$APPLICATION->ShowPanel()?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:menu", 
			"menu", 
			array(
				"ALLOW_MULTI_SELECT" => "N",
				"CHILD_MENU_TYPE" => "left",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"DELAY" => "N",
				"MAX_LEVEL" => "1",
				"MENU_CACHE_GET_VARS" => array(
				),
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_TYPE" => "A",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"ROOT_MENU_TYPE" => "top",
				"USE_EXT" => "N",
				"COMPONENT_TEMPLATE" => "menu"
			),
			false
		);?>