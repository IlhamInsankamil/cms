<?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase{
	// semua kode yang ada disini dapat
	// diakses melalui fungsi utama dalam CMS.

	function run(){
		// disini adalah kode untuk mengatur 
		// seluruh proses dalam cmsApplicaion
		// fungsi ini akan dipanggil dari templateFunction
		$method = (isset($_REQUEST['task']))?$_REQUEST['task']:'display';
		$this->$method();
	}

	function display(){
		echo "This is base display";
	}

}