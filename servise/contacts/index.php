<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">
				 <?$APPLICATION->IncludeComponent(
				"bitrix:main.feedback",
				"feedback",
				Array(
					"COMPONENT_TEMPLATE" => "feedback",
					"EMAIL_TO" => "valera030219972010@gmail.com",
					"EVENT_MESSAGE_ID" => array(0=>"7",),
					"OK_TEXT" => "Спасибо, ваше сообщение принято.",
					"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
					"USE_CAPTCHA" => "Y"
				)
			);?>
			</div>
			<div class="col-lg-4">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include", 
					".default", 
					array(
					"COMPONENT_TEMPLATE" => ".default",
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/include/form_data.php",
					"EDIT_TEMPLATE" => ""
				),
				false
				);?><br>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>