<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?>
 <div class="site-section site-section-sm bg-light">
      <div class="container agents-list">

		<?$APPLICATION->IncludeComponent(
	"test:agents.list", 
	".default", 
	array(
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"ELEMENT_COUNT" => "2",
		"HLBLOCK_TNAME" => "REA"
	),
	false
);?>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>