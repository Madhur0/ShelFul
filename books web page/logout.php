<?php
$conn = mysqli_connect('localhost','root','','Shelful');

$qry="SELECT Username FROM logged_in";
$result = mysqli_query($conn,$qry);
while($row = mysqli_fetch_array($result)) {
	$mail = $row['Username'];
}
if($result) {
	if($mail != null) {
			$qrey="DELETE FROM logged_in WHERE username='$mail'";
			mysqli_query($conn,$qrey);
			header("location: ../Shelful.php"); 
	}
	else {
		header("location: myaccount.php"); 
		echo "<span style='color:black;	text-indent:10px; font-size:30px;'>Please Sign up/Login first.</span>";
	}
}
	mysqli_close($conn);
?>



	