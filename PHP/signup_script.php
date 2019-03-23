<?php
require "includes/common.php";
$con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$email = mysqli_real_escape_string($_POST['email']);
$select_query = "SELECT email from store.users u where u.email = '$email'";
$result = mysqli_query($con,$select_query);
if (mysqli_num_rows($result) > 0) {
    die("Email already exists");
}
else {
    $name = $_SESSION['name'];
    $email = $_SESSION['email_id'];
    $phone = $_SESSION['phone'];
    $insert_query = "INSERT into ecommerce.users ('first_name','email_id','phone') values ('$name','$email','$phone')";
    $user_registration = mysqli_query($con,$insert_query);
}
$pkey = mysqli_insert_id($con);
$_SESSION['id'] = $pkey;
header("location: products.php");
?>