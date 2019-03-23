<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) {
    header("location: login.php");
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
        <title>My Cart</title>
        <style>
            .row {
                padding-top:10%;
            }
        </style>
    </head>
    <body>
        <?php
        include "includes/header.php";
        ?>
        <?php
        $user_id = $_SESSION['user_id'];
        $select_query = "SELECT i.id,i.name,i.price from items i INNER JOIN user_items ui ON ui.user_id = '$user_id'";
        $result = mysqli_query($con,$select_query);
        if (mysqli_num_rows($result) == 0) {
            echo "<h1 class='jumbotron'>Add items to the cart first!</h1>";
        }
        else {
            $sum = 0;
            $ids = array();
            ?>
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while ($row = mysqli_fetch_array($result)) { ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['price'] ?></td>
                                    <td><a href="cart-remove.php?id={$row['id']}" class="remove_item_link">Remove</a>
                                </tr>
                                <?php 
                                array_push($ids,$row['id']);
                                $sum += $row['price'];}
                            }
                            ?>
                                <tr>
                                    <td colspan="2">Total</td>
                                    <td><?php echo $sum ?></td>
                                    <td><a href="success.php?ids={$ids}" class="btn btn-primary">Buy Now</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php
        include "includes/footer.php";
        ?>
    </body>
</html>