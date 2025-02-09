<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) return;
?>
    <a href="#" class="page-footer__nav-link">
        Сервисы
    </a>
    <ul class="page-footer__nav-submenu-list">
<?
foreach($arResult as $arItem):
?>
        <li class="page-footer__nav-submenu-list-item">
            <a href="<?=$arItem["LINK"]?>" class="page-footer__nav-submenu-link">
                <?=$arItem["TEXT"]?>
            </a>
        </li>
<?
endforeach;
?>
    </ul>
