<?php
$conn = mysqli_connect('localhost','root','','shelful');
$idd = $_GET['AID'];

$qry = "SELECT * FROM author WHERE id = $idd";
$result = mysqli_query($conn,$qry);
if($result) {
	while($row = mysqli_fetch_array($result)) {
		$aname= $row['AuthorName'];
		$auth_img= $row['AuthorImage'];
		$born= $row['Born'];
		$spouse = $row['Spouse'];
		$living = $row['LivingIn'];
		$bsw1 = $row['BooksWritten1'];
		$bsw2 = $row['BooksWritten2'];
		$bsw3 = $row['BooksWritten3'];
		$desc1 = $row['Description1'];
		$desc2 = $row['Description2'];
		}
}
$qry1="Select ID from books where bookname='$bsw1'";
$result1 = mysqli_query($conn,$qry1);
if($result1){
while($row1 = mysqli_fetch_array($result1)) {
	$bid1=$row1['ID'];
}}
$qry2="Select ID from books where bookname='$bsw2'";
$result2 = mysqli_query($conn,$qry2);
if($result2){
while($row2 = mysqli_fetch_array($result2)) {
	$bid2=$row2['ID'];
}}
$qry3="Select ID from books where bookname='$bsw3'";
$result3 = mysqli_query($conn,$qry3);
if($result3){
while($row3 = mysqli_fetch_array($result3)) {
	$bid3=$row3['ID'];
}}
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
<link rel="stylesheet" type="text/css" href="CSS/dummyAUTHOR.css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.png"/>
<title  title=""></title>
</head>

<body bgcolor="#FFE4C4">
<?php
	include('headr.html');
echo"
<div id='abc'>
	<img id='authorphoto' src=$auth_img title='$aname'>
	<div id='pqr'> 
		<p id='authorname'>$aname</p>
		<p class='details' ><b style='text-shadow:2px 2px 4px grey;'>Born : </b>$born</p>
		<p class='details' ><b style='text-shadow:2px 2px 4px grey;'>Spouse : </b>$spouse</p>
		<p class='details' ><b style='text-shadow:2px 2px 4px grey;'>Living In : </b>$living</p>
		<p class='details' ><b style='text-shadow:2px 2px 4px grey;'>Books written : </b>";if($bsw1!=null){echo"<a class='bw'  href='dummybook.php?PID=$bid1'>$bsw1</a>";}
													if($bsw2!=null){echo",<a class='bw' href='dummybook.php?PID=$bid2'>$bsw2</a>";}
													if($bsw3!=null){echo",<a class='bw' href='dummybook.php?PID=$bid3'>$bsw3</a>.";}
		echo"</p>
		<a href='dummyAUTHORBOOKS.php?DID=$aname'><button class='download'><b>VIEW ALL BOOKS</b></button></a>
	</div>
	<br>
	<p class='details'><b style='text-shadow:2px 2px 4px grey;'>Description :</b></p>
	<p id='descrip'>$desc1<br><br>$desc2</p>
</div>
<br><br><br><br><br>";

	include('footer.html');
?>

</body>
</html>