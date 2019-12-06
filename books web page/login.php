<?php
$conn = mysqli_connect('localhost','root','','Shelful');
$mail=null;
$qry="SELECT Username FROM logged_in";
$result = mysqli_query($conn,$qry);
$num = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)) {
	$mail = $row['Username'];
}
if($mail !=null) {
	echo "<script>alert('Logout First')</script>";
	include('myaccount.php');
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en-US">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="../favicon.ico">
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="../mystyle.css">
<script src="../jquery.js"></script>
<script src="../navfix.js">
</script>
</head>

<body bgcolor="#FFE4C4">
<?php
	include('headr.html');
?>
<div>
<center>
<div style="border:2px solid lightgrey; border-radius: 20px; margin: 80px 250px 80px 250px; background-color:#f8f8f8;">
<p style="font-family:calibri; font-size:50px; color:grey; margin: 10px 0 0px 0;"><strong>LOGIN</strong></p>
<div style="font-family:calibri; font-size:19px; color:grey;"><b>Login with your username and password</b></div>
<br><br>
<form action="log_in.php" method="POST" autocomplete="on">
<div class="box"><b>Email </b><input type="text" name="username" size="19" required></div>
<br>
<div class="box"><b>Password </b><input type="password" name="password" size="20" required style="border: none; height:48px; margin-left:24px; font-size:23px; width:290px;"></div>
<br>
<a href="forget_password.php" style="text-align:right;">Forget Password</a>
<br><br>
<input type="submit" class="btn" value="LOGIN">
</form>
<br><br>
</div></center>
</div>

<?php
	include('footer.html');
?>

</body>
</html>