<?php

require_once "API/Request.php";
require_once "View/DataTable.php";
class Piwik_Actions_Controller extends Piwik_Controller
{	
	function index( )
	{
		$dataTableActions = $this->getActions( true );
		echo $dataTableActions;
	}
	function getActions($fetch = false)
	{
		$view = new Piwik_View_DataTable( __FUNCTION__, 'Actions.getActions' );
		$view->disableSearchBox();
		$view->disableSort();
		$view->disableOffsetInformation();
		
		$view->setDefaultLimit( 10 );
		
		return $this->renderView($view, $fetch);
	}
}
