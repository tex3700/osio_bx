<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Iblock\IblockTable;

CModule::IncludeModule("iblock");

$iBlock = IblockTable::getList(
    array(
        "filter" => array("=CODE" => "article_themes_s1")
    )
)->fetch();

if ($iBlock) {
    $arOrder = array(
        "DATE_CREATE" => "DESC"
    );
    $arFilter = array(
        "IBLOCK_ID" => $iBlock["ID"],
    );

    $sectionArr = [];

    $items = GetIBlockSectionList($arFilter["IBLOCK_ID"], false, Array("sort"=>"asc"));
    while($arItem = $items->GetNext())
    {
        $sectionArr[$arItem["ID"]] = $arItem["NAME"];
        $arResult["THEMES"] = $sectionArr;
    }

    $arSelect = array("ID", "IBLOCK_ID", "NAME", "DETAIL_PICTURE", "DETAIL_PICTURE", "PREVIEW_PICTURE", "IBLOCK_SECTION_ID");
    $announces = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelect);
    while($element = $announces->GetNextElement()){
        $elArr = $element->fields;

        $arResult["ARTICLES"][$elArr["ID"]] = $elArr;
        $arResult["ARTICLES"][$elArr["ID"]]["THEME_NAME"] = $sectionArr[$elArr["IBLOCK_SECTION_ID"]];

        $arFile = CFile::GetByID($arResult["ARTICLES"][$elArr["ID"]]["PREVIEW_PICTURE"])->Fetch();
        $arResult["ARTICLES"][$elArr["ID"]]["PREV_PICTURE"] = $arFile["SRC"];

        $sortArticles = ["THEME_NAME" => $sectionArr[$elArr["IBLOCK_SECTION_ID"]], "NAME" => $elArr["NAME"], "PREV_PICTURE" => $arFile["SRC"]];
        $arResult["THEMES_SORT"][$elArr["IBLOCK_SECTION_ID"]][$elArr["ID"]] =  $sortArticles;
    }
}

$this->includeComponentTemplate();