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
            if($arFields["UF_USER_GROUP"] == 5) {
                $arrayGroup[] = 6;
                CUser::SetUserGroup($arFields["USER_ID"], $arrayGroup);
            } elseif($arFields["UF_USER_GROUP"] == 6) {
                $arrayGroup[] = 7;
                CUser::SetUserGroup($arFields["USER_ID"], $arrayGroup);
            }




            
        }
    }
}