<!DOCTYPE html>
<html lang="en-US">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>	
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
<link rel="stylesheet" type="text/css" href="CSS/dummySERIES.css">
<title title="Twilight">Twilight</title>
</head>

<body bgcolor="#FFE4C4">
<?php
	include('headr.html');
?>


<center id="seriesname">THE TWILIGHT SAGA</center>
<center><a href="dummyauthor.php?AID=<?php echo '112'; ?>" id="seriesname" style="font-size:175%;margin-top:0px;text-decoration:none;">STEPHENIE MEYER</a></center>
<center><div id="abc">
	<div class="gall">
		<a href="dummybook.php?PID=<?php echo '93'; ?>"><img src="pictures/twilight1.jpg" alt="Twilight"></a>
		<div class="desc"><strong>Twilight</div>
	</div>
	<div class="gall">
		<a href="dummybook.php?PID=<?php echo '94'; ?>"><img src="pictures/twilight2.jpg" alt="New Moon"></a>
		<div class="desc">New Moon</div>
	</div>
	<div class="gall">
		<a href="dummybook.php?PID=<?php echo '95'; ?>"><img src="pictures/twilight3.jpg" alt="Eclipse"></a>
		<div class="desc">Eclipse</div>
	</div>
	<div class="gall">
		<a href="dummybook.php?PID=<?php echo '96'; ?>"><img src="pictures/twilight4.jpg" alt="Breaking Dawn"></a>
		<div class="desc">Breaking Dawn</strong></div>
	</div>
	
</div></center>

<br><br><br><br><br>
<?php
	include('footer.html');
?>

</body>

</html>