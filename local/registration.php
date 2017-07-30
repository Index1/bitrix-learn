<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetTitle("Регистрация");
?>

<?
    if($USER->IsAuthorized())
        LocalRedirect('/');
    $APPLICATION->IncludeComponent(
        "bitrix:main.register",
        "",
        Array(
            "AUTH" => "Y",
            "COMPOSITE_FRAME_MODE" => "A",
            "COMPOSITE_FRAME_TYPE" => "AUTO",
            "REQUIRED_FIELDS" => array("EMAIL","NAME","SECOND_NAME","LAST_NAME"),
            "SET_TITLE" => "Y",
            "SHOW_FIELDS" => array("EMAIL","NAME","SECOND_NAME","LAST_NAME","PERSONAL_PROFESSION","PERSONAL_GENDER","PERSONAL_BIRTHDAY","PERSONAL_PHONE","PERSONAL_MOBILE","PERSONAL_CITY","PERSONAL_STATE","PERSONAL_COUNTRY"),
            "SUCCESS_PAGE" => "",
            "USER_PROPERTY" => array(),
            "USER_PROPERTY_NAME" => "",
            "USE_BACKURL" => "Y"
        )
    );
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>