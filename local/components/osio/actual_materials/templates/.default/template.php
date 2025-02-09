<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>

<section class="actual-materials">
    <div class="actual-materials__content">
        <div class="actual-materials__top-row">
            <div class="actual-materials__tabs-nav">
                <ul class="actual-materials__tabs-nav-list">
                    <li class="actual-materials__tabs-nav-list-item">
                        <a href="#" class="actual-materials__tabs-nav-link active">
                            все
                        </a>
                    </li>
                    <? if (!empty($arResult)):?>
                    <? foreach ($arResult["THEMES"] as $theme):?>
                    <li class="actual-materials__tabs-nav-list-item">
                        <a href="#" class="actual-materials__tabs-nav-link">
                            <?= $theme ?>
                        </a>
                    </li>
                    <? endforeach;?>
                    <? endif;?>
                </ul>
            </div>
            <div class="search-form">
                <form action="/" method="POST" class="search-form__form">
                    <div class="search-form__form-wrapper">
                        <input type="search" name="q" class="search-form__form-input" placeholder="поиск по названию">
                        <button class="search-form__form-submit" type="submit">
                            <svg width="14" height="14" aria-hidden="true">
                                <use xlink:href="#search"></use>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <h2 class="actual-materials__heading">
            актуальное
        </h2>
        <div class="actual-materials__tabs">
            <div class="actual-materials__tabs-item">
                <div class="actual-materials__slider">
                    <div class="actual-materials__slider-wrapper">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <? if (!empty($arResult)):?>
                                    <? foreach ($arResult["ARTICLES"] as $article):?>
                                        <div class="swiper-slide">
                                            <a href="#" class="material-card">
                                                <div class="material-card__image-container">
                                                    <img src="<?= $article["PREV_PICTURE"]?>" alt="" class="material-card__image">
                                                </div>
                                                <div class="material-card__content">
                                                    <div class="material-card__category">
                                                        <?= $article["THEME_NAME"]?>
                                                    </div>
                                                    <h3 class="material-card__title">
                                                        <?= $article["NAME"]?>
                                                    </h3>
                                                </div>
                                            </a>
                                        </div>
                                    <? endforeach;?>
                                <? endif;?>
                            </div>
                        </div>
                    </div>
                    <div class="actual-materials__arrows">
                        <button class="actual-materials__arrow actual-materials__arrow--prev">
                            <svg width="14" height="14" aria-hidden="true">
                                <use xlink:href="#slider-arrow-left"></use>
                            </svg>
                        </button>
                        <button class="actual-materials__arrow actual-materials__arrow--next">
                            <svg width="14" height="14" aria-hidden="true">
                                <use xlink:href="#slider-arrow-right"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>


            <? if (!empty($arResult)):?>
                <? foreach ($arResult["THEMES_SORT"] as $themeSorted):?>
                    <div class="actual-materials__tabs-item">
                        <div class="actual-materials__slider">
                            <div class="actual-materials__slider-wrapper">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <? foreach ($themeSorted as $article):?>
                                        <div class="swiper-slide">
                                            <a href="#" class="material-card">
                                                <div class="material-card__image-container">
                                                    <img src="<?= $article["PREV_PICTURE"]?>" alt="" class="material-card__image">
                                                </div>
                                                <div class="material-card__content">
                                                    <div class="material-card__category">
                                                        <?= $article["THEME_NAME"]?>
                                                    </div>
                                                    <h3 class="material-card__title">
                                                        <?= $article["NAME"]?>
                                                    </h3>
                                                </div>
                                            </a>
                                        </div>
                                        <? endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="actual-materials__arrows">
                                <button class="actual-materials__arrow actual-materials__arrow--prev">
                                    <svg width="14" height="14" aria-hidden="true">
                                        <use xlink:href="#slider-arrow-left"></use>
                                    </svg>
                                </button>
                                <button class="actual-materials__arrow actual-materials__arrow--next">
                                    <svg width="14" height="14" aria-hidden="true">
                                        <use xlink:href="#slider-arrow-right"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                <? endforeach;?>
            <? endif;?>
        </div>
    </div>
</section>
