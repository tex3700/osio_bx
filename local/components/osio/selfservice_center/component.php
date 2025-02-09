<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Highloadblock\HighloadBlockTable;

if (CModule::IncludeModule('highloadblock')) {
    $arHLBlock = Bitrix\Highloadblock\HighloadBlockTable::getById($arParams["HLBLOCK_ID"])->fetch();
    $obEntity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arHLBlock);
    $strEntityDataClass = $obEntity->getDataClass();

    $rsData = $strEntityDataClass::getList(array(
        'select' => array('ID','UF_IMAGE','UF_SUBTITLE','UF_TITLE', 'UF_DESCRIPTION'),
        'order' => array('ID' => 'ASC'),
    ));
    $count = 0;
    while ($arItem = $rsData->Fetch()) {
        if($count < 2){
            $arResult[] = $arItem;
            $arFile = CFile::GetByID($arResult[$count]["UF_IMAGE"])->Fetch();
            $arResult[$count]["UF_IMAGE"] = $arFile["SRC"];
        } else break;
        $count++;
    }
}
$this->includeComponentTemplate();