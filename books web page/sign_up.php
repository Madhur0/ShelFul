<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Shelful';

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$name = $_POST['fname'];
	$surname = $_POST['lname'];
	$date = $_POST['dob'];
	$contact = $_POST['mob'];
	$mail = $_POST['email'];
	$paswd = $_POST['pswd'];

	$sql = "INSERT INTO USERS (firstname, lastname, DOB, email, phone, password)
	VALUES ('$name', '$surname', '$date', '$mail', '$contact', '$paswd')";

	if (mysqli_query($conn, $sql)) {
		mysqli_close($conn);
		echo "<script>alert('Successfully signup')</script>";
		include('login.php');
	} 
	else {
			mysqli_close($conn);
			echo "<script>alert('Email id already registered.')</script>";
			include('signup.php');
	}

?>
