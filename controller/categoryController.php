<?php
@session_start();
require_once 'model/categoryModel.php';

class categoryController {

	function __construct() {

	}

	public function redirect($location) {
		header('Location: ' . $location);
	}

	public function handleRequest() {        
		if (isset($_POST['submit_info'])){
			$obs = new addCategory();
			$obs -> submit_info($_POST['id'], $_POST['label']);
			include 'admin/index.php';                           
        }
    }
}
?>