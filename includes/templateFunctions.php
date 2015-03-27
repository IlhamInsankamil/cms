<?php
require_once('cmsBase.php');
class TemplateFunctions extends CmsBase{
	// semua fungsi yang terkait pengaturan
	// template ada disini.

	var $templateName='default';
	var $widgetPosition=array();

	function show(){
		require_once($this->getCurrentTemplatePath() . 'template.php');
	}

	function getCurrentTemplatePath(){
		return 'templates/' . $this->templateName.'/';
	}

	function setTemplate($templateName){
		$this->templateName = $templateName;
	}

	function appOutput(){
		require_once('includes/cmsApplication.php');
		$app = new CmsApplication();
		$app->run();
	}

	function widgetOutput($position='default'){
			if (!empty($this->widgetPosition[$position])){
				$widgets=$this->widgetPosition[$position];
				foreach ($widgets as $widgetName) {
					require_once('widgets/'.$widgetName.'/'.$widgetName.'.php');
					$widgetclass=ucfirst($widgetName).'Widget';
					$widget=new $widgetclass();
					$widget->run($widgetName);
				}
			}
	}

	function setWidget($position,$widgetName){
		if (empty($this->widgetPosition[$position])){
			$this->widgetPosition[$position]=array($widgetName);
		} else {
			array_push($this->widgetPosition[$position], $widgetName);
		}
	}

}
?>