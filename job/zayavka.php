<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заявка");
?>
<?php
    $APPLICATION->IncludeComponent(
            'euclihell:job.component.response',
            '',
            [
                'IBLOCK_ID' => 4,
                'IBLOCK_SECTION_ID' => 1
            ]
    );
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>