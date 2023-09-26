<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"mcart:mcart.iblockelement.like",
	"",
	Array(
		"CACHE_TIME" => "86400",
		"CACHE_TYPE" => "A",
		"ELEMENT_ID" => "4",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "vacancies"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>