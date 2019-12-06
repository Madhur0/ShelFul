<?php
$conn = mysqli_connect('localhost','root','','Shelful');
$mail=null;;
$qry="SELECT Username FROM logged_in";
$result = mysqli_query($conn,$qry);
while($row = mysqli_fetch_array($result)) {
	$mail = $row['Username'];
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
.print {
	color:black;
	text-indent:10px;
	font-size:30px;
}
.highlight {
	color:blue;
	font-weight:bold;
}
</style>
</head>

<body bgcolor="#FFE4C4">
<?php
if($mail !=null) {
echo "	
	<span class='print'>
	Hello <span class='highlight'>$mail</span> <br>(not <span class='highlight'>$mail</span>? Logout)<br><br>
	From your account dashboard you can view your recent books viewed, manage your account and edit your paasword and account details.
	</span> ";
}
else {
		echo "<span class='print'>Please Sign up/Login first.</span>";
	} 
?>	
</body>
</html>