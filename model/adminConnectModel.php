<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AuctionForAction";


$conn = new mysqli($servername, $username, $password);


if($conn-> connect_error) {
	die ("Connection failed: " . $conn-> connect_error);
}
else
{
	mysqli_select_db($conn, $dbname);
	
}

$mid=$_POST['mid'];
$lbl=$_POST['lbl'];

if($conn->connect_error){
    die('Connection failed'.$cnn->connect_error);
}else{    
    $stmt = $conn->prepare("INSERT INTO menu(id, label) values(?, ?)");    
    
    $stmt->bind_param("is", $mid, $lbl);
    
    $stmt->execute();    
    
    $stmt->close();
    
    $conn->close();
    
    
    header("Location: ../view/admin.php?msg=".$msg);
}

?>
