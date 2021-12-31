<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "AuctionForAction";

//creating connection 

$conn = new mysqli($servername, $username, $password);

//check connection 

if($conn-> connect_error) {
	die ("Connection failed: " . $conn-> connect_error);
}
else
{
	mysqli_select_db($conn, $dbname);
	//echo "connection successful";
}


//require_once 'config.php';
?>


<li class="pull-left">
    <form class="navbar-form navbar-left" method="post" action="user.php">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example3-modal-lg" data-dismiss="modal" data-backdrop="false">Upload Your Product Advertisement for Auction</button>
    </form>
</li>
<div class="modal fade bs-example3-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="container-fluid" id="container">
                <h2>Submit Your Ad!</h2>

                <form id="registerForm" action="add.php" method="post" enctype="multipart/form-data" class="form-horizontal span8">
                    <div class="control-group">
                        <label class="control-label" for="ad_title">Product Title</label>
                        <div class="controls">
                            <input type="text" required id="user_ad_title" class="form-control" name="Title" maxlength="15" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="discription">Discription</label>
                        <div class="controls">
                            <textarea class="form-control" rows="3" cols="17" name="Description"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="last_name">Price</label>
                        <div class="controls">
                            <input type="number" required class="form-control" name="price" id="user_price" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="discription">Select your category</label>
                        <div class="controls">

                            <?php                         
                            echo '<select name="Category">
                            <option>Select</option>';

                            $sqli = "SELECT id, label FROM menu";
                            $result = mysqli_query($conn, $sqli);
                            while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="'.$row['id'].'">'.$row['id'].'</option>';
                            }

                            echo '</select>';                   
                            ?>

                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-lebel" for="Inputimg">Image</label>
                        <div class="controls"></div>
                        <input type="file" class="form-control" id="Inputimg" name="file">
                    </div>

                    <hr />
                    <div class="control-group">
                        <label class="control-label" for="first_name">Name</label>
                        <div class="controls">
                            <input type="text" required class="form-control" name="name" id="user_first_name" />
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">Username</label>
                        <div class="controls">
                            <input type="text" required class="form-control" name="email" id="user_email" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="text">Mobile</label>
                        <div class="controls">
                            <input type="text" required class="form-control" name="number" id="user_number" />
                        </div>
                    </div>
                    <br />
                    <div class="control-group">
                        <div class="controls">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Submit Now!" />


                        </div>
                    </div>
                    <br />
                </form>

            </div>

        </div>
    </div>
</div>