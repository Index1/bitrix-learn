<?
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

    use Bitrix\Main;

    class CEuclihellJobsList extends CBitrixComponent
    {
        protected $arDefaultVariableAliases404 = [];

        protected $arDefaultVariableAliases = [];

        protected $componentPage;

        protected $arComponentVariables = [
            'ELEMENT_ID',
            'ELEMENT_CODE',
        ];

        protected $arDefaultUrlTemplates404 = [
            "jobs.list" => "",
            "search" => "search/",
            "rss" => "rss/",
            "detail" => "#ELEMENT_ID#/"
        ];

        protected function abortDataCache()
        {
            $this->AbortResultCache();
        }

        public function getParamsUseFilter()
        {
            if($this->arParams["USE_FILTER"]=="Y")
            {
                if(strlen($this->arParams["FILTER_NAME"])<=0 || !preg_match("/^[A-Za-z_][A-Za-z01-9_]*$/", $this->arParams["FILTER_NAME"]))
                    $this->arParams["FILTER_NAME"] = "arrFilter";
            }
            else {
                $this->arParams["FILTER_NAME"] = "";
            }
        }

        public function getParamsUseSearch()
        {
            if($this->arParams["USE_SEARCH"] != "Y")
            {
                unset($this->arDefaultUrlTemplates404["search"]);
                unset($this->arParams["SEF_URL_TEMPLATES"]["search"]);
            }
            else {
                $this->arComponentVariables[] = "q";
                $this->arComponentVariables[] = "tags";
            }
        }

        public function getParamsUserRss()
        {
            if($this->arParams["USE_RSS"] != "Y")
            {
                unset($this->arDefaultUrlTemplates404["rss"]);
                unset($this->arParams["SEF_URL_TEMPLATES"]["rss"]);
            }
            else {
                $arComponentVariables[] = "rss";
            }
        }

        public function getParamsUserMode()
        {
            if($this->arParams["SEF_MODE"] == "Y")
            {
                $arVariables = array();

                $arUrlTemplates = CComponentEngine::makeComponentUrlTemplates($this->arDefaultUrlTemplates404, $this->arParams["SEF_URL_TEMPLATES"]);
                $arVariableAliases = CComponentEngine::makeComponentVariableAliases($this->arDefaultVariableAliases404, $this->arParams["VARIABLE_ALIASES"]);

                $engine = new CComponentEngine($this);
                if (CModule::IncludeModule('iblock'))
                {
                    $engine->addGreedyPart("#SECTION_CODE_PATH#");
                    $engine->setResolveCallback(array("CIBlockFindTools", "resolveComponentEngine"));
                }
                $this->componentPage = $engine->guessComponentPath(
                    $this->arParams["SEF_FOLDER"],
                    $arUrlTemplates,
                    $arVariables
                );

                $b404 = false;
                if(!$this->componentPage)
                {
                    $this->componentPage = "jobs.list";
                    $b404 = true;
                }

                if($b404 && CModule::IncludeModule('iblock'))
                {
                    $folder404 = str_replace("\\", "/", $this->arParams["SEF_FOLDER"]);
                    if ($folder404 != "/")
                        $folder404 = "/".trim($folder404, "/ \t\n\r\0\x0B")."/";
                    if (substr($folder404, -1) == "/")
                        $folder404 .= "index.php";

                    if ($folder404 != CMain::GetCurPage(true))
                    {
                        \Bitrix\Iblock\Component\Tools::process404(
                            ""
                            ,($this->arParams["SET_STATUS_404"] === "Y")
                            ,($this->arParams["SET_STATUS_404"] === "Y")
                            ,($this->arParams["SHOW_404"] === "Y")
                            ,$this->arParams["FILE_404"]
                        );
                    }
                }

                CComponentEngine::initComponentVariables($this->componentPage, $this->arComponentVariables, $arVariableAliases, $arVariables);

                $arResult = array(
                    "FOLDER" => $this->arParams["SEF_FOLDER"],
                    "URL_TEMPLATES" => $arUrlTemplates,
                    "VARIABLES" => $arVariables,
                    "ALIASES" => $arVariableAliases,
                );
            }
            else {
                $arVariableAliases = CComponentEngine::makeComponentVariableAliases($this->arDefaultVariableAliases, $this->arParams["VARIABLE_ALIASES"]);
                CComponentEngine::initComponentVariables(false, $this->arComponentVariables, $arVariableAliases, $arVariables);

                if(isset($arVariables["ELEMENT_ID"]) && intval($arVariables["ELEMENT_ID"]) > 0)
                    $this->componentPage = "jobs.detail";
                elseif(isset($arVariables["ELEMENT_CODE"]) && strlen($arVariables["ELEMENT_CODE"]) > 0)
                    $this->componentPage = "jobs.detail";
                elseif(isset($arVariables["q"]) && strlen(trim($arVariables["q"])) > 0)
                    $this->componentPage = "search";
                elseif(isset($arVariables["tags"]) && strlen(trim($arVariables["tags"])) > 0)
                    $this->componentPage = "search";
                elseif(isset($arVariables["rss"]) && $arVariables["rss"]=="y")
                    $this->componentPage = "rss";
                else
                    $this->componentPage = "jobs.list";

                $this->arResult = array(
                    "FOLDER" => "",
                    "URL_TEMPLATES" => array(
                        "jobs.list" => htmlspecialcharsbx(CMain::GetCurPage()),
                        "detail" => htmlspecialcharsbx(CMain::GetCurPage()."?".$arVariableAliases["ELEMENT_ID"]."=#ELEMENT_ID#"),
                        "search" => htmlspecialcharsbx(CMain::GetCurPage()),
                        "rss" => htmlspecialcharsbx(CMain::GetCurPage()."?rss=y"),
                    ),
                    "VARIABLES" => $arVariables,
                    "ALIASES" => $arVariableAliases
                );
            }
        }

        public function checkModules()
        {
            if(!CModule::IncludeModule('iblock'))
                throw new Main\LoaderException('Модуль iblock не был загружён!');
        }

        public function executeComponent()
        {
            try {
                $this->checkModules();
                $this->getParamsUseFilter();
                $this->getParamsUseSearch();
                $this->getParamsUserRss();
                $this->getParamsUserMode();

                $this->includeComponentTemplate($this->componentPage);
            } catch (Exception $e) {
                $this->abortDataCache();
                ShowError($e->getMessage());
            }
        }
    }
?>