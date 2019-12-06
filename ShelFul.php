<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<title>SHELFUL</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<link rel="stylesheet" type="text/css" href="ShelFul.css">
	<script src="jquery.js"></script>
	<script src="navfix.js"></script>
	<script>
	function validate() {
		var x = document.getElementById("dhundo").value;
		if(x.length==0)
			return false;
		else
			return true;
	}
	</script>
</head>

<body>
<?php $conn = mysqli_connect('localhost','root','','shelful');
$qry = "SELECT error from logged_in";
$res = mysqli_query($conn,$qry);
if($res) {
	if(mysqli_num_rows($res)>0) {
	while($row=mysqli_fetch_array($res)) {$error = $row['error'];}
	}
	else
		$error = '';
}
?>
<header id="start">
<a href="ShelFul.php"><img src="logo.png" height="80px" style="margin: 5px 0 0 8px;"></a>
<form action="books web page/search.php" class="findd" onsubmit="return validate()" autocomplete="off">
<div class="srch"><input class="srh" type="search" name="dhundo" id="dhundo" placeholder="<?php echo $error; ?>">
<input type="image" class="sett" src="books web page/pictures/search.png" width="25" height="25"></div><br>
&nbsp <input type="radio" value="book" name="sort" checked>By Book
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="radio" value="author" name="sort">By Author
</form>
<ul id="nav_bar">
  <li><a href="ShelFul.php"><b style="font-size:19px; font-family:century gothic;">HOME</b></a></li>
  <li><div class="dropdown">
      <a href="#"><b style="font-size:20px; font-family:century gothic;">CATEGORY</b></a>
		<div class="dropdown-content">
			<div class="dropdown2">
			<a href="#" style="font-size:16px; font-family:century gothic;">AUTHOR</a>
				<div class="dropdown2-content-split">
				<a href="books web page/dummyauthor.php?AID=<?php echo '101'; ?>"style="font-size:16px; font-family:century gothic;">Agatha Christie</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '102'; ?>" style="font-size:16px; font-family:century gothic;">Amish Tripathi</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '117'; ?>" style="font-size:16px; font-family:century gothic;">Anthony Horowitz</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '119'; ?>" style="font-size:16px; font-family:century gothic;">Cecily Von Ziegesar</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '103'; ?>" style="font-size:16px; font-family:century gothic;">Charles Dickens</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '104'; ?>" style="font-size:16px; font-family:century gothic;">Chetan Bhagat</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '109'; ?>" style="font-size:16px; font-family:century gothic;">C.S.Lewis</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '105'; ?>" style="font-size:16px; font-family:century gothic;">Dan Brown</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '116'; ?>" style="font-size:16px; font-family:century gothic;">James Frey</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '106'; ?>" style="font-size:16px; font-family:century gothic;">JK Rowling</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '113'; ?>" style="font-size:16px; font-family:century gothic;">John Green</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '107'; ?>" style="font-size:16px; font-family:century gothic;">Khaled Hosseini</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '108'; ?>" style="font-size:16px; font-family:century gothic;">Nicholas Sparks</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '114'; ?>" style="font-size:16px; font-family:century gothic;">Oliver Bowden</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '115'; ?>" style="font-size:16px; font-family:century gothic;">Richelle Mead</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '110'; ?>" style="font-size:16px; font-family:century gothic;">Rick Riordan</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '112'; ?>" style="font-size:16px; font-family:century gothic;">Stephenie Meyer</a>
				<a href="books web page/dummyauthor.php?AID=<?php echo '118'; ?>" style="font-size:16px; font-family:century gothic;">Jane Austen</a>
				</div>
			</div>
			<!--div class="dropdown2">
			<a href="#" style="font-size:16px; font-family:century gothic;">GENRE</a>
				<div class="dropdown2-content">
				<a href="books web page/Action.html" style="font-size:16px; font-family:century gothic;">Action</a>
				<a href="books web page/Drama.html" style="font-size:16px; font-family:century gothic;">Drama</a>
				<a href="books web page/Romantic.html" style="font-size:16px; font-family:century gothic;">Romantic</a>
				<a href="books web page/Thriller.html" style="font-size:16px; font-family:century gothic;">Thriller</a>
				<a href="books web page/Comedy.html" style="font-size:16px; font-family:century gothic;">Comedy</a>
				</div>
			</div-->
			<div class="dropdown2">
			<a href="#" style="font-size:16px; font-family:century gothic;">SERIES</a>
				<div class="dropdown2-content-split">
				<a href="books web page/alexrider.php" style="font-size:16px; font-family:century gothic;">Alex Rider</a>
				<a href="books web page/assassinscreed.php" style="font-size:16px; font-family:century gothic;">Assassin's Creed</a>
				<a href="books web page/endgame.php" style="font-size:16px; font-family:century gothic;">End Game</a>
				<a href="books web page/famousfive.php" style="font-size:16px; font-family:century gothic;">Famous Five</a>
				<a href="books web page/gossipgirl.php" style="font-size:16px; font-family:century gothic;">Gossip Girl</a>
				<a href="books web page/HP.php" style="font-size:16px; font-family:century gothic;">Harry Potter</a>
				<a href="books web page/heroesofolympus.php" style="font-size:16px; font-family:century gothic;">Heroes of Olympus</a>
				<a href="books web page/narnia.php" style="font-size:16px; font-family:century gothic;">Narnia</a>
				<a href="books web page/percyjackson.php" style="font-size:16px; font-family:century gothic;">Percy Jackson</a>
				<a href="books web page/shivatrilogy.php" style="font-size:16px; font-family:century gothic;">Shiva Trilogy</a>
				<a href="books web page/thetwilightsaga.php" style="font-size:16px; font-family:century gothic;">Twilight</a>
				<a href="books web page/vampireacademy.php" style="font-size:16px; font-family:century gothic;">Vampire Academy</a>
				</div>
			</div>
			<div class="dropdown2">
			<a href="#" style="font-size:16px; font-family:century gothic;">POPULAR</a>
				<div class="dropdown2-content">
					<a href="books web page/PopularBooks.php" style="font-size:16px; font-family:century gothic;">Books</a>
					<a href="books web page/PopularSeries.php" style="font-size:16px; font-family:century gothic;">Series</a>
				</div>
			</div>	
	  <a href="books web page/LatestBooks.php" style="font-size:16px; font-family:century gothic;">LATEST</a>
		</div>
	  </div>
  </li>
  <li><a href="books web page/signup.php"><b style="font-size:20px; font-family:century gothic;">SIGN UP</b></a></li>
  <li><a href="books web page/login.php"><b style="font-size:20px; font-family:century gothic;">LOGIN</b></a></li>
  <li><a href="books web page/aboutus.php"><b style="font-size:20px; font-family:century gothic;">ABOUT US</b></a></li>
  <li><a href="books web page/contact_us.php"><b style="font-size:20px; font-family:century gothic;">CONTACT US</b></a></li>
  <a style="color:white; text-decoration:none;padding:5px;float:right;margin:12px 30px 0 0;" href="books web page/myaccount.php">My Account</a>
</ul>
</header>

<br><br><br>
<a href="books web page/PopularBooks.php" id="pop">POPULAR BOOKS</a>
<center><br><br>
<div class="imgal">
	<div class="gallery">
	  <a href="books web page/dummybook.php?PID=<?php echo '1'; ?>">
		<img src="books web page/pictures/2states.jpg" alt="2 states">
	  </a>
	  <div class="desc"><strong>2 STATES</strong><br>-Chetan Bhagat</div>
	</div>
	<div class="gallery">
	  <a href="books web page/dummybook.php?PID=<?php echo '2'; ?>">
		<img src="books web page/pictures/thousandsuns.jpg" alt="A thousand splendid suns">
	  </a>
	  <div class="desc"><strong style="font-size:10px;">THOUSAND SPLENDID SUNS</strong><br>-Khaled Hosseini</div>
	</div>
	<div class="gallery">
	  <a href="books web page/dummybook.php?PID=<?php echo '3'; ?>">
		<img src="books web page/pictures/kiterunner.jpg" alt="The Kite Runner">
	  </a>
	  <div class="desc"><strong style="font-size:15px;">THE KITE RUNNER</strong><br>-Khaled Hosseini</div>
	</div>
	<div class="gallery">
	  <a href="books web page/dummybook.php?PID=<?php echo '4'; ?>">
		<img src="books web page/pictures/mountainsechoed.jpg" alt="And The Mountains Echoed">
	  </a>
	  <div class="desc"><strong style="font-size:13px;">MOUNTAINS ECHOED</strong><br>-Khaled Hosseini</div>
	</div>
		<div class="gallery">
		<a href="books web page/dummybook.php?PID=<?php echo '12'; ?>"><img src="books web page/pictures/taleof2cities.jpg" alt="Tales of two cities"></a>
		<div class="desc"><strong style="font-size:13px;">TALES OF TWO CITIES</strong><br>-Charles Dickens</div>
	</div>
</div>
</center>

<br><br><br><br>
<a href="books web page/LatestBooks.php" id="pop">LATEST BOOKS</a>
<center><br><br>
<div class="imgal">
	<div class="gallery">
	  <a href="books web page/dummybook.php?PID=<?php echo '32'; ?>">
		<img src="books web page/pictures/ScionofIkshvaku.jpg" alt="Scion of Ikshvaku">
	  </a>
	  <div class="desc"><strong style="font-size:14px;">SCION OF IKSHVAKU</strong><br>-Amish Tripathi</div>
	</div>
	<div class="gallery">
	  <a href="books web page/dummybook.php?PID=<?php echo '26'; ?>">
		<img src="books web page/pictures/letitsnow.jpg" alt="Let it snow">
	  </a>
	  <div class="desc"><strong>LET IT SNOW</strong><br>-John Green</div>
	</div>
	<div class="gallery">
	  <a href="books web page/dummybook.php?PID=<?php echo '88'; ?>">
		<img src="books web page/pictures/davinci.jpg" alt="Scion of Ikshvaku">
	  </a>
	  <div class="desc"><strong style="font-size:14px;">THE DA VINCI CODE</strong><br>-Dan Brown</div>
	</div>
	<div class="gallery">
	  <a href="books web page/dummybook.php?PID=<?php echo '23'; ?>">
		<img src="books web page/pictures/bestofme.jpg" alt="The best of me">
	  </a>
	  <div class="desc"><strong>THE BEST OF ME</strong><br>-Nicholas Sparks</div>
	</div>
	<div class="gallery">
	  <a href="books web page/dummybook.php?PID=<?php echo '36'; ?>">
		<img src="books web page/pictures/youngindiawants.jpeg" alt="What young India wants">
	  </a>
	  <div class="desc"><strong style="font-size:10px;">WHAT YOUNG INDIA WANTS</strong><br>-Chetan Bhagat</div>
	</div>
</div>
</center>

<br><br><br><br>
<a href="books web page/PopularSeries.php" id="pop">POPULAR SERIES</a>
<center><br><br>
<div class="imgal">
	<div class="gallery">
	  <a href="books web page/narnia.php">
		<img src="books web page/pictures/series/narnia.jpg" alt="Narnia">
	  </a>
	  <div class="desc"><strong>NARNIA</strong><br>-C.S.Lewis</div>
	</div>
	<div class="gallery">
	  <a href="books web page/percyjackson.php">
		<img src="books web page/pictures/series/percyj.jpg" alt="Percy Jackson">
	  </a>
	  <div class="desc"><strong>PERCY JACKSON</strong><br>-Rick Riorden</div>
	</div>
		<div class="gallery">
	  <a href="books web page/thetwilightsaga.php">
		<img src="books web page/pictures/series/Twilight.jpg" alt="Twilight">
	  </a>
	  <div class="desc"><strong>TWILIGHT SAGA</strong><br>-Stephenie Meyer</div>
	</div>
	<div class="gallery">
	  <a href="books web page/assassinscreed.php">
		<img src="books web page/pictures/series/assassin.jpg" alt="Assassin's Creed">
	  </a>
	  <div class="desc"><strong style="font-size:15px;">ASSASSIN'S CREED</strong><br>-Oliver Bowden</div>
	</div>
	<div class="gallery">
	  <a href="books web page/HP.php">
		<img src="books web page/pictures/series/harrypotter.jpg" alt="Harry Potter">
	  </a>
	  <div class="desc"><strong>HARRY POTTER</strong><br>-J.K.Rowling</div>
	</div>
</div>
</center>



<br><br><br>
<footer>
<a class="last" href="books web page/aboutus.php"><span>About</span></a> 
<a class="last" href="books web page/contact_us.php"><span>Contact us</span></a>
<a class="last" href="books web page/myaccount.php"><span>My Account</span></a>
<a class="last" id="scrol" href="#start"><span>&#8593  Top</span></a>
<hr style="margin:0 20px 0 20px;">
<a href="ShelFul.php" class="last"><img src="favicon.png" alt="shelful" height="25px" style="margin-top:11px;"><span> SHELFUL</span></a>
<hr style="margin:-2px 20px 0 20px;">
<span>Contact: <a style="color:white; text-decoration:none;" href="mailto:madhurmittal275@gmail.com">madhurmittal275@gmail.com</a></span>
<span>Contact: <a style="color:white; text-decoration:none;" href="mailto:pragyanagpal85@gmail.com">nagpalpragya85@gmail.com</a></span>
</footer>

</body>
</html>
