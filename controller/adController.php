<?php
@session_start();
require_once 'model/adModel.php';

class adController {

	function __construct() {

	}

	public function redirect($location) {
		header('Location: ' . $location);
	}

	public function handleRequest() {
		if (isset($_POST['submit'])) {
			$this -> addProducts();

		}
	}

	public function addProducts() {
		$cat;

		$slidermodalobj = new adModel();
		$p = $slidermodalobj -> upload();
		$slidermodalobj -> submitadd($_POST['Title'], $_POST['Description'], $_POST['price'], $_POST['Category'], $p, $_POST['name'], $_POST['email'], $_POST['number']);
		$this->redirect('index.php');
	}

}
?>