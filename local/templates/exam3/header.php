<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
    <title><?=$APPLICATION->ShowTitle();?></title>
    <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/reset.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.css");

    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/scripts.js");

    $APPLICATION->ShowHead();
    ?>

    <link rel="icon" type="image/vnd.microsoft.icon"  href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
</head>

<body>
    <?=$APPLICATION->ShowPanel();?>
    <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="/" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                    <?
                        $arrDate = getDate();
                        if($arrDate['hours'] >= 9 && $arrDate['hours'] <= 18):
                    ?>
                        <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                    <? else:?>
                        <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                    <? endif;?>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
                </div>
                <div class="actions-block">
                    <form action="/search/" class="main-frm-search" method="get">
                        <input type="text" name="q" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:system.auth.form",
                        "demo",
                        Array(
                            "FORGOT_PASSWORD_URL" => "/login/?forgot_password=yes",
                            "PROFILE_URL" => "/login/user.php",
                            "REGISTER_URL" => "/login/?register=yes",
                            "SHOW_ERRORS" => "N"
                        )
                    );?>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
        <nav class="nav">
            <div class="inner-wrap">
                <div class="menu-block popup-wrap">
                    <a href="" class="btn-menu btn-toggle"></a>
                    <div class="menu popup-block">
                    <?$APPLICATION->IncludeComponent(
	                        "bitrix:menu", 
	                        "top", 
	                        array(
	                        	"ALLOW_MULTI_SELECT" => "N",
	                        	"CHILD_MENU_TYPE" => "top2",
	                        	"DELAY" => "N",
	                        	"MAX_LEVEL" => "3",
	                        	"MENU_CACHE_GET_VARS" => array(
	                        	),
	                        	"MENU_CACHE_TIME" => "3600",
	                        	"MENU_CACHE_TYPE" => "N",
	                        	"MENU_CACHE_USE_GROUPS" => "Y",
	                        	"ROOT_MENU_TYPE" => "top",
	                        	"USE_EXT" => "Y",
	                        	"COMPONENT_TEMPLATE" => "top"
	                        ),
	                        false
                        );?>
                        <a href="" class="btn-close"></a>
                    </div>
                    <div class="menu-overlay"></div>
                </div>
            </div>
        </nav>
        <!-- /nav -->
        <!-- breadcrumbs -->
        <?if($APPLICATION->GetCurPage() !== '/s3/'): ?>
            <div class="inner-wrap">
                <div class="breadcrumbs-box">
            <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"navchan", 
	array(
		"PATH" => "",
		"SITE_ID" => "s3",
		"START_FROM" => "1",
		"COMPONENT_TEMPLATE" => "navchan"
	),
	false
);?>
                </div>
            </div>
        <!-- /breadcrumbs -->
        <?endif;?>
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">
                    <?if($APPLICATION->GetCurPage() !== '/s3/'): ?>
                        <header>
                            <h1><?=$APPLICATION->ShowTitle('h1')?></h1>
                        </header>
                        <hr>
                    <?endif;?>