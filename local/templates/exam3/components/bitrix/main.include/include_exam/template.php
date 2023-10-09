<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

if($arResult["FILE"] <> ''): ?>
<div class="side-block side-anonse">
	<div class="title-block"><span class="i i-title01"></span>Полезная информация!</div>
	<div class="item">
		<?include($arResult["FILE"]);?>
	</div>
</div>

<?endif;?>
