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
<?php
	include('headr.html');
?>
<div>
<div style="border:2px solid lightgrey; border-radius: 20px; margin: 80px 250px 80px 250px; background-color:#f8f8f8;">
<center>
<p style="font-family:calibri; font-size:35px; color:grey; margin: 10px 0 0px 0;"><strong>RESET PASSWORD</strong></p>
<br><br>
<form action="reset.php" method="POST" onSubmit="return checkform()" autocomplete="on">
<div class="box"><b>Email </b><input type="text" name="email" size="27" onblur="name_validate()" required></div>
<br>
<div class="box"><b>Phone no. </b><input type="text" name="mob" size="24" onblur="name_validate()" autocomplete="off" required></div>
<br>
<input type="submit" class="btn" value="RESET">
</form>
</center>
<br><br>
</div>
</div>
<?php
	include('footer.html');
?>
</body>
</html>