<?php

$conn = new mysqli("localhost", "root", "", "AuctionForAction");
if ($conn -> connect_error) {
die("Connection failed:" . $conn -> connect_error);
}
        
        
        
        

//------------------delete campaign----------------------

if (isset($_POST['dltctg'])) {

	$id=$_REQUEST['id'];
	$sql = "DELETE FROM menu WHERE id=$id ORDER BY id";
	$conn -> query($sql);
	
	$sql = "SELECT id,label FROM menu";
	$result = $conn -> query($sql);
	if ($result -> num_rows > 0) {


	while ($row = $result -> fetch_assoc()) {
      
        
	}
        echo '<meta http-equiv="refresh" content="0; admin.php">';

	} else {
        
        echo '<meta http-equiv="refresh" content="0; admin.php">';
	}
   
}
        
        
        
        
        
        
        
//------------------delete product----------------------

elseif (isset($_POST['dltpr'])) {

	$id=$_REQUEST['pid'];
	$sql = "DELETE FROM addproducts WHERE pid=$id";
	$conn -> query($sql);
	
	$sql = "SELECT pid,title,price,btime FROM addproducts ORDER BY pid";
	$result = $conn -> query($sql);
	if ($result -> num_rows > 0) {	

	while ($row = $result -> fetch_assoc()) {

	}
        echo '<meta http-equiv="refresh" content="0; admin.php">';

	} else {

        echo '<meta http-equiv="refresh" content="0; admin.php">';
	}
}

//--------------------delete user----------------------

elseif (isset($_POST['dltuser'])) {

	$id=$_REQUEST['uid'];
	$sql = "DELETE FROM details WHERE uid=$id";
	$result = $conn -> query($sql);
	
	$sql = "SELECT uid,Email,password FROM details ORDER BY uid";
	$result = $conn -> query($sql);
	if ($result -> num_rows > 0) {
	
	while ($row = $result -> fetch_assoc()) {

	}
        echo '<meta http-equiv="refresh" content="0; admin.php">';

        
	} else {
	echo '<meta http-equiv="refresh" content="0; admin.php">';
	}
	
}

//-----------------------update bid time------------------------

elseif (isset($_POST['btime' ])) {

	$id=$_REQUEST['prid'];
	$btime=$_REQUEST['bidtime'];	
	
	$sql = "UPDATE addproducts SET btime='$btime' WHERE pid=$id";
	$result = $conn -> query($sql);
	
	$sql = "SELECT pid,title,price,btime FROM addproducts ORDER BY pid";
	$result = $conn -> query($sql);
	if ($result -> num_rows > 0) {


	while ($row = $result -> fetch_assoc()) {

	}
        echo '<meta http-equiv="refresh" content="0; admin.php">';

	} else {
	echo '<meta http-equiv="refresh" content="0; admin.php">';
	}
	}
	
	
else {
	
	//--------------------------product---------------------------    
    
    echo '<div style="width:65%; margin-left:430px; box-shadow:
            inset 0 -3em 3em rgba(0,0,0,0.1), 0 0  0 2px rgb(255,255,255), 0.3em 0.3em 1em rgba(0,0,0,0.3); border-radius: 10px;"><h2><center><strong>Product Table<strong></center></h2>';
	$sql = "SELECT pid,title,price,btime FROM addproducts ORDER BY pid";
	$result = $conn -> query($sql);
    
    if ($result -> num_rows > 0) {
    
        echo '<div style="box-shadow:
            inset 0 -3em 3em rgba(0,0,0,0.1), 0 0  0 2px rgb(255,255,255), 0.3em 0.3em 1em rgba(0,0,0,0.3);"><table class="table table-striped table-bordered table-hover table-condensed" align="center" style="width:100%; border-radius: 10px;">
  <thead bgcolor="black">
    <tr>
      <th scope="col" style="color:white;">ID</th>
      <th scope="col" style="color:white;">Product Name</th>
      <th scope="col"style="color:white;">Asking Price</th>
      <th scope="col"style="color:white;">End Time</th>
    </tr>
  </thead>';
        while ($row = $result -> fetch_assoc()) {
	echo "
        
        <tbody>
    <tr>
      <td>" . $row["pid"] . "</td><td>" . $row["title"] . "</td><td>" . $row["price"] . "</td><td>" . $row["btime"] . "</td>
    </tr>            
        ";
        
        }
        
        echo "</tbody></table>";
    }
    else {
	echo "No product here.";
	}
	
    
    
    
    
    
    
    
    
    
	//------------------user----------------------------
	
      
    echo '<div style="width:100%; margin-left:0px;"><h2><center><strong>User Table<strong></center></h2>';
	$sql = "SELECT uid,Email,password FROM details ORDER BY uid";
	$result = $conn -> query($sql);
    
    if ($result -> num_rows > 0) {
    
        echo '<div style="box-shadow:
            inset 0 -3em 3em rgba(0,0,0,0.1), 0 0  0 2px rgb(255,255,255), 0.3em 0.3em 1em rgba(0,0,0,0.3);"><table class="table table-striped table-bordered table-hover table-condensed" align="center" style="width:100%; border-radius: 10px; margin-left:0px;">
  <thead bgcolor="black">
    <tr>
      <th scope="col" style="color:white;">ID</th>
      <th scope="col" style="color:white;">Name or Email</th>
      <th scope="col"style="color:white;">Password</th>      
    </tr>
  </thead>';
        while ($row = $result -> fetch_assoc()) {
	echo "
        
        <tbody>
    <tr>
     <td>" . $row["uid"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["password"] . "</td>
    </tr>            
        ";
        
        }
        
        echo "</tbody></table>";
    }
    else {
	echo "No user here.";
	}
    
    
    //------------------Campaign Table----------------------------
	
      
    echo '<div style="width:100%; margin-left:0px;"><h2><center><strong>Campaign Table<strong></center></h2>';
	$sql = "SELECT id,label FROM menu ORDER BY id";
	$result = $conn -> query($sql);
    
    if ($result -> num_rows > 0) {
    
        echo '<div style="box-shadow:
            inset 0 -3em 3em rgba(0,0,0,0.1), 0 0  0 2px rgb(255,255,255), 0.3em 0.3em 1em rgba(0,0,0,0.3);"><table class="table table-striped table-bordered table-hover table-condensed" align="center" style="width:100%; border-radius: 10px; margin-left:0px;">
  <thead bgcolor="black">
    <tr>
      <th scope="col" style="color:white;">ID</th>
      <th scope="col" style="color:white;">Campaign Title</th>    
    </tr>
  </thead>';
        while ($row = $result -> fetch_assoc()) {
	echo "
        
        <tbody>
    <tr>
     <td>" . $row["id"] . "</td><td>" . $row["label"] . "</td>
    </tr>            
        ";
        
        }
        
        echo "</tbody></table>";
    }
    else {
	echo "No campaign running.";
	}


	}
?>
