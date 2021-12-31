<?php
@session_start();
require_once 'model/adminSignModel.php';

class adminController {

	function __construct() {

	}

	public function redirect($location) {
		header('Location: ' . $location);
	}

	public function handleRequest() {
		
		if (isset($_POST['signin'])) {
			$obs = new adminSignModel();			
			$r = $obs -> adminLogin($_POST['adminuser'], $_POST['password']);
			if ($r == FALSE) {
				echo "<script type='text/javascript'>alert('Invalied user name or password')</script>";
				include 'view/home.php';
			} 
			else {				
				$_SESSION['adminuser'] = $r -> Email;				
				$this->redirect('view/admin.php');
				}
        }
            
            
		else if (isset($_POST['logout'])){
			$obs = new adminSignModel();
			$obs ->logoutAdmin();
			$this -> redirect('index.php');
			
		}
	}

}
?>