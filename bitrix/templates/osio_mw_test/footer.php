<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
    </div>

    <footer class="page-footer">
        <div class="page-footer__content">
        <div class="page-footer__top">
            <?
            $APPLICATION->IncludeFile(
                SITE_DIR."include/motto.php",
                Array(),
                Array("MODE"=>"html")
            );
            ?>

            <ul class="page-footer__social-list">
                <?
                $APPLICATION->IncludeFile(
                    SITE_DIR."include/social_media.php",
                    Array(),
                    Array("MODE"=>"php")
                );
                ?>
            </ul>
            <nav class="page-footer__nav">
                <ul class="page-footer__nav-list">
                    <li class="page-footer__nav-list-item">
                        <?
                        $APPLICATION->IncludeComponent("bitrix:menu", "bottom_product", array(
                            "ROOT_MENU_TYPE" => "bottom_product",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );
                        ?>
                    </li>
                    <li class="page-footer__nav-list-item">
                        <?
                        $APPLICATION->IncludeComponent("bitrix:menu", "bottom_brand", array(
                            "ROOT_MENU_TYPE" => "bottom_brand",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );
                        ?>
                    </li>
                    <li class="page-footer__nav-list-item">
                        <?
                        $APPLICATION->IncludeComponent("bitrix:menu", "bottom_services", array(
                            "ROOT_MENU_TYPE" => "bottom_services",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );
                        ?>
                    </li>
                </ul>
            </nav>
        </div>
        <a href="#" class="page-footer__logo">
            <img src="<?=SITE_TEMPLATE_PATH?>/images/footer-logo.svg" alt="" class="page-footer__logo-image">
        </a>
        <div class="page-footer__bottom">
            <?
            $APPLICATION->IncludeFile(
                SITE_DIR."include/copyright.php",
                Array(),
                Array("MODE"=>"html")
            );
            ?>

            <div class="page-footer__bottom-right">
                <a href="#" class="page-footer__made-by">
                        <span class="page-footer__made-by-text">
                            Создание сайта<br> Mark Weber
                        </span>

                    <img src="<?=SITE_TEMPLATE_PATH?>/images/mw-logo.svg" alt="" class="page-footer__made-by-logo">
                </a>
            </div>
            <picture>
                <source srcset="<?=SITE_TEMPLATE_PATH?>/images/footer-decor-mobile.svg" media="(max-width: 640px)" />
                <img src="<?=SITE_TEMPLATE_PATH?>/images/footer-decor.svg" alt="MDN" class="page-footer__decor" />
            </picture>
        </div>
    </div>
    </footer>

</body>
</html>