<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

?>

<div class="contact-form__form-select-dropdown">
    <div class="contact-form__form-select-dropdown-inner">
        <ul class="contact-form__form-select-dropdown-list">
            <?if (!empty($arResult)):?>
                <? foreach ($arResult as $item):?>
                <li class="contact-form__form-select-dropdown-list-item">
                    <label class="contact-form__form-select-choice">
                        <input type="radio" name="theme" class="contact-form__form-select-choice-input" value="Тема 1">
                        <span class="contact-form__form-select-choice-text">
                            <?= $item['UF_APPEAL']?>
                        </span>
                    </label>
                </li>
                <? endforeach;?>
            <? endif;?>
        </ul>
    </div>
</div>
