<footer class="site-footer">
<div class="container">
	<div class="row">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/homeSample/include/about.php"
	)
);?>
		
		 <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"FootMenu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "FootMenu",
		"MENU_THEME" => "site"
	),
	false
);?>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/homeSample/include/follow.php"
	)
);?>
	<div class="row pt-5 mt-5 text-center">
		<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/homeSample/include/bott.php"
	)
);?>
	</div>
</div>
</footer>
  <?
 use Bitrix\Main\Page\Asset; 
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery-3.3.1.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery-migrate-3.0.1.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery-ui.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/popper.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/bootstrap.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/owl.carousel.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/mediaelement-and-player.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery.stellar.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery.countdown.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/jquery.magnific-popup.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/bootstrap-datepicker.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/aos.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH .'/js/main.js');
?>