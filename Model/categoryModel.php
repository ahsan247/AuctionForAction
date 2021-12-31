<?php

require_once 'config.php';
class categoryModel {

	function __construct() {
		$this -> conset = new config();
	}

	public function openDB() {
		$this -> conn = new mysqli($this -> conset -> servername, $this -> conset -> username, $this -> conset -> password, $this -> conset -> dbname);
		if ($this -> conn -> connect_error) {
			die("Connection failed: " . $this -> conn -> connect_error);
		}
	}

	public function closeDB() {
		$this -> conn -> close();
	}
    
    
    
    
    
    
    public function addCategory($id, $label){
        $ccn = mysql_connect("localhost","root","")or die("connecton error");
		mysql_select_db("AuctionForAction",$ccn)or die("selection error");
			
		$sql = "SELECT * FROM menu WHERE id= '$id'";
		$rs = mysql_query($sql,$ccn) or die("query error");
			

		$sig = 0;

		while ($row = mysql_fetch_array($rs)) {
				if ($id == $row["id"])
				$sig = 1;
		}


		if($sig==0){
			$sqll = "INSERT INTO menu (id, label) VALUES ('$id', '$label')";
			$rs = mysql_query($sqll,$ccn) or die("Insertion error");		
			echo "<script type='text/javascript'>alert('successfull')</script>";
			
		}else {
			echo "<script type='text/javascript'>alert('Already Exist!')</script>";
			
    }
    }
        
        
        
        
        
        
        

	public function getCategory() {
		$this -> openDB();
		$stmt = $this -> conn -> prepare("SELECT id, label, link, parent FROM menu");
		$menu = array('items' => array(), 'parents' => array());
		$stmt -> execute();
		$res = $stmt -> get_result();
		while ($items = $res -> fetch_assoc()) {
			$menu['items'][$items['id']] = $items;
			$menu['parents'][$items['parent']][] = $items['id'];
		}
		$stmt -> close();
		$this -> closeDB();
		return $menu;
	}

}
?>
