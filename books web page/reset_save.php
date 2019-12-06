<?php
$conn = mysqli_connect('localhost','root','','Shelful');

$email = $_POST['email'];
$newpswd = $_POST['newpass'];

$qry= "UPDATE users SET Password='$newpswd' WHERE Email='$email'";
$result = mysqli_query($conn,$qry);
include('login.php');
echo "<script>alert('Password changed succesfully')</script>";
mysqli_close($conn);
?>