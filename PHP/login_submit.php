<?php
require "includes/common.php";
$email = md5(mysqli_real_escape_string($_POST['email']));
$password = md5(mysqli_real_escape_string($_POST['password']));
$select_query = "SELECT id,email from store.users u where u.email = $email and u.password = $password";
$result = mysqli_query($con,$select_query);
if (mysqli_num_rows($result) == 0) {

}
else {
    $row = mysqli_fetch_array($result);
}
$_SESSION['email'] = $row['email'];
$_SESSION['user_id'] = $row['id'];
header("location: products.php");
?>