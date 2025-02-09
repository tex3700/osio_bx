<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>

<div class="osio-header__categories">
    <ul class="osio-header__categories-list">
        <li class="osio-header__categories-list-item">
            <a href="#" class="osio-header__categories-link">
                Ноутбуки
            </a>
            <div class="osio-header__categories-dropdown">
                <div class="osio-header__categories-dropdown-inner">
                    <button class="osio-header__categories-dropdown-back" type="button">
                        <svg width="14" height="14" aria-hidden="true">
                            <use xlink:href="#back"></use>
                        </svg>
                        <span class="osio-header__categories-dropdown-back-text">
                                                            Ноутбуки
                                                        </span>

                    </button>
                    <div class="osio-header__categories-subcategories-nav">
                        <a href="#"
                           class="osio-header__categories-subcategories-nav-link active">
                            Все Ноутбуки
                        </a>
                        <a href="#" class="osio-header__categories-subcategories-nav-link">
                            baseline
                        </a>
                        <a href="#" class="osio-header__categories-subcategories-nav-link">
                            FocusLine
                        </a>
                    </div>
                    <div class="osio-header__categories-subcategories">


                        <div class="osio-header__categories-subcategory active">
                            <button class="osio-header__categories-subcategory-btn">
                                Все Ноутбуки
                                <svg width="14" height="14" aria-hidden="true">
                                    <use xlink:href="#plus"></use>
                                </svg>
                            </button>
                            <div class="osio-header__categories-subcategory-content">
                                <div class="osio-header__categories-subcategory-content-inner">
                                    <ul class="osio-header__categories-subcategory-list">
                                        <? if (!empty($arResult)):?>
                                            <? foreach ($arResult as $section):?>
                                                <? foreach ($section as $product):?>
                                                    <li
                                                            class="osio-header__categories-subcategory-list-item">
                                                        <a href="#"
                                                           class="osio-header__categories-subcategory-card">
                                                            <h3
                                                                    class="osio-header__categories-subcategory-card-title">
                                                                <?= $product['NAME']?>
                                                            </h3>
                                                            <div
                                                                    class="osio-header__categories-subcategory-card-image-container">
                                                                <img src="<?= $product['PREV_PICTURE']?>" alt=""
                                                                     class="osio-header__categories-subcategory-card-image">
                                                            </div>
                                                            <div
                                                                    class="osio-header__categories-subcategory-card-specs">
                                                                <?= $product['PROPERTY_4_VALUE']?><br>
                                                                <?= $product['PROPERTY_5_VALUE']?><br>
                                                                <?= $product['PROPERTY_6_VALUE']?>
                                                            </div>
                                                        </a>
                                                    </li>
                                                <? endforeach;?>
                                            <? endforeach;?>
                                        <? endif;?>
                                    </ul>
                                    <div class="osio-header__categories-subcategory-links">
                                        <a href="#"
                                           class="osio-header__categories-subcategory-link">
                                            Подробнее о серии
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="osio-header__categories-subcategory">
                            <button class="osio-header__categories-subcategory-btn">
                                baseline
                                <svg width="14" height="14" aria-hidden="true">
                                    <use xlink:href="#plus"></use>
                                </svg>
                            </button>
                            <div class="osio-header__categories-subcategory-content">
                                <div class="osio-header__categories-subcategory-content-inner">
                                    <ul class="osio-header__categories-subcategory-list">
                                        <? if (!empty($arResult)):?>
                                            <? foreach ($arResult["BASELINE"] as $product):?>
                                                <li
                                                        class="osio-header__categories-subcategory-list-item">
                                                    <a href="#"
                                                       class="osio-header__categories-subcategory-card">
                                                        <h3
                                                                class="osio-header__categories-subcategory-card-title">
                                                            <?= $product['NAME']?>
                                                        </h3>
                                                        <div
                                                                class="osio-header__categories-subcategory-card-image-container">
                                                            <img src="<?= $product['PREV_PICTURE']?>" alt=""
                                                                 class="osio-header__categories-subcategory-card-image">
                                                        </div>
                                                        <div
                                                                class="osio-header__categories-subcategory-card-specs">
                                                            <?= $product['PROPERTY_4_VALUE']?><br>
                                                            <?= $product['PROPERTY_5_VALUE']?><br>
                                                            <?= $product['PROPERTY_6_VALUE']?>
                                                        </div>
                                                    </a>
                                                </li>
                                            <? endforeach;?>
                                        <? endif;?>
                                    </ul>
                                    <div class="osio-header__categories-subcategory-links">
                                        <a href="#"
                                           class="osio-header__categories-subcategory-link">
                                            Подробнее о серии
                                        </a>
                                        <a href="#"
                                           class="osio-header__categories-subcategory-link">
                                            Все ноутбуки
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="osio-header__categories-subcategory">
                            <button class="osio-header__categories-subcategory-btn">
                                focusline
                                <svg width="14" height="14" aria-hidden="true">
                                    <use xlink:href="#plus"></use>
                                </svg>
                            </button>
                            <div class="osio-header__categories-subcategory-content">
                                <div class="osio-header__categories-subcategory-content-inner">
                                    <ul class="osio-header__categories-subcategory-list">
                                        <? if (!empty($arResult)):?>
                                            <? foreach ($arResult["FOCUSLINE"] as $product):?>
                                                <li
                                                        class="osio-header__categories-subcategory-list-item">
                                                    <a href="#"
                                                       class="osio-header__categories-subcategory-card">
                                                        <h3
                                                                class="osio-header__categories-subcategory-card-title">
                                                            <?= $product['NAME']?>
                                                        </h3>
                                                        <div
                                                                class="osio-header__categories-subcategory-card-image-container">
                                                            <img src="<?= $product['PREV_PICTURE']?>" alt=""
                                                                 class="osio-header__categories-subcategory-card-image">
                                                        </div>
                                                        <div
                                                                class="osio-header__categories-subcategory-card-specs">
                                                            <?= $product['PROPERTY_4_VALUE']?><br>
                                                            <?= $product['PROPERTY_5_VALUE']?><br>
                                                            <?= $product['PROPERTY_6_VALUE']?>
                                                        </div>
                                                    </a>
                                                </li>
                                            <? endforeach;?>
                                        <? endif;?>
                                    </ul>
                                    <div class="osio-header__categories-subcategory-links">
                                        <a href="#"
                                           class="osio-header__categories-subcategory-link">
                                            Подробнее о серии
                                        </a>
                                        <a href="#"
                                           class="osio-header__categories-subcategory-link">
                                            Все ноутбуки
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="osio-header__categories-list-item">
            <a href="#" class="osio-header__categories-link">
                Моноблоки
            </a>
        </li>
        <li class="osio-header__categories-list-item">
            <a href="#" class="osio-header__categories-link">
                Системные блоки
            </a>
        </li>
        <li class="osio-header__categories-list-item">
            <a href="#" class="osio-header__categories-link">
                Мониторы
            </a>
        </li>
    </ul>
</div>


