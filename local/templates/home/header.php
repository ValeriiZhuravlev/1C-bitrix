<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">

<head>
  <?$APPLICATION->ShowHead();?>
  <title><?$APPLICATION->ShowTitle()?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    

  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");?>
  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");?>
  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");?>
  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");?>
  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");?>
  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");?>
  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");?>
  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");?>
  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/animate.css");?>
  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");?>
  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");?>

  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/aos.css");?>

  <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css");?>
</head>

<body>
  <?$APPLICATION->ShowPanel();?>
  <div class="site-loader"></div>
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <?$APPLICATION->IncludeComponent(
	              "bitrix:main.include",
	              "",
	              Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/phone.php"
	              )
              );?>
              <?$APPLICATION->IncludeComponent(
	              "bitrix:main.include",
	              "",
	              Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/email.php"
	              )
              );?>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
              <?$APPLICATION->IncludeComponent(
	              "bitrix:main.include",
	              "",
	              Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/icons.php"
	              )
              );?>
          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="">
              <?$APPLICATION->IncludeComponent(
	              "bitrix:main.include",
	              "",
	              Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/logo.php"
	              )
              );?>
            </h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            
                  <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_multi", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top_multi"
	),
	false
);?>
         </div>  
        </div>
      </div>
    </div>

    <?if($APPLICATION->GetCurPage(false) !== '/'):?> 
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(<?=SITE_TEMPLATE_PATH ?>/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2"><?=$APPLICATION->ShowTitle(false)?></h1>
            <?$APPLICATION->IncludeComponent(
	            "bitrix:breadcrumb",
	            "breadcrumbs",
	            Array(
	            	"PATH" => "",
	            	"SITE_ID" => "s1",
	            	"START_FROM" => "0"
	            )
            );?>
          </div>
        </div>
      </div>
    </div>
    <?endif;?> 
  </div>