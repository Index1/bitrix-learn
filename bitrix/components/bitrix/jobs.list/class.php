<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Web\Json;
use Bitrix\Main\Loader;

Loc::loadMessages(__FILE__);

class JobsList extends CBitrixComponent
{
	protected $USER;

	public function __construct($component = null)
	{
		var_dump($component);
		parent::__construct($component);
	}

	public function isMyJob()
	{
		return (
			$this->request->getQuery('myJob')
			||
			$this->request->getQuery('job') == 'my-job'
		);
	}
}