<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="../css/headfoot.css"/>
<link rel="stylesheet" type="text/css" href="../css/formstyle.css"/>
</head>
<Body>
<!-----------HEADER-------------->
<header id = "header">
<div class="topnavname">
	<img src="../images/example.png">
	<a class="active" href="#">ABC Services</a>
</div>
</header>
<header id = "header">
<div class="topnav"> 
	<a href="viewservices.php">View New Service Requests</a>
	<a class="active" href="#">View Feedback</a>
	<a href="addservice.php">Add Service</a>
	<div>
		<a href="../php/logout.php">Logout</a>
	</div>
</div>
</header>
<!--header ends here-->

<br >
<h1 align = "center">User Feedbacks</h1>
<div class="row">
	<div class="colfot1"></div>
	<div class="colfot3 input-form">
		<table>
		<tr >
		<th>Name</th>
		<th>Email</th>
		<th>Feedback</th>
		</tr>
		<?php
		include '../php/conn.php';
		$sql = "SELECT * FROM is1109.feedback";
		$result = $conn->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				echo "<tr>
				<td>".$row["feedbackname"]."</td>
				<td>".$row["feedbackemail"]."</td>
				<td>".$row["feedback"]."</td>
				</tr>";
			}
		}	
		?>
		</table>
	</div>
	<div class="colfot1"></div>
</div>
</br>

<!----------FOOTER-------------->
<?php include '../php/fixedfooter.php';?>
<!--footer ends here-->
</body>
</html>