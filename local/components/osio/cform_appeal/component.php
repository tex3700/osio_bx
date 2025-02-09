<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Highloadblock\HighloadBlockTable;

if (CModule::IncludeModule('highloadblock')) {
    $arHLBlock = Bitrix\Highloadblock\HighloadBlockTable::getById($arParams["HLBLOCK_ID"])->fetch();
    $obEntity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arHLBlock);
    $strEntityDataClass = $obEntity->getDataClass();

    $rsData = $strEntityDataClass::getList(array(
        'select' => array('ID','UF_APPEAL'),
        'order' => array('ID' => 'ASC'),
    ));

    while ($arItem = $rsData->Fetch()) {
        $arResult[] = $arItem;
    }
}

$this->includeComponentTemplate();