<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поддержка");
?><main class="page-main">

    <section class="support-intro-ch">

        <div class="support-intro__content">
            <div class="breadcrumbs">
                <a href="#">
                    ГЛАВНАЯ
                </a>
                <a class="active" >
                    поддержка
                </a>
            </div>
        </div>

        <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
            Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "sect",
                "AREA_FILE_SUFFIX" => "sservice_inc",
                "EDIT_TEMPLATE" => "sect_sservice_inc.php"
            ),
            false
        );?>

        <?$APPLICATION->IncludeComponent(
                "osio:selfservice_center",
                "",
        Array(
                "HLBLOCK_ID" => "2",
        )
        );?>

    </section>

    <?$APPLICATION->IncludeComponent(
        "osio:actual_materials",
        "",
        Array()
    );?>

    <?$APPLICATION->IncludeComponent(
        "osio:all_materials",
        "",
        Array()
    );?>

    <section class="contact-form">
        <div class="contact-form__content">
            <div class="contact-form__top">
                <h2 class="contact-form__heading">
                    Нужна помощь?
                </h2>
            </div>
            <form action="/" method="POST" class="contact-form__form">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "sect",
                        "AREA_FILE_SUFFIX" => "cform_inc",
                        "EDIT_TEMPLATE" => "sect_cform_inc.php"
                    ),
                    false
                );?>
                <div class="contact-form__form-fields">
                    <div class="contact-form__form-field">
                        <div class="contact-form__form-select" data-placeholder="Тема обращения">
                            <button class="contact-form__form-select-btn" type="button">
                                      <span class="contact-form__form-select-btn-text js-btn-text">

                                      </span>

                            </button>

                            <?$APPLICATION->IncludeComponent(
                                "osio:cform_appeal",
                                "",
                                Array(
                                    "HLBLOCK_ID" => "3",
                                )
                            );?>

                        </div>
                    </div>
                    <div class="contact-form__form-field">
                        <div class="contact-form__form-input-wrapper">
                            <input type="text" class="contact-form__form-text-input" placeholder="Сообщение" name="message">
                        </div>
                    </div>
                    <div class="contact-form__form-field">
                        <div class="contact-form__form-input-wrapper">
                            <input type="text" class="contact-form__form-text-input" placeholder="Имя" name="name">
                        </div>
                    </div>
                    <div class="contact-form__form-field">
                        <div class="contact-form__form-input-wrapper">
                            <input type="email" class="contact-form__form-text-input" placeholder="Email" name="email">
                        </div>
                    </div>
                </div>
                <div class="contact-form__form-policy">
                    <label class="contact-form__form-policy-checkbox">
                        <input type="checkbox" name="policy" value="Y" required="" class="contact-form__form-checkbox-input">
                        <span class="contact-form__form-checkbox-mark">

                              </span>
                        <span class="contact-form__form-checkbox-text">
                                  Даю согласие на обработку <a href="#">персональных данных</a>
                              </span>
                    </label>
                </div>
                <button class="contact-form__form-submit" type="submit">
                    Отправить
                </button>
            </form>
        </div>
    </section>

</main><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>