<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("register");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"SHOW_FIELDS" => array(
			0 => "EMAIL",
			1 => "TITLE",
			2 => "NAME",
		),
		"REQUIRED_FIELDS" => array(
			0 => "EMAIL",
			1 => "TITLE",
			2 => "NAME",
		),
		"AUTH" => "Y",
		"USE_BACKURL" => "Y",
		"SUCCESS_PAGE" => "/s2/login/",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(
			0 => "UF_USER",
		),
		"USER_PROPERTY_NAME" => ""
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>