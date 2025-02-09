<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>

    <div class="support-intro__cards">
        <?if (!empty($arResult)):?>
        <? foreach ($arResult as $item):?>
            <a href="#" class="support-intro__card">
                <div class="support-intro__card-bg">
                    <img src="<?= $item["UF_IMAGE"]?>" alt="" class="support-intro__card-bg-image">
                </div>
                <div class="support-intro__card-content">
                    <div class="support-intro__card-title-text">
                        <?= $item["UF_SUBTITLE"]?>
                    </div>
                    <h3 class="support-intro__card-title">
                        <?= $item["UF_TITLE"]?>
                    </h3>
                    <div class="support-intro__card-text">
                        <?= $item["UF_DESCRIPTION"]?>
                    </div>
                    <div class="support-intro__card-link">
                        Перейти
                    </div>
                </div>
            </a>
        <? endforeach;?>
        <? endif;?>
    </div>
