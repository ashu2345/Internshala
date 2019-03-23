<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) {
    header("location: index.php");
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
        <title>Settings</title>
        <style>
            .pwdform {
                padding-top:10%;
            }
        </style>
    </head>
    <body>
        <?php
        include "includes/header.php";
        ?>
        <div class="row pwdform">
            <div class="col-xs-4 col-xs-offset-4">
                <form action="settings_script.php" method="POST">
                    <h3>Change Password</h3>
                    <div class="form-group">
                        <input type="password" placeholder="Old Password" class="form-control" id="pwd" />
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="New Password" class="form-control" id="newpwd"/>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Re-type New Password" class="form-control" id="renewpwd" />
                    </div>
                    <button type="button" class="btn btn-primary">Change</button>
                </form>
            </div>
        </div>
    </body>
</html>