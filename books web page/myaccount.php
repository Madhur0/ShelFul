<!DOCTYPE html>
<html lang="en-US">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="../favicon.ico">
<title>MY ACCOUNT</title>
<link rel="stylesheet" type="text/css" href="../mystyle.css">
<script src="../jquery.js"></script>
<script src="../navfix.js"></script>
<style>
a.dash {
	text-decoration:none;
	font-family:calibri; 
	font-size:30px;
	overflow:hidden;
	padding:5px 25px;
}
a.dash:hover {
	color:blue;
	background-color:lightblue;
}
iframe {
	border:none;
	margin-top:-80px;
	background-color:#f8f8f8;
	padding-left:10px;
}
</style>
</head>

<body bgcolor="#FFE4C4">
<?php
include('headr.html');
?>

<div>
<aside style="float:left;margin:25px 35px; font-size:20px;">
<a class="dash" href="dashboard.php" target="show">Dashboard</a><br><hr>
<a class="dash" style="padding:5px 52px;" href="profile.php" target="show">Profile</a><br><hr>
<a class="dash" style="padding:5px 46px;" href="recent_book.php" target="show">Viewed </a><br><hr>
<a class="dash" style="padding:5px 50px;" href="logout.php" target="_self">Logout</a><hr>
</aside>
<center>
<div style="border:2px solid lightgrey; border-radius: 20px; margin: 80px 250px 80px 250px; background-color:#f8f8f8;">
<p style="font-family:calibri; font-size:40px; color:grey; margin: 10px 0 0px 0;"><strong>MY ACCOUNT</strong></p>

<iframe  src="dashboard.php" name="show" width="95%;" height="510px" style="margin-top:20px;">

</iframe>
<br><BR>
</div></center>
</div>

<?php
include('footer.html');
?>