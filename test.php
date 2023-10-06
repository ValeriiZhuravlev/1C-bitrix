<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>




<?
echo '<pre>'.htmlspecialchars(print_r($arResult, true)).'</pre>';

file_put_contents(_DIR_.'/1.txt', print_r($arResult, true), FILE_APPEND);

global $APPLICATION;

global $USER;
?>
