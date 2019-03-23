<?php
require "includes/common.php";
$item_id = $_GET['id'];
$insert_query = "INSERT INTO user_items (user_id,item_id,status) values ('$user_id','$item_id','Added to cart'";
$insert_result = mysqli_query($con,$insert_query);
header("location: products.php");
?>