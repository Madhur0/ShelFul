<?php 
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Shelful';

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$xhhjjggi;
	$name = $_POST['name'];
	$sub = $_POST['subject'];
	$mail = $_POST['email'];
	$message = $_POST['msg'];

	$sql = "INSERT INTO MESSAGE (name, email, subject, message)
	VALUES ('$name', '$mail', '$sub', '$message')";

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Message Received')</script>";
		include('contact_us.php');
	} 
	else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
mysqli_close($conn);
?>
