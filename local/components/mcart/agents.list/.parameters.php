<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/*
 * Нужно создать пареметры, можно посмотреть как это сделано в компоненте news.list
 * 1. Строка для Название таблицы (TABLE_NAME) Highload-блока. Ниже приведино в качестве примера
 * 2. Количество элементов для постраничной пагинации
 * 3. Кеширования(CACHE_TIME)
 */

$arComponentParameters = array(
    "PARAMETERS" => array(
        "HLBLOCK_TNAME" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("HLBLOCK_TNAME"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "ELEMENTS_COUNT" => array(
            "PARENT" => "BASE",
            "NAME" => GetMessage("HLBLOCK_COUNT_PAGE"),
            "TYPE" => "STRING",
            "DEFAULT" => "20",
        ),
        "CACHE_TIME" => array(
            "PARENT" => "CACHE_SETTINGS",
            "NAME" => GetMessage("HLBLOCK_TIME_CASH"),
            "TYPE" => "STRING",
            "DEFAULT" => "3600",
        ),
        "SEF_MODE" => "Y"
    )
);


