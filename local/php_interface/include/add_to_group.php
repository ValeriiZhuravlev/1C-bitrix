<?php

AddEventHandler(
    "main",
    "OnAfterUserRegister",
    array(
        "AddUserToGroupClass",
        "AddUserToGroup"
    )
);

class AddUserToGroupClass {
    public static function AddUserToGroup(&$arFields) {
        if(isset($arFields["USER_ID"])) {
            $group = [
                $arFields["UF_USER_GROUP"]
            ];

            CUser::SetUserGroup($arFields["USER_ID"], $group);
        }
    }
}