<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?>

<div>
	 <?$APPLICATION->IncludeComponent(
	"mcart:agents.list",
	"",
	Array(
		"AJAX_MODE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"ELEMENTS_COUNT" => "1",
		"HLBLOCK_TNAME" => "real_estate_agents",
		"NEWS_COUNT" => "1",
		"PAGER_BASE_LINK" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_PARAMS_NAME" => "arrPager",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "modern",
		"PAGER_TITLE" => "",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"TABLE_NAME" => "real_estate_agents"
	)
);?><br>
</div>
<div>
</div>
<div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>