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
<form class="form-well" name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get">
	<?foreach($arResult["ITEMS"] as $arItem):
		if(array_key_exists("HIDDEN", $arItem)):
			echo $arItem["INPUT"];
		endif;
	endforeach;?>
	<h4 class="text-center"><?=GetMessage("IBLOCK_FILTER_TITLE")?></h4>
    <hr class="my-4">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?if(!array_key_exists("HIDDEN", $arItem)):?>
            <div class="form-group">
                <label><?=$arItem["NAME"]?></label>
                <div class="form-input"><?=$arItem["INPUT"]?></div>
            </div>
        <?endif?>
    <?endforeach;?>
    <button type="submit" name="set_filter" class="btn btn-primary btn-sm"><?=GetMessage("IBLOCK_SET_FILTER")?></button><input type="hidden" name="set_filter" value="Y" /> <button type="submit" name="del_filter" class="btn btn-secondary btn-sm"><?=GetMessage("IBLOCK_DEL_FILTER")?></button>
</form>
