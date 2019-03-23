<?php
require common.php;
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
        <title>Sign Up</title>
    </head>
    <body>
        <?php
        include "includes/header.php";
        ?>
        <div class="container" id="form_element">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <form action="signup_script.php" method="POST">
                        <h4><strong>SIGN UP</strong></h4>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" placeholder="Email" pattern="[a-z0-9.]+@[a-z]+\.[a-z]{2,3}"/>
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" class="form-control" placeholder="Password" pattern=".{6,}" />
                        </div>
                        <div class="form-group">
                            <input type="text" id="contact" class="form-control" placeholder="Contact" />
                        </div>
                        <div class="form-group">
                            <input type="text" id="city" class="form-control" placeholder="City" />
                        </div>
                        <div class="form-group">
                            <input type="text" id="address" class="form-control" placeholder="Address" />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
        include "includes/footer.php";
        ?>
    </body>
</html>