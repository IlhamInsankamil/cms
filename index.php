<?php
require_once ("includes/cmsApplication.php");
$app = new CmsApplication();
	if (isset($_REQUEST['task'])){
		$task = $_REQUEST['task'];
		switch ($task) {
			case 'addcontent':
				$app->addcontent();
				break;
			case 'anyothertask':
				$app->anyothertask();
				break;
			default:
				$app->viewcontent();
				break;
		}
	}
	else{
		// if no query string has passed then by default 
		// interaction should be view content
		$app->viewcontent();
	}