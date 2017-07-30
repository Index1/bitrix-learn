<?
    define("NEED_AUTH", true);
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

    if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0)
        LocalRedirect($backurl);

    if($USER->IsAuthorized())
        LocalRedirect('/');

    $APPLICATION->SetTitle("Авторизация");
?>
<?
    if($USER->IsAuthorized()) {
        $APPLICATION->IncludeComponent(
            "bitrix:system.auth.confirmation",
            "",
            Array()
        );
    }
?>
<?
    $APPLICATION->IncludeComponent(
        "bitrix:system.auth.form",
        "",
        Array(
            "COMPONENT_TEMPLATE" => "template1",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO",
            "FORGOT_PASSWORD_URL" => "/foget",
            "PROFILE_URL" => "/profile",
            "REGISTER_URL" => "/regisration",
            "SHOW_ERRORS" => "Y"
        )
    );
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>