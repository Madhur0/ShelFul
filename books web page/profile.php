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
	$qry2 = "SELECT Firstname,Lastname,Email FROM users WHERE Email='$mail'";
	$result2 = mysqli_query($conn,$qry2);
	if($result2) 
		{
			while($row = mysqli_fetch_array($result2))
			{
				$fname = $row['Firstname'];
				$lname = $row['Lastname'];
				$email = $row['Email'];
			}
		}
}
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en-US">

<head>
<style>
body {
	background-color:#f8f8f8;
}
.pass {
	font-family:calibri;
	font-size:25px;
	color:grey;
}
.print {
	color:black;
	text-indent:10px;
	font-size:30px;
}
</style>
</head>

<body bgcolor="#FFE4C4">
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
if($mail !=null) { echo "
<br>
<form action='changes.php' method='POST' onSubmit='return checkform()'>
<b>First name: </b>
<b style='margin-left:290px;'>Last name: </b>
<br><br><input type='text' style='padding:3px;' name='fname' value='$fname' size='28' disabled>     
<input style='margin-left:135px;padding:3px;' type='text' name='lname' value='$lname' size='28' disabled>
<br><br><b>Email: </b>
<br><br><input type='text' style='padding:3px;' name='email' value='$email' size='84' disabled>
<br><br><span class='pass'>Password change</span>
<hr>
Current password (leave blank to leave unchanged)<br>
<input type='text' style='padding:3px;' name='password' value='' size='84'><br><br>
New password (leave blank to leave unchanged)<br>
<input type='text' style='padding:3px;' name='newpass' value='' size='84' id='pwd1' onblur='pswdd_validate()' placeholder='(8 - 16) characters'>
<span style='color:red;' id='show4'></span>
<br><br>Confirm new password<br>
<input type='text' style='padding:3px;' name='newpass2' value='' size='84' id='pwd2' onblur='pswd2_validate()'>
<span style='color:red;margin-left:600px;' id='show5'></span>
<br><span id='show' style='color:red;font-weight:bold;'></span><br>
<input type='submit' style='padding:3px;' value='SAVE CHANGES'>
</form> ";
}
else {
		echo "<span class='print'>Please Sign up/Login first.</span>";
	} 
?>
</body>
</html>