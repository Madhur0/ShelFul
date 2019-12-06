<?php
$conn = mysqli_connect('localhost','root','','Shelful');

$idd = $_GET['PID'];

$qry2="SELECT Username FROM logged_in";
$result2 = mysqli_query($conn,$qry2);
while($row = mysqli_fetch_array($result2)) {
	$user = $row['Username'];
}

$qry = "SELECT * FROM books WHERE id = $idd";
$result = mysqli_query($conn,$qry);

if($result) {
	while($row = mysqli_fetch_array($result)) {
		$image = $row['BookImage'];
		$auth_img = $row['AuthorImage'];
		$urll = $row['BookLoc'];
		$bname = $row['BookName'];
		$aname = $row['AuthorName'];
		$pages = $row['Pages'];
		$year = $row['Published'];
		$rating = $row['Rating'];
		$desc1 = $row['Description1'];
		$desc2 = $row['Description2'];
		$desc3 = $row['Description3'];
	}
}
$qry3="SELECT id from author where authorname='$aname'";
$result3=mysqli_query($conn,$qry3);
if($result3) {
	while($row = mysqli_fetch_array($result3)) {
	$iddd = $row['id']; 
	}
}

?>


<!DOCTYPE html>
<html lang="en-US">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>	
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
<link rel="stylesheet" type="text/css" href="CSS/dummyBOOK.css">
<title title=""></title>
<style>
#authorname{
	text-decoration:none;
	color:#006666;
}
#authorname:hover{
	<?php echo "background-image:url('$auth_img');";?>
	background-position:100px;
	background-repeat: no-repeat;
	position:absolute;
	height:350px;
	width:370px;
	opacity:1;
}
.xxx {
	color:red;
	font-size:20px;
}
.aaa {
	color:red;
}
</style>


</head>

<body>
<?php
include('headr.html');

echo "
<div id='abcd'>
	<img id='cover' src=$image title='$bname'>
	<div id='pqr'> 
		<p id='bookname'>$bname</p>
		<p class='details'><b style='text-shadow:2px 2px 4px grey;'>Author : </b><a id='authorname' href='dummyauthor.php?AID=$iddd'>$aname</a></p>
		<p class='details'><b style='text-shadow:2px 2px 4px grey;'>Pages : </b>$pages</p>
		<p class='details'><b style='text-shadow:2px 2px 4px grey;'>Published : </b>$year</p>
		<p class='details'><b style='text-shadow:2px 2px 4px grey;'>Rating : </b>$rating/5 </p>";
		if($user !=null) {
			echo "<a href='$urll'><button onclick='sbmt();'><b>READ / DOWNLOAD</b></button></a>";
			echo "<script>
					function sbmt() {";
					$qryy = "INSERT INTO downloaded values('$user','$idd','$iddd')";
					mysqli_query($conn,$qryy);
					mysqli_close($conn);
					echo "}
				</script>";
		}
		else {
			echo "<button onclick='unyv();'><b>DOWNLOAD</b></button><span class='xxx'> * <a class='aaa' href='login.php'>login</a> first for Download</span>";
		}
		
	 echo "</div>
	<br><br>
	<p class='details'><b style='text-shadow:2px 2px 4px grey;'>Description :</b></p>
	<p id='descrip'>$desc1<br><br>$desc2<br><br>$desc3</p>
</div>

<br><br><br><br><br>";

include('footer.html');
?>

</body>
</html>