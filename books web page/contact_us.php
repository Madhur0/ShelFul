<!DOCTYPE html>
<html lang="en-US">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="../favicon.ico">
<title>CONTACT US</title>
<link rel="stylesheet" type="text/css" href="../mystyle.css">
<script src="../jquery.js"></script>
<script src="../navfix.js"></script>
</head>

<body bgcolor="#FFE4C4">
<?php
	include('headr.html');
?>

<div>
<center>
<div style="border:2px solid lightgrey; border-radius: 20px; margin: 80px 250px 80px 250px; background-color:#f8f8f8;">
<p style="font-family:calibri; font-size:50px; color:grey; margin: 10px 0 0px 0;"><strong>CONTACT US</strong></p>
<div style="font-family:calibri; font-size:19px; color:grey;"><b>Feel free to contact us by filling this form</b></div>
<br><br>
<form action="contactus.php" method="POST" autocomplete="on">
<div class="box">Your Name <input type="text" name="name" size="23" required></div>
<br>
<div class="box">Your Email <input type="text" name="email" size="24" required></div>
<br>
<div class="box">Subject <input type="text" name="subject" size="26"></div>
<br>
<div class="box" style="height:315px; line-height:40px;">Your Message<br>
<textarea type="message" name="msg" rows="12" cols="31" style="background-color:white;" required>
</textarea></div>
<br>
<input type="submit" class="btn" value="SEND MESSAGE">
</form>
<br>
</div></center>
</div>

<?php
	include('footer.html');
?>

</body>
</html>