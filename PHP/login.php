<?php
require "includes/common.php";
if (isset($_SESSION['email'])) {
    header("location: products.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Login</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=#indexNavBar>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Lifestyle Store</a>
                </div>
                <div class="navbar-collapse" id="indexNavBar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
                        </li>
                        <li>
                            <a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row" id="main_panel">
            <div class="col-xs-6">
                <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Login to make a purchase</h4>
                        </div>
                        <div class="panel-body">
                            <form action="login_submit.php" method="POST">
                                <div class="form-group">
                                    <label for="#email">Email</label>                                    
                                    <input type="email" class="form-control" id="email" name="email" />
                                </div>
                                <div class="form-group">
                                    <label for="#password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" />
                                </div>
                                <button type="submit" class="btn btn-primary">Login</button>                            
                            </form>
                        </div>
                        <div class="panel-footer">
                            Don't have an account? <a href="register.html">Register</a>
                        </div>
                    </div>
            </div>
        </div>
        <footer class="footer navbar-fixed-bottom">
            <div class="container">
                <p>Copyright © Lifestyle Store. All Rights Reserved and Contact Us: +91 90000 00000</p>
            </div>
        </footer>
    </body>
</html>