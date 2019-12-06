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
<title>SIGNUP</title>
<link rel="stylesheet" type="text/css" href="../mystyle.css">
<script src="../jquery.js"></script>
<script src="../navfix.js"></script>	
</head>

<body>
<?php
	include('headr.html');
?>

<script>
function checkform()
{
	var naam = /^[A-Za-z]+$/;
	var a0 = document.getElementById("name1").value;
	if(naam.test(a0)==false)
		{
			alert('Fill the name correctly');
			return false;
		}
	var date = /^\d{4}[\-](0?[1-9]|1[012])[\-](0?[1-9]|[12][0-9]|3[01])$/;
	var a1 = document.getElementById("datee").value;
	if(date.test(a1)==false)
		{
			alert('Fill the date correctly');
			return false;
		}
	var a2 = document.getElementById("phone").value;
	if(a2.length!=10)
		{
			alert('Fill the phone no. correctly');
			return false;
		}
	var a3 = document.getElementById("mail").value;
	var patt = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
	if(patt.test(a3)==false)
		{
			alert('Fill the email correctly');
			return false;
		}
	var a4 = document.getElementById("pwd1").value;
		if(a4.length<8 || a4.length>16)
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


function fname_validate()
{
	var naam = /^[A-Za-z]+$/;
	var x0 = document.getElementById("name1").value;
		if(naam.test(x0) || x0.length==0)
		{
			document.getElementById("show").innerHTML="";
		}
		else
		{
			document.getElementById("show").innerHTML="* Alphabetic only";
		}
}
function lname_validate()
{
	var naame = /^[A-Za-z]+$/;
	var x00 = document.getElementById("name2").value;
		if(naame.test(x00) || x00.length==0)
		{
			document.getElementById("showw").innerHTML="";
		}
		else
		{
			document.getElementById("showw").innerHTML="* Alphabets only";
		}
}
function date_validate()
{
	var date = /^\d{4}[\-](0?[1-9]|1[012])[\-](0?[1-9]|[12][0-9]|3[01])$/;
	var x1 = document.getElementById("datee").value;
		if(date.test(x1) || x1.length==0)
		{
			document.getElementById("show1").innerHTML="";
		}
		else
		{
			document.getElementById("show1").innerHTML="* Invalid date";
		}
}
function mob_validate()
{
		var x2 = document.getElementById("phone").value;
		var pattt = /^\d+$/;
		if(x2.length==10 && pattt.test(x2) || x2.length==0)
		{
			document.getElementById("show2").innerHTML="";
		}
		else
		{
			document.getElementById("show2").innerHTML="* Invalid phone no.";
		}
}
function email_validate()
{
		var x3 = document.getElementById("mail").value;
		var patt = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
		if(x3.length==0)
		{
			document.getElementById("show3").innerHTML="";
		}	
		
		else if(patt.test(x3)==false)
		{
			document.getElementById("show3").innerHTML="* Invalid email";
		}
		else
		{
			document.getElementById("show3").innerHTML="";
		}
}
function pswdd_validate()
{
		var x4 = document.getElementById("pwd1").value;
		if(x4.length==0)
		{
			document.getElementById("show4").innerHTML="";
		}
		else if(x4.length>7 && x4.length<17)
		{
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
		if(x5.length==0)
		{
			document.getElementById("show5").innerHTML="";
		}
		else if(x4!=x5)
		{
			document.getElementById("show5").innerHTML="* Wrong password";
		}
		else
		{
			document.getElementById("show5").innerHTML="";
		}
}
</script>

<div>
<div style="border:2px solid lightgrey; border-radius: 20px; margin: 80px 250px 80px 250px; background-color:#f8f8f8;">
<center>
<p style="font-family:calibri; font-size:50px; color:grey; margin: 10px 0 0px 0;"><strong>SIGN UP</strong></p>
<div style="font-family:calibri; font-size:19px; color:grey;"><b>Fill this form and become a bookaholic</b></div>
<br><br>
<form action="sign_up.php" method="POST" onSubmit="return checkform()" autocomplete="on">
<div class="box"><b>First Name </b><input type="text" name="fname" id="name1" size="23" onblur="fname_validate()" required></div>
<span style="color:red;margin-left:600px;" id="show"></span>
<br>
<div class="box"><b>Last Name </b><input type="text" name="lname" id="name2" size="23" onblur="lname_validate()" required></div>
<span style="color:red;margin-left:600px;" id="showw"></span>
<br>
<div class="box"><b>DOB </b><input type="text" name="dob" id="datee" size="27" placeholder="YYYY-MM-DD" 
onblur="date_validate()" required></div>
<span style="color:red;margin-left:600px;" id="show1"></span>
<br>
<div class="box"><b>Mobile No. </b><input type="text" name="mob" id="phone" size="23" maxlength="10" onblur="mob_validate()" 
required></div>
<span style="color:red;margin-left:600px;" id="show2"></span>
<br>
<div class="box"><b>Email </b><input type="text" name="email" id="mail" size="27" onblur="email_validate()" required 
style="border: none; height:47px; margin-left:25px; font-size:20px;"></div>
<span style="color:red;margin-left:600px;" id="show3"></span>
<br>
<div class="box"><b>Password </b><input type="password" name="pswd" id="pwd1" size="21" placeholder="(8 - 16) characters" 
onblur="pswdd_validate()" required style="border: none; height:48px; margin-left:25px;font-size:21px; width:290px;"></div>
<span style="color:red;margin-left:600px;" id="show4"></span>
<br>
<div class="box"><b style="margin-top:-20px;">Confirm Password </b><input type="password" name="pswd2" id="pwd2" size="21" 
onblur="pswd2_validate()" required style="border: none; height:48px; margin-left:15px;font-size:21px; width:240px;"></div>
<span style="color:red;margin-left:600px;" id="show5"></span>
<br><br>
<input type="submit" class="btn" value="SIGN UP">
<!--a href="login.php"><button type="button" class="btn">LOGIN</button></a-->
</form><br>
</center>
</div>
</div>

<?php
	include('footer.html');
?>

</body>
</html>