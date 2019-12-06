<?php
$conn = mysqli_connect('localhost','root','','Shelful');

$password = $_POST['password'];
$newpswd = $_POST['newpass'];

$qry="SELECT Username FROM logged_in";
$result = mysqli_query($conn,$qry);
$num = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)) {
	$mail = $row['Username'];
}
if($num > 0) {
	$qry2 = "SELECT Password FROM users WHERE Email='$mail'";
	$result2 = mysqli_query($conn,$qry2);
	if($result2) 
	{
			while($row = mysqli_fetch_array($result2))
			{
				$pswd = $row['Password'];
			}
	}
	if($password == $pswd) {
		$qry = "UPDATE users SET Password='$newpswd' WHERE Email='$mail'";
		$result = mysqli_query($conn,$qry);
		include('profile.php');
		echo "<script>document.getElementById('show').innerHTML = 'Password changed succesfully'</script>";
	}
	else {
		include('profile.php');
		echo "<script>document.getElementById('show').innerHTML = 'Current password not matched.'</script>";
	}	
}
//mysqli_close($conn);
?>