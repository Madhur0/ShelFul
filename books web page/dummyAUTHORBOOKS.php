<?php
$conn = mysqli_connect('localhost','root','','Shelful');
$name = $_GET['DID'];
$qry = "SELECT * FROM books WHERE AuthorName ='$name' ";
$result = mysqli_query($conn,$qry);
?>


<!DOCTYPE html>
<html lang="en-US">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>	
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
<link rel="stylesheet" type="text/css" href="CSS/dummyAUTHORBOOKS.css">
<title title=""></title>
</head>

<body bgcolor="#FFE4C4">
<?php
	include('headr.html');
?>

<br><br>
<center id="seriesname"><?php echo $name; ?></center>
<br><br><br>
<center><div id="abc">
<?php 
if($result) {
	while($row = mysqli_fetch_array($result)) {
		$idd = $row['ID'];
		$image = $row['BookImage'];
		$bname = $row['BookName'];
		$aname = $row['AuthorName'];	
	echo "
	<div class='gall'>
		<a href='dummybook.php?PID=$idd;'><img src='$image' alt='$bname'></a>
		<div class='desc'><strong>$bname</strong></div>
	</div> ";
	}
}
else{echo"<br>HELL!";}
?>
</div></center>

<br><br><br><br><br>
<?php
	include('footer.html');
?>

</body>
</html>