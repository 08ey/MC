<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("register");
?><div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"register",
	Array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array("EMAIL","TITLE"),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array("EMAIL","TITLE"),
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => array("UF_USER"),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);?>
			</div>
		</div>
	</div>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>