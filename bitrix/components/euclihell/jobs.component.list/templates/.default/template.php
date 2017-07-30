<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?
	if($USER->IsAdmin())
		echo '<div class="btn-group"><a class="btn btn-outline-info btn-sm" href="/job/new-job.php">Добавить вакансию</a><a class="btn btn-secondary btn-sm" href="/?argListOfJobs=myListOfJobs">Мои вакансии</a></div>';
?>
<div class="jobs-list">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?><br />
    <?endif;?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
        <div class="job-list-item">
            <div class="job-content">
                <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                    <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                        <h3 class="job-title"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h3>
                    <?else:?>
                        <h3 class="job-title"><a><?echo $arItem["NAME"]?></a></h3>
                    <?endif;?>
                <?endif;?>
                <h5 class="job-destitle"><?if(isset($arItem["DISPLAY_PROPERTIES"]["Company"]["DISPLAY_VALUE"])):?>в компанию: <a><?=$arItem["DISPLAY_PROPERTIES"]["Company"]["DISPLAY_VALUE"];?></a>,<?endif;?> график: <a><?=$arItem["DISPLAY_PROPERTIES"]["Schedule"]["DISPLAY_VALUE"];?></a></h5>
                <div class="job-description">
                    <b>Требования</b>: <?=$arItem["DISPLAY_PROPERTIES"]["Requirements"]["DISPLAY_VALUE"];?>
                </div>
                <!--<div class="description">
						<div class="description--requirements"><b>Требования</b>: <?=$arItem["DISPLAY_PROPERTIES"]["Requirements"]["DISPLAY_VALUE"];?></div><hr>
						<div class="description--conditions"><b>Условия</b>: <?=$arItem["DISPLAY_PROPERTIES"]["Conditions"]["DISPLAY_VALUE"];?></div>
					</div>
					<div class="extra"><div class="ui label"><?=is_int($arItem["DISPLAY_PROPERTIES"]["Salary"]["DISPLAY_VALUE"]) ? $arItem["DISPLAY_PROPERTIES"]["Salary"]["DISPLAY_VALUE"] : $arItem["DISPLAY_PROPERTIES"]["Salary"]["DISPLAY_VALUE"] . " руб.";?></div> <div class="ui right floated"><?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?><?echo $arItem["DISPLAY_ACTIVE_FROM"]?><?endif?></div></div>-->
            </div>
            <div class="job-salary">
                <?=is_int($arItem["DISPLAY_PROPERTIES"]["Salary"]["DISPLAY_VALUE"]) ? $arItem["DISPLAY_PROPERTIES"]["Salary"]["DISPLAY_VALUE"] : $arItem["DISPLAY_PROPERTIES"]["Salary"]["DISPLAY_VALUE"] . " руб.";?>
            </div>
            <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?><div class="job-time" data-toggle="tooltip" data-placement="right" title="Дата публикации"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div><?endif?>
        </div>
    <?endforeach;?>
</div>
<div class="ui pagination">
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?>
	<?endif;?>
</div>