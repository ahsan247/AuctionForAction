<form class="navbar-form navbar-left">
<button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target=".bs-example1-modal-lg" data-dismiss="modal" tabindex="-1" data-keyboard="false" data-backdrop="false">
    Login or Sign Up
</button></form>


<div class="modal fade bs-example1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div style="">
            <div class="container">
                <div id="loginbox" style="margin-top: 150px;margin-left: 150px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info"style="box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Log In
                                <div style="float:right; font-size: 100%; position: relative; margin-top:0px">
                                <a href="index.php">Close</a>
                            </div>
                            </div>
                            
                        </div>
                        <div style="padding-top:30px" class="panel-body">

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                            <form id="loginform" method="post" action="user.php" class="form-horizontal" role="form">

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" required name="user" type="text" class="form-control" name="user" value="" placeholder="username or email">
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" required name="password" type="password" class="form-control" name="password" placeholder="password">
                                </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9" style="margin-left:42%">
                                        <input name="signin" class="btn btn-info" value="Login" type="submit" />

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                            Don't have an account!
                                            <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()"> Sign Up Here </a>
                                            <a href="#" onClick="$('#loginbox').hide(); $('#adminlogin').show()">&nbsp;&nbsp;|&nbsp;&nbsp;Admin Login </a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                
                
                
                <!-------------------------Admin------------------------>
                
               
                 <div id="adminlogin" style="display:none; margin-top: 150px;margin-left: 150px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info"style="box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Admin Log In
                                <div style="float:right; font-size: 100%; position: relative; margin-top:0px">
                                <a href="index.php">Close</a>
                            </div>
                            </div>
                            
                        </div>
                        <div style="padding-top:30px" class="panel-body">

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                            <form id="adminloginform" method="post" action="admin_user.php" class="form-horizontal" role="form">

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-username" required name="adminuser" type="text" class="form-control" name="adminuser" value="" placeholder="Admin Email">
                                </div>

                                <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" required name="password" type="password" class="form-control" name="password" placeholder="password">
                                </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9" style="margin-left:42%">
                                        <input name="signin" class="btn btn-info" value="Login" type="submit" />

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                            Don't have an account!
                                            <a href="#" onClick="$('#adminlogin').hide(); $('#signupbox').show()"> Sign Up Here </a>
                                            <a href="#" onClick="$('#adminlogin').hide(); $('#loginbox').show()"> &nbsp;&nbsp;|&nbsp;&nbsp;User Login </a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                
                
                 
                <!-------------------------Admin Login End------------------------>
                
                
                
                <div id="signupbox" style="display:none; margin-top: 130px;margin-left: 130px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Sign Up
                                <div style="float:right; font-size: 100%; position: relative; margin-top:0px">
                                <a href="index.php">Close</a>
                        </div>
                            </div>
                            
                        <div class="panel-body">
                            <form id="signupform" class="form-horizontal" role="form" method="post" action="user.php">

                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Username:</label>
                                    <div class="col-md-9">
                                        <input type="text" required class="form-control" name="email" placeholder="username">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name:</label>
                                    <div class="col-md-9">
                                        <input type="text" required class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name:</label>
                                    <div class="col-md-9">
                                        <input type="text" required class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="number" class="col-md-3 control-label">Mobile:</label>
                                    <div class="col-md-9">
                                        <input type="text" required class="form-control" maxlength="10" name="number" placeholder="Mobile Number" onkeypress="return isNaN">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password:</label>
                                    <div class="col-md-9">
                                        <input type="password" required class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                                        <input id="btn-signup" type="submit" name="signup" value="SignUp" class="btn btn-info" />

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                            Already have an account?!
                                            <a href="#" onClick="$('#signupbox').hide(); $('#loginbox').show()"> Login here. </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
