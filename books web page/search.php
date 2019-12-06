<?php
$conn = mysqli_connect('localhost','root','','shelful');

$name = $_GET['dhundo'];
$sort = $_GET['sort'];

if($sort =="book") {
	$qry = "SELECT ID FROM books WHERE BookName like '%$name%'";
	$result = mysqli_query($conn,$qry);
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$idd = $row['ID'];
			}
			$qryyy = "UPDATE logged_in set error='Search Book'";
			mysqli_query($conn,$qryyy);
			header("location: dummybook.php?PID=$idd");	
		}
		else {
			$qryy = "UPDATE logged_in set error='No Result Found'";
			mysqli_query($conn,$qryy);
			header("location: {$_SERVER['HTTP_REFERER']}");
		} 
	}
}
else {
	$qry = "SELECT ID FROM author WHERE AuthorName like '%$name%'";
	$result = mysqli_query($conn,$qry);
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				$idd = $row['ID'];
			}
			$qryyy = "UPDATE logged_in set error='Search Book'";
			mysqli_query($conn,$qryyy);
			header("location: dummyauthor.php?AID=$idd");
		}
		else {
			$qryy = "UPDATE logged_in set error='No Result Found'";
			mysqli_query($conn,$qryy);
			header('location: ../shelful.php?er=No Result found');
		}
	}
}
mysqli_close($conn);
?>