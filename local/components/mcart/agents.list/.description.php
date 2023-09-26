<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

$arComponentDescription = array(
    "NAME" => GetMessage("NAME"),
    "DESCRIPTION" => GetMessage("DESCRIPTION"),
    "ICON" => "",
	"SORT" => 20,
    "PATH" => array(
        "CHILD" => array(
            "ID" => GetMessage("ID")
		),
    )
);
?>