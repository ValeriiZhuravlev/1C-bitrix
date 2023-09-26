<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

$arComponentDescription = array(
    "NAME" => "Агент",
    "DESCRIPTION" => "Описание",
    "ICON" => "",
	"SORT" => 20,
    "PATH" => array(
        "CHILD" => array(
            "ID" => "Агенты",
            "NAME" => GetMessage("T_IBLOCK_DESC_NEWS"),
		    "SORT" => 10,
		    "CHILD" => array(
		    "ID" => "mycomponent_cmpx",
		 	),
		),
    )
);
?>