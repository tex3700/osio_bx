<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover">
    <meta name="format-detection" content="telephone=no">
    <?$APPLICATION->ShowHead();?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
            rel="stylesheet">
    <script type="module" crossorigin src="<?=SITE_TEMPLATE_PATH?>/assets/main11.js"></script>

    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
    <div id="page-wrapper">
        <div id="panel"><?$APPLICATION->ShowPanel();?></div>
        <div class="overlay"></div>
        <div class="header-wrapper header-wrapper--dark">
            <div class="osio-header">
                <div class="osio-header__content">
                <a href="#" class="osio-header__logo">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.svg" alt="" class="osio-header__logo-image">
                </a>
                    <div class="osio-header__wrapper">
                    <div class="osio-header__scroll-wrapper">

                        <div class="osio-header__wrapper-inner">

                            <div class="osio-header__top">
                                <?
                                $APPLICATION->IncludeComponent("bitrix:menu", "top", array(
                                    "ROOT_MENU_TYPE" => "top",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => array(
                                    ),
                                    "MAX_LEVEL" => "1",
                                    "USE_EXT" => "N",
                                    "ALLOW_MULTI_SELECT" => "N"
                                ),
                                    false
                                );
                                ?>

                                <?
                                $APPLICATION->IncludeFile(
                                    SITE_DIR."include/contact_phone.php",
                                    Array(),
                                    Array("MODE"=>"php")
                                );
                                ?>
                                <a href="#" class="osio-header__lang">EN</a>
                                <div class="osio-header__social">
                                    <ul class="osio-header__social-list">
                                        <li class="osio-header__social-list-item">
                                            <a href="#" class="osio-header__social-link">
                                                <svg width="14" height="14" aria-hidden="true">
                                                    <use xlink:href="#youtube"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="osio-header__social-list-item">
                                            <a href="#" class="osio-header__social-link">
                                                <svg width="14" height="14" aria-hidden="true">
                                                    <use xlink:href="#vk"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="osio-header__buy">
                                    Купить
                                </a>
                            </div>
                            <div class="osio-header__bottom">

                                <?$APPLICATION->IncludeComponent(
                                    "osio:products_modal",
                                    "",
                                    Array()
                                );?>
                                <div class="osio-header__search-wrapper">

                                    <a href="#" class="osio-header__search">
                                        <svg width="14" height="14" aria-hidden="true">
                                            <use xlink:href="#search"></use>
                                        </svg>
                                    </a>
                                    <div class="osio-header__search-dropdown">
                                        <div class="osio-header__search-dropdown-inner">
                                            <h3 class="osio-header__search-title">
                                                Поиск
                                            </h3>
                                            <form action="/" method="GET" class="osio-header__search-form">
                                                <input type="search" name="q" class="osio-header__search-input"
                                                       placeholder="Поиск по сайту">
                                                <button class="osio-header__search-submit" type="submit">
                                                    Найти
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="osio-header__mobile-search">
                    <button class="osio-header__mobile-search-btn" type="button">
                        <svg width="14" height="14" aria-hidden="true">
                            <use xlink:href="#search"></use>
                        </svg>
                    </button>
                    <div class="osio-header__mobile-search-dropdown">
                        <div class="osio-header__mobile-search-dropdown-inner">
                            <form action="/" method="GET" class="osio-header__mobile-search-dropdown-form">
                                <input type="search" class="osio-header__mobile-search-dropdown-form-input" placeholder="Поиск">
                            </form>
                        </div>
                    </div>
                </div>
                <button class="osio-header__burger"></button>
                </div>
            </div>
        </div>
    </div>

    <div id="workarea">
<!--            <h1 id="pagetitle">--><?//$APPLICATION->ShowTitle(false);?><!--</h1>-->