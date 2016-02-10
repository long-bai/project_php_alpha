<?php 
namespace TestEveBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class TestEvent extends Event
{
	/** @var string */
	protected $strUrl = null;
	
	protected $arList = array();

	public function setUrl($strUrl)
	{
		$this->strUrl = $strUrl;
	}

	public function getList()
	{
		return $this->arList;
	}
}
?>