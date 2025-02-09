<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) return;
?>
    <nav class="osio-header__nav">
        <ul class="osio-header__nav-list">
<?
foreach($arResult as $arItem):
?>
        <li class="osio-header__nav-list-item">
            <a href="<?=$arItem["LINK"]?>" class="osio-header__nav-link">
                <?=$arItem["TEXT"]?>
            </a>
        </li>
<?
endforeach;
?>
        </ul>
    </nav>
