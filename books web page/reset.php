<!DOCTYPE html>
<html lang="en-US">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="../favicon.ico">
<title>FORGET PASSWORD</title>
<link rel="stylesheet" type="text/css" href="../mystyle.css">
<script src="../jquery.js"></script>
<script src="../navfix.js"></script>	
<style>
.pass {
	font-family:calibri;
	font-size:25px;
	color:grey;
	margin-left:20px;
}
.print {
	color:black;
	text-indent:10px;
	font-size:30px;
}
</style>
</head>

<body>
<script>
function checkform()
{
	var a4 = document.getElementById("pwd1").value;
		if(a4.length==0)
			return true;
		else if(a4.length<8 || a4.length>16)
		{
			alert('Fill the password correctly');
			return false;
		}	
	var a5 = document.getElementById("pwd2").value;
		if(a4!=a5)
		{
			alert('Password not matched');
			return false;
		}
	return true;
}
function pswdd_validate()
{
		var x4 = document.getElementById("pwd1").value;
		if(x4.length>7 && x4.length<17 || x4.length==0)
		{
			document.getElementById("show5").innerHTML="";
			document.getElementById("show4").innerHTML="";
		}
		else
		{
			document.getElementById("show4").innerHTML="* Invalid password";
		}
}
function pswd2_validate()
{
		var x4 = document.getElementById("pwd1").value;
		var x5 = document.getElementById("pwd2").value;
		if(x4!=x5)
		{
			document.getElementById("show5").innerHTML="* Wrong password";
		}
		else
		{
			document.getElementById("show5").innerHTML="";
		}
}
</script>


<?php
$conn = mysqli_connect('localhost','root','','Shelful');

$mail = $_POST['email'];
$phone = $_POST['mob'];

$qry="SELECT * FROM users WHERE Email='$mail' AND Phone='$phone'";
$result = mysqli_query($conn,$qry);

if(mysqli_num_rows($result) > 0) { include('headr.html');
	echo " 
	<div>
	<div style='border:2px solid lightgrey; border-radius: 20px; margin: 80px 250px 80px 250px; background-color:#f8f8f8;'>
	<center>
	<p style='font-family:calibri; font-size:35px; color:grey; margin: 10px 0 0px 0;'><strong>RESET PASSWORD</strong></p>
	<br><br>
	</center>
	<form action='reset_save.php' method='POST' onSubmit='return checkform()' autocomplete='off'>
	<b style='margin-left:40px;'>New password</b>
	<input type='text' style='padding:3px;margin-left:55px;' name='newpass' value='' size='35' id='pwd1' onblur='pswdd_validate()' placeholder='(8 - 16) characters'>
	<span style='color:red;' id='show4'></span>
	<br><br><b style='margin-left:40px;'>Confirm password</b>
	<input type='text' style='padding:3px;' name='newpass2' value='' size='35' id='pwd2' onblur='pswd2_validate()'>
	<span style='color:red;' id='show5'></span>
	<input type='text' style='display:none;' name='email' value='$mail'>
	<br><span id='show' style='color:red;font-weight:bold;'></span><br>
	<center><input type='submit' class='btn' value='SAVE CHANGES'></center>
	</form>";
}
else {
	include('forget_password.php');
	echo "<script>alert('Email/Phone no. not matched')</script>";
}
//mysqli_close($conn);
?>
<br><br>
</div>
</div>
<?php
	include('footer.html');
?>
</body>
</html>