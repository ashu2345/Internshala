<?php
require "includes/common.php";
$u_id = $_SESSION['user_id'];
$id = $_SESSION['id'];
$del_query = "DELETE from users_items WHERE user_id = '$u_id' AND id = '$id'";
$del_result = mysqli_query($con,$del_query) or die(mysqli_error($con));
header("location: cart.php");
?>