<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>

<div class="mfeedback">
  <? if(!empty($arResult["ERROR_MESSAGE"])): ?>
    <? foreach($arResult["ERROR_MESSAGE"] as $v): ?>
      <div class="alert alert-danger"><?=$v?></div>
    <? endforeach; ?>
  <? endif; ?>
  
  <? if($arResult["OK_MESSAGE"] <> ''): ?>
    <div class="alert alert-success"><?=$arResult["OK_MESSAGE"]?></div>
  <? endif; ?>
  <form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="p-5 bg-white border">
    <?=bitrix_sessid_post()?>
    
    <div class="row form-group">
      <div class="col-md-12 mb-3 mb-md-0">
        <label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></label>
        <input type="text" name="user_name" id="fullname" class="form-control" value="<?=$arResult["AUTHOR_NAME"]?>" placeholder="<?=GetMessage("MFT_NAME")?>">
      </div>
    </div>
    
    <div class="row form-group">
      <div class="col-md-12">
        <label class="font-weight-bold" for="email"><?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></label>
        <input type="email" name="user_email" id="email" class="form-control" value="<?=$arResult["AUTHOR_EMAIL"]?>" placeholder="<?=GetMessage("MFT_EMAIL")?>">
      </div>
    </div>
    
    <div class="row form-group">
      <div class="col-md-12">
        <label class="font-weight-bold" for="subject"><?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></label>
        <textarea name="MESSAGE" id="message" rows="5" cols="30" class="form-control" placeholder="<?=GetMessage("MFT_MESSAGE")?>"><?=$arResult["MESSAGE"]?></textarea>
      </div>
    </div>
    
    <div class="row form-group">
      <div class="col-md-12">
        <input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-primary py-2 px-4 rounded-0">
      </div>
    </div>
  </form>
</div>