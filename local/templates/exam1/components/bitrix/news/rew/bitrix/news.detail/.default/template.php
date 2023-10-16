<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);


$str = $arResult['DISPLAY_ACTIVE_FROM'] . 'г.';
if($arResult['DISPLAY_PROPERTIES']['POSITION']['VALUE']) $str .= ', ' . $arResult['DISPLAY_PROPERTIES']['POSITION']['VALUE'];
if($arResult['DISPLAY_PROPERTIES']['COMPANY']['VALUE']) $str .= ', ' . $arResult['DISPLAY_PROPERTIES']['COMPANY']['VALUE'];

if(isset($arResult['DETAIL_PICTURE']['SRC'])) {
	$src = $arResult['DETAIL_PICTURE']['SRC'];
} else {
	$src = SITE_TEMPLATE_PATH . '/img/no_photo.jpg';
}
?>

<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?=$arResult['DETAIL_TEXT']?>
		</div>
		<div class="review-autor">
			<?=$str ?>
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap"><img src="<?=$src ?>" alt="img"></div>
</div>
<? if(is_array($arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['VALUE'])): ?>
<div class="exam-review-doc">
		<p><?=GetMessage('DOC')?>:</p>
		<?if($arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['FILE_VALUE'][1]):?>
		<?foreach($arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['FILE_VALUE'] as $fid):?>
		<div  class="exam-review-item-doc">
			<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
			<a href="/upload/<?=$fid['SUBDIR'].'/'.$fid['FILE_NAME']?>" download>
				<?=$fid['ORIGINAL_NAME']?>
			</a>
		</div>
		<?endforeach;?>
		<?else:?>
		<div  class="exam-review-item-doc">
			<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
			<a href="/upload/<?=$arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['FILE_VALUE']['SUBDIR'].'/'.$arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['FILE_VALUE']['FILE_NAME']?>" download>
				<?=$arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['FILE_VALUE']['ORIGINAL_NAME']?>
			</a>
		</div>
		<?endif?>
</div>
<? endif; ?>
<hr>
<a href="<?=$arResult["LIST_PAGE_URL"]?>" class="review-block_back_link"> &larr; К списку отзывов</a>

