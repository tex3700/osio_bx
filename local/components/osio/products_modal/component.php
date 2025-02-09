<?php

use Bitrix\Iblock\IblockTable;

CModule::IncludeModule("iblock");

$iBlock = IblockTable::getList(
    array(
        "filter" => array("=CODE" => "products_s1")
    )
)->fetch();

if ($iBlock) {
    $arOrder = array(
        "SORT" => "ASC"
    );
    $arFilter = array(
        "IBLOCK_ID" => $iBlock["ID"],
    );

    $sectionArr = [];

    $items = GetIBlockSectionList($arFilter["IBLOCK_ID"], false, $arOrder);
    while($arItem = $items->GetNext())
    {
        if(!is_null($arItem["IBLOCK_SECTION_ID"])){
            $sectionArr[$arItem["ID"]] = $arItem["NAME"];
        }
    }

    $arSelect = array("ID", "IBLOCK_ID", "NAME", "DETAIL_PICTURE", "PREVIEW_PICTURE", "IBLOCK_SECTION_ID", "PROPERTY_2", "PROPERTY_4", "PROPERTY_5", "PROPERTY_6");
    $announces = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
    while($element = $announces->GetNextElement()){
        $elArr = $element->fields;


        $arResult[$sectionArr[$elArr["IBLOCK_SECTION_ID"]]][$elArr["ID"]] = $elArr;

        $arFile = CFile::GetByID($arResult[$sectionArr[$elArr["IBLOCK_SECTION_ID"]]][$elArr["ID"]]["PREVIEW_PICTURE"])->Fetch();
        $arResult[$sectionArr[$elArr["IBLOCK_SECTION_ID"]]][$elArr["ID"]]["PREV_PICTURE"] = $arFile["SRC"];

    }
}

$this->includeComponentTemplate();