<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="css/js/jquery.min.js"></script>
    <script src="css/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
</head>


<body>
    
    <div class="row">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin.php" style="font-family:Kaushan Script; font-size:20px">Auction For Action</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active" style="margin-left:950px"><a href="admin.php">Home</a></li>
                

                <?php
                    if (isset($_SESSION['adminuser'])) {
				?>
          
                <?php } ?>


                <li class="pull-right"> . </li>            



                <?php
                if (isset( $_SESSION['adminuser'])) {
				?>
                <li class="pull-right">
                    <form class="navbar-form navbar-left" method="post" action="admin_user.php">
                        <div class="form-group">
                            <input name="logout" class="btn btn-info" value="Logout" type="submit">
                        </div>
                    </form>
                </li>
                <?php } ?> <li class="pull-right"> . </li>
                
                
                
                

                  <li class="pull-right">
                    <form class="navbar-form navbar-left" method="post" action="../index.php">
                        <div class="form-group">
                            <input name="logout" class="btn btn-info" value="Logout" type="submit">
                        </div>
                    </form>
                </li>

            </ul>
        </div>
        </nav>
    
    </div>
    

    
    <div align="center">
        <a href="admin.php">
            <h1 class="style2" style="font-family:Arial; margin-top: 80px;">Administrator</h1>
        </a>
        <p>&nbsp;</p>

        <?php                    
                    if(ISSET($_GET['msg']))                       
                    echo '<div class="alert alert-success" role="alert"> Data successfully inserted</div>'; 
                ?>
        <!------Input Category------------>


        <div class="col-md-3 offset-md-2" style="border: 2px solid black; border-radius: 10px; margin-left: 20px; box-shadow:
            inset 0 -3em 3em rgba(0,0,0,0.1), 0 0  0 2px rgb(255,255,255), 0.3em 0.3em 1em rgba(0,0,0,0.3); margin-top:35px;">
            <h4 style="font-size: 30px"><Strong>Donation Seeker Input</Strong></h4>
            <form action="../model/adminConnectModel.php" method="post">


                <div class="form-group" style="height:100%; weight:35%">
                    <label for="campaign_id" class="sr-only">Enter Campaign ID</label>
                    <input type="number" class="form-control" id="mid" name="mid" placeholder="Enter Campaign ID">
                </div>
                <div class="form-group">
                    <label for="campaign_name" class="sr-only"> Campaign Title</label>
                    <input type="text" class="form-control" id="lbl" name="lbl" placeholder="Campaign Title">
                </div>
                <button class="btn btn-danger" type="submit" style="margin-bottom: 10px">Submit</button>
            </form>
        </div>

        <!------Input Category End------------>



        <!------Input User and Product Control ------------>




        <form id="form1" name="form1" method="post" action="" style="display:block">


            <!------Input User and Product Control ------------>

            <div class="col-md-3 offset-md-2" style="border: 2px solid black; border-radius: 10px; margin-left: 20px; box-shadow:
            inset 0 -3em 3em rgba(0,0,0,0.1), 0 0  0 2px rgb(255,255,255), 0.3em 0.3em 1em rgba(0,0,0,0.3); position:absolute; margin-top:300px">
                <h4 style="font-size: 30px"><Strong>Control Panels</Strong></h4>

                <div class="form-inline">
                    <label for="remove_product" class="sr-only">Remove Campaign</label>
                    <input type="text" class="form-control" name="id" placeholder="Campagin ID" style="margin-bottom: 10px">

                    <button class="btn btn-primary mb-2" name="dltctg" type="submit" id="dltctg" value="Delete Product" style="margin-bottom: 10px">Remove</button>
                </div>

                <div class="form-inline">
                    <label for="remove_product" class="sr-only">Remove Product</label>
                    <input type="text" class="form-control" name="pid" placeholder="Type Product ID" style="margin-bottom: 10px">

                    <button class="btn btn-primary mb-2" name="dltpr" type="submit" id="dltpr" value="Delete Product" style="margin-bottom: 10px">Remove</button>
                </div>


                <div class="form-inline">
                    <label for="remove_product" class="sr-only">Remove User</label>
                    <input type="text" class="form-control" name="uid" placeholder="Type User ID" style="margin-bottom: 10px">

                    <button class="btn btn-primary mb-2" name="dltuser" type="submit" id="dltuser" value="Delete User" style="margin-bottom: 10px">Remove</button>
                </div>
            </div>

            <!------Input User and Product Control ------------>




            <!------Bid Activation ------------>

            <div class="col-md-3 offset-md-2" style="border: 2px solid black; border-radius: 10px; margin-left: 20px; box-shadow:
            inset 0 -3em 3em rgba(0,0,0,0.1), 0 0  0 2px rgb(255,255,255), 0.3em 0.3em 1em rgba(0,0,0,0.3); position:absolute; margin-top:525px; margin-bottom:50px">
                <h4 style="font-size: 30px"><Strong>Auction Activation</Strong></h4>

                <div class="form-group">
                    <label for="remove_product" class="sr-only">Product ID</label>
                    <input type="text" class="form-control" name="prid" placeholder="Enter Product ID" style="margin-bottom: 10px" />

                </div>
                <div class="form-group">
                    <label for="remove_product" class="sr-only">End Time</label>
                    <input type="text" class="form-control" name="bidtime" placeholder="YYYY-MM-DD hh:mm:ss" style="margin-bottom: 10px" />
                </div>

                <button class="btn btn-success mb-2" name="btime" type="submit" id="btime" value="Update Time" style="margin-bottom: 10px">Activate</button>
            </div>


            <!------<!------Bid Activation END------------>

        </form>


        
    <hr>
    </div>
    
    <div style="width: 100%">
        <?php 
        require '../model/adminModel.php'; 
        ?>

    </div>
    
      
</body>

</html>
