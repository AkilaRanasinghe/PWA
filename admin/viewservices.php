<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" type="text/css" href="../css/headfoot.css"/>
<link rel="stylesheet" type="text/css" href="../css/formstyle.css"/>
<script>
function delete_data(id)
{
	if(confirm("Are you sure you want to cancel request?"))
	{
		window.location.href="../php/deletetempservice.php?id="+id;
	}
}
</script>
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
	<a class="active" href="#">View New Service Requests</a>
	<a href="viewfeedback.php">View Feedback</a>
	<a href="addservice.php">Add Service</a>
	<div>
		<a href="../php/logout.php">Logout</a>
	</div>
</div>
</header>
<!--header ends here-->

<br >
<h1 align = "center">New Service Requests</h1>
<div class="row">
	<div class="colfot1"></div>
	<div class="colfot3 input-form">
		<center>
		<table>
		<tr >
		<th>Service</th>
		<th>Description</th>
		<th>Requestor email</th>
		<th>Accept</th>
		<th>Cancel</th>
		</tr>
		<?php
		include '../php/conn.php';
		$sql = "SELECT * FROM is1109.temp";
		$result = $conn->query($sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$id = $row["tempid"];
				echo "<tr>
				<td>".$row["tempservice"]."</td>
				<td>".$row["tempdescription"]."</td>
				<td>".$row["tempemail"]."</td>
				<td><center><button type='submit'><a href='../php/acceptservice.php?id=$id'>Accept</a></button></center></td>
				<td><center><button style='background-color:red;color:white;' type='submit' onclick='delete_data($id)'>Cancel</button></center></td>
				</tr>";
			}
		}	
		?>
		</table>
		</center>
	</div>
	<div class="colfot1"></div>
</div>
</br>

<!----------FOOTER-------------->
<?php include '../php/fixedfooter.php';?>
<!--footer ends here-->
</body>
</html>