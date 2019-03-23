<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}
$newpwd = $_SESSION['newpwd'];
$renewpwd = $_SESSION['renewpwd'];
if (strlen($newpwd) != strlen($renewpwd)) {
    header("location: settings.php");
}
else {
    $update_query = "UPDATE users SET password = '$newpwd'";
    $update_result = mysqli_query($con,$update_query) or die(mysqli_error($con));
}
?>