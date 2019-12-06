<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'Shelful';

	$conn = mysqli_connect($host, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
 
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	$qry="SELECT * FROM users WHERE email='$username' AND password='$password'";
	$qry2 = "INSERT INTO logged_in(Username,Error) VALUES ('$username','Search Book')";
	$result=mysqli_query($conn,$qry);
 
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			mysqli_query($conn,$qry2);
			include('popularbooks.php');
			echo "<script>alert('Logged In')</script>";	
			exit();
		}
		else {
				echo "<script>alert('username/password not matched')</script>";		
				include('login.php');	
				exit();
		}
	}
	else {
		die("Query failed");
	}
	mysqli_close($conn);
?>