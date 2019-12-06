<?php
$conn = mysqli_connect('localhost','root','','Shelful');
$mail=null;
$qry="SELECT Username FROM logged_in";
$result = mysqli_query($conn,$qry);
$num = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result)) {
	$mail = $row['Username'];
}
?>


<!DOCTYPE html>
<html lang="en-US">

<head>
<style>
body {
	background-color:#f8f8f8;
}
.pass {
	font-family:calibri;
	font-size:25px;
	color:grey;
}
.print {
	color:black;
	text-indent:10px;
	font-size:30px;
}
a {
		text-decoration:none;
}
table {
	background-color:black;
	border:1px solid black;
}
th {
	background-color:white;
	font-size:25px;
	padding:10px 20px;
	border: 0px solid black;
}
td {
	background-color: #ffd;
	font-size:25px;
	padding:10px 20px;
	border: 0px solid black;
}
</style>
</head>

<body bgcolor="#FFE4C4">
<?php
if($mail !=null) { 
	$qryy = "SELECT BookId,AuthorId FROM downloaded WHERE user='$mail'";
	$reslt = mysqli_query($conn,$qryy);
	if(mysqli_num_rows($reslt)>0) {
		echo "<span class='pass'>Recently Viewed</span><hr><br>
				<center><table><tr><th>Book Name</th><th>Author Name</th></tr>";
		while($roww = mysqli_fetch_array($reslt)) {
			$bid=$roww['BookId'];
			$aid=$roww['AuthorId'];
			$qry3 = "SELECT BookName,AuthorName from Books WHERE ID=$bid";
			$rslt=mysqli_query($conn,$qry3);
			while($row3 = mysqli_fetch_array($rslt)) {
				echo "<tr><td><a href='dummybook.php?PID=$bid' target='_top'>" . $row3['BookName'];
				echo "</td><td><a href='dummyauthor.php?AID=$aid' target='_top'>" . $row3['AuthorName'] . "</td></tr>";
			}
		}
	}
	else {
		echo "<span class='print'>No recently books read yet.</span>";
	}
}
else {
		echo "<span class='print'>Please Sign up/Login first.</span>";
	} 
?>
</body>
</html>