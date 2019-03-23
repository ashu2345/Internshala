<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}
foreach($_GET['ids'] as $id) {
    $update_query = "UPDATE user_items SET status = 'Confirmed' WHERE user_id = '$id'";
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
        <title>Success!</title>
        <style>
            .successmsg {
                padding-top: 20%;
            }
        </style>
    </head>
    <body>
        <?php
        include "includes/header.php";
        ?>
        <div class="container">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="jumbotron successmsg">
                    Your order is confirmed! Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.
                </div>
            </div>
        </div>
        <?php
        include "includes/footer.php";
        ?>
    </body>
</html>