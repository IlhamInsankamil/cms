<?php
require_once('includes/cmsApplication.php');
class DefaultApplication extends CmsApplication {

	function addcontent(){
		echo "Here add content functionally will takes place";
	}
	function display(){
		echo "It's default task of application";
	}
	function anyothertask(){
		echo "This is another task, here can be written a complete PHP program against that task";
	}

}

?>