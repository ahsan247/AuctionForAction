<div class="row">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php" style="font-family:Kaushan Script; font-size:20px;">Auction For Action</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active" ><button onclick="document.location='index.php'" type="button" class="btn btn-default btn-md" style="margin-top: 7.5px;margin-left:300px;"><span class="glyphicon glyphicon-home"></span> Home</button></li>                

                <?php
                    if (isset( $_SESSION['user'])) {
				?>
                <li>
                    <?php
					require 'view/submit_ad.php';
					?>
                </li>
                <?php } ?>


                <li class="pull-right"> . </li>

                <?php
if (!isset($_SESSION['user'])) {
				?>
                <li class="pull-right" style="margin-left:300px">
                    <?php
					require 'login_signup.php';
					?>
                </li>
                <?php } ?>            




                <?php
if (isset( $_SESSION['user'])) {
				?>
                <li class="pull-right">
                    <form class="navbar-form navbar-left" method="post" action="user.php">
                        <div class="form-group">
                            <input name="logout" class="btn btn-info" value="Logout" type="submit">
                        </div>
                    </form>
                </li>
                <?php } ?> <li class="pull-right"> . </li>
                
                
                
                

                <li class="pull-right">

                    <form class="navbar-form navbar-left" method="get" action="products.php">
                        <div class="form-group">
                            <input name="srch" type="text" class="form-control" placeholder="Search for...">
                            <input type="submit" style="display: none;" name="search" />
                        </div>
                        <button type="submit" class="btn btn-default" name="search">Search</button>
                    </form>

                </li>

            </ul>
        </div>
</div>
