
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
        <?$APPLICATION->IncludeComponent(
	              "bitrix:main.include",
	              "",
	              Array(
		              "AREA_FILE_SHOW" => "file",
		              "AREA_FILE_SUFFIX" => "inc",
		              "EDIT_TEMPLATE" => "",
		              "PATH" => "/include/about.php"
	              )
              );?>



        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_multi", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "vertical_multilevel"
	),
	false
);?>


        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
        <?$APPLICATION->IncludeComponent(
	            "bitrix:main.include",
	            "",
	            Array(
		            "AREA_FILE_SHOW" => "file",
		            "AREA_FILE_SUFFIX" => "inc",
		            "EDIT_TEMPLATE" => "",
		            "PATH" => "/include/followus.php"
	          )
          );?>



        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <?$APPLICATION->IncludeComponent(
	            "bitrix:main.include",
	            "",
	            Array(
		            "AREA_FILE_SHOW" => "file",
		            "AREA_FILE_SUFFIX" => "inc",
		            "EDIT_TEMPLATE" => "",
		            "PATH" => "/include/copyright.php"
	          )
          );?>
      </div>
    </div>
  </footer>

  </div>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery-3.3.1.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery-migrate-3.0.1.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery-ui.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/popper.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/bootstrap.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/owl.carousel.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/mediaelement-and-player.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery.stellar.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery.countdown.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/jquery.magnific-popup.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/bootstrap-datepicker.min.js');?>
  <?$APPLICATION->AddHeadScript('/local/templates/home/js/aos.js');?>

  <?$APPLICATION->AddHeadScript('/local/templates/home/js/main.js');?>
</body>

</html>