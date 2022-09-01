<html>
<head>
<title>Company Details</title>
<link rel="stylesheet" type="text/css" href="css/headfoot.css"/>
<link rel="stylesheet" type="text/css" href="css/formstyle.css"/>
<link rel="stylesheet" type="text/css" href="css/companydet.css"/>
</head>
<Body>
<!-----------HEADER-------------->
<header id = "header">
<div class="topnavname">
	<img src="images/example.png">
	<a class="active" href="#">ABC Services</a>
</div>
</header>
<header id = "header">
<div class="topnav"> 
	<a href="home.php">Home</a>
	<a href="requestservice.php">Request service</a>
	<a href="feedback.php">Contact Us</a>
	<a href="aboutus.php">About Us</a>
	<div>
		<a href="index.html">Login </a>
	</div>
	<div class="search-container">
		<form method="POST" action="search.php">
		<input type="text" placeholder="Search.." name="search">
		<button type="submit"><img src = "images/search.jpg"></button>
		</form>
	</div>
</div>
</header>
<!--header ends here-->

<br >
<h1 align = "center">Company Details</h1>
<br >
<center>
<div class="row">
	<div class="colfot1"></div>
	<div class="itemdet">
		<?php
		include 'php/conn.php';

		$recordId = $_GET["id"];

		$sql = "SELECT * FROM is1109.company where company.companyid = '".$recordId."'";

		$result = $conn->query($sql);
						  
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				echo "<div class='imgside'>
				<img src='data:image/jpeg;base64," . base64_encode($row['logo']) . "' class='imge'>
				</div>
				<div class='dtlside'>				
				<h1>".$row["cname"]."</h1>
				<h2>".$row["cdescription"]."</h2>
				<h3>".$row["caddress"]."</h3>
				<h3>".$row["cmobile"]."</h3>
				<h3>".$row["cemail"]."</h3>				
				<h3>Price range from Rs. ".$row["cminprice"]." to Rs. ".$row["cmaxprice"]."</h3>
				<br>
				</div>";
			}
		}
		?>
	</div>
	<div class="colfot1"></div>
</div>
</center>
<br >

<!----------FOOTER-------------->
<?php include 'php/stickyfooter.php';?>
<!--footer ends here-->
</body>
</html>