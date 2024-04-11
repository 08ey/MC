
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

 <div class="site-section">
      <div class="container">
        <div class="row">
       <div class="col-md-12 col-lg-8 mb-5">

          <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"OSForm", 
	array(
		"EMAIL_TO" => "ivanpritmov@mail.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NONE",
		),
		"USE_CAPTCHA" => "N",
		"COMPONENT_TEMPLATE" => "OSForm"
	),
	false
);?>
            
		  </div>
          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
				<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"COMPONENT_TEMPLATE" => ".default",
		"EDIT_TEMPLATE" => "",
		"PATH" => SITE_TEMPLATE_PATH."/include/contacts.php"
	)
);?>

            </div>
          </div>
        </div>
      </div>
    </div>






<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>