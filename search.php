<html>
<head>
<title>Search Results</title>
<link rel="stylesheet" type="text/css" href="css/headfoot.css"/>
<link rel="stylesheet" type="text/css" href="css/formstyle.css"/>
<link rel="stylesheet" type="text/css" href="css/card.css"/>
<script>
function view_data(id)
{
	window.location.href="viewcompany.php?id="+id;
}
</script>
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

<div class="row">
	<div class="column"></div>
	<div class="column search-form" align="center">
		<form action="search.php" method="POST">
		<center>
		<br>
		<div class="row">
			<div class="colfot3">
				<input type="text" placeholder="Search.." name="search">		
			</div>
			<div class="colfot1">
				<select name="sort" required>
					<option value="asce">Ascending</option>
					<option value="desc">Descending</option>
					<option value="minp">Minimum</option>
					<option value="maxp">Maximum</option>
				</select>			
			</div>
			<div class="colfot2">
				<button type="submit"><img src = "images/csearch.png"></button>
			</div>
		</div>
		</center>
		</form>
	</div>
	<div class="column"></div>
</div>
<h1 align = "center">Search Services</h1>
<center>
<div class="row">
<?php
include 'php/conn.php';

$search = "";
$sort ="";

if(isset($_POST['search']))
	{
		$search = $_POST["search"];
	}
if(isset($_POST['sort']))
	{
		$sort = $_POST["sort"];
	}

if($sort == "asce")
{
	$sql=" SELECT DISTINCT * FROM is1109.company WHERE CONCAT(cname, '', cservice, '', cdescription) LIKE '%" . $search . "%' ORDER BY company.cname ASC";		
}
elseif($sort == "desc")
{
	$sql=" SELECT DISTINCT * FROM is1109.company WHERE CONCAT(cname, '', cservice, '', cdescription) LIKE '%" . $search . "%' ORDER BY company.cname DESC";	
}
elseif($sort == "minp")
{
	$sql=" SELECT DISTINCT * FROM is1109.company WHERE CONCAT(cname, '', cservice, '', cdescription) LIKE '%" . $search . "%' ORDER BY cminprice ASC";	
}
elseif($sort == "maxp")
{
	$sql=" SELECT DISTINCT * FROM is1109.company WHERE CONCAT(cname, '', cservice, '', cdescription) LIKE '%" . $search . "%' ORDER BY cminprice DESC";	
}
else
{
	$sql=" SELECT DISTINCT * FROM is1109.company WHERE CONCAT(cname, '', cservice, '', cdescription) LIKE '%" . $search . "%' ";
}

$result = $conn->query($sql);
				  
if($result->num_rows > 0)
{
	for ($x = 0 ; $x < 4 ; $x++ )
	{
		echo " <div class='row'> ";
		while($row = $result->fetch_assoc())
		{
			$id = $row["companyid"];
			echo "	<div class='ite'>
			<div class='card'>
			<img src='data:image/jpeg;base64," . base64_encode($row['logo']) . "' class='imge'>
			<h2>".$row["cname"]."</h2>
			<h3 class='price'>Price range from Rs. ".$row["cminprice"]." to Rs. ".$row["cmaxprice"]."</h3>
			<p><button type='submit' onclick='view_data($id)'>View Company</button></p>
			</div>
			</div>";
		}
		"</div>";
	}
}
else {
	echo "<h2>0 results</h2>";
}
$conn->close();
?>
</center>

<!----------FOOTER-------------->
<?php include 'php/stickyfooter.php';?>
<!--footer ends here-->
</body>
</html>