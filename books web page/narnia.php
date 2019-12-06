<!DOCTYPE html>
<html lang="en-US">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>	
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
<link rel="stylesheet" type="text/css" href="CSS/dummySERIES.css">
<title title="">Narnia</title>
</head>

<body>
<?php
include('headr.html');
?>

<center id="seriesname">NARNIA</center>
<center><a href="dummyauthor.php?AID=<?php echo '109'; ?>" id="seriesname" style="font-size:175%;margin-top:0px;text-decoration:none;">C.S. Lewis</a></center>
<center><div id="abc">
	<div class="gall">
		<a href="dummybook.php?PID=<?php echo '48'; ?>"><img src="pictures/narnia1.jpg" alt="The Lion,the Witch and the Wardrobe"></a>
		<div class="desc"><strong>The Lion,the Witch and the Wardrobe</div>
	</div>
	<div class="gall">
		<a href="#"><img src="pictures/narnia2.jpg" alt="Prince Caspian, the Return to Narnia"></a>
		<div class="desc">Prince Caspian<br></strong>Available Soon</div>
	</div>
	<div class="gall">
		<a href="dummybook.php?PID=<?php echo '50'; ?>"><img src="pictures/narnia3.jpg" alt="The Voyage of the Dawn Treader"></a>
		<div class="desc"><strong>The Voyage of the Dawn Treader</div>
	</div>
	<div class="gall">
		<a href="dummybook.php?PID=<?php echo '51'; ?>"><img src="pictures/narnia4.jpg" alt="The Silver Chair"></a>
		<div class="desc">The Silver<br>Chair</div>
	</div>
	<div class="gall">
		<a href="dummybook.php?PID=<?php echo '52'; ?>"><img src="pictures/narnia5.jpg" alt="The Horse and his Body"></a>
		<div class="desc">The Horse and his Body</div>
	</div>
	<div class="gall">
		<a href="#"><img src="pictures/narnia6.jpg" alt="The Magician's Nephew"></a>
		<div class="desc" style="font-size:14px;">The Magician's Nephew</strong><br>Available Soon</div>
	</div>
	<div class="gall">
		<a href="#"><img src="pictures/narnia7.jpg" alt="The Last Battle"></a>
		<div class="desc"><strong>The Last Battle</strong><br>Available Soon</div>
	</div>
	
</div></center>

<br><br><br><br><br>
<?php
include('footer.html');
?>

</body>
</html>