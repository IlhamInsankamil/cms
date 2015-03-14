<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase{
	// semua kode yang ada disini dapat
	// diakses melalui fungsi utama dalam CMS.

	function addcontent(){
		echo "Here add content functionally will takes place";
	}
	function viewcontent(){
		echo "Here view content functionally will takes place";
	}
	function anyothertask(){
		echo "This is another task, here can be written a complete PHP program against that task";
	}

}