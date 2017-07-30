<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav navbar-nav-fix">
                    <?
                    foreach($arResult as $arItem):
                        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                            continue;
                        ?>
                        <?if($arItem["SELECTED"]):?>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                        </li>
                    <?else:?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                        </li>
                    <?endif?>
                    <?endforeach?>
                </ul>
                <ul class="navbar-nav">
                    <?if($USER->IsAuthorized()):?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?=$USER->GetLogin()?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/profile">Профиль</a>
                                <a class="dropdown-item" href="/?logout=yes">Выйти</a>
                            </div>
                        </li>
                    <?else:?>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Авторизация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/registration">Регистрация</a>
                        </li>
                    <?endif?>
                </ul>
            </div>
        </div>
    </nav>
<?endif?>