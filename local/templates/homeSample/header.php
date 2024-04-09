)<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?> <?
IncludeTemplateLangFile(__FILE__);
?><?$APPLICATION->ShowHead();?> <?
 use Bitrix\Main\Page\Asset; 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/fonts/icomoon/style.css'); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/bootstrap.min.css'); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/magnific-popup.css'); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/jquery-ui.css'); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/owl.carousel.min.css'); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/owl.theme.default.min.css'); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/bootstrap-datepicker.css'); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/mediaelementplayer.css'); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/animate.css'); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/fonts/flaticon/font/flaticon.css'); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/fl-bigmug-line.css'); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/aos.css'); 
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH .'/css/style.css'); 
?>
<div id="panel">
	 <?$APPLICATION->ShowPanel();?>
</div>
<div class="site-loader">
</div>
<div class="site-wrap">
	<div class="site-mobile-menu">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
 <span class="icon-close2 js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body">
		</div>
	</div>
	 <!-- .site-mobile-menu -->
	<div class="border-bottom bg-white top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-6 col-md-6">
					<p class="mb-0">

						 <?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/local/templates/homeSample/include/phone.php"
								)
							);?>
								<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "inc",
									"EDIT_TEMPLATE" => "",
									"PATH" => "/local/templates/homeSample/include/mail.php"
								)
);?>
					</p>
				</div>
				<div class="col-6 col-md-6 text-right">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/homeSample/include/icons.php"
	)
);?>
				</div>
			</div>
		</div>
	</div>
	<div class="site-navbar">
		<div class="container py-1">
			<div class="row align-items-center">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/templates/homeSample/include/logo.php"
	)
);?> 
			<div class="col-4 col-md-4 col-lg-8">
				<nav class="site-navigation text-right text-md-right" role="navigation">
					<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"horizontal_multilevel1",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"COMPONENT_TEMPLATE" => "horizontal_multilevel1",
						"DELAY" => "N",
						"MAX_LEVEL" => "2",
						"MENU_CACHE_GET_VARS" => array(),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "N"
					)
				);?>
				</nav>
			</div>
			</div>
		</div>
	</div>
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "chain", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "1",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>