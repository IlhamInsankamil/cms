<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase{
	// semua kode yang ada disini dapat
	// diakses melalui fungsi utama dalam CMS.

	function run(){
		// disini adalah kode untuk mengatur 
		// seluruh proses dalam cmsApplicaion
		// fungsi ini akan dipanggil dari templateFunction
		if (isset($_REQUEST['task'])){
			$task = $_REQUEST['task'];
			switch ($task) {
				case 'addcontent':
					$this->addcontent();
					break;
				case 'anyothertask':
					$this->anyothertask();
					break;
				default:
					$this->display();
					break;
			}
		}
		else{
			// if no query string has passed then by default 
			// interaction should be view content
			$this->display();
		}
	}

	function addcontent(){
		echo "Here add content functionally will takes place";
	}
	function display(){
		echo "Here view content functionally will takes place";
	}
	function anyothertask(){
		echo "This is another task, here can be written a complete PHP program against that task";
	}

}