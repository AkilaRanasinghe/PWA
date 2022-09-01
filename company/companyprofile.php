<?php
include_once"../php/conn.php";
session_start();
$uname = $_SESSION['uname'];
?>

<html>
<head>
<title>Company Profile</title>
<link rel="stylesheet" type="text/css" href="../css/headfoot.css"/>
<link rel="stylesheet" type="text/css" href="../css/formstyle.css"/>
<link rel="stylesheet" type="text/css" href="../css/companydet.css"/>
<script>
function delete_data(id)
{
	if(confirm("Are you sure you want to delete your profile?"))
	{
		window.location.href="../php/deleteprofile.php?id="+id;
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
	<a class="active" href="#">Company Profile</a>
	<a href="updateprofile.php">Update Profile</a>
	<div>
		<a href="../php/logout.php">Logout</a>
	</div>
</div>
</header>
<!--header ends here-->

<br >
<h1 align = "center">Company Profile</h1>
<center>
<div class="row">
	<div class="colfot1"></div>
	<div class="itemdet">
		<?php
		$sql = "SELECT * FROM is1109.company where company.cemail = '".$uname."'";

		$result = $conn->query($sql);
						  
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$id = $row["companyid"];
				echo "<div class='imgside'>
				<img src='data:image/jpeg;base64," . base64_encode($row['logo']) . "' class='imge'>
				</div>
				<div class='dtlside'>
					<div align='left'>
						<p>Company Name - ".$row["cname"]."</p>
						<p>Company Address - ".$row["caddress"]."</p>		
						<p>Company Mobile - ".$row["cmobile"]."</p>
						<p>Company Email - ".$row["cemail"]."</p>
						<p>Company Description - ".$row["cdescription"]."</p>
						<p>Minimum Service Price - ".$row["cminprice"]."</p>
						<p>Maximum Service Price - ".$row["cmaxprice"]."</p>		
						<center><button style='background-color:red;color:white;' type='submit' onclick='delete_data($id)'>Delete Profile</button></center>
					</div>
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
<?php include '../php/stickyfooter.php';?>
<!--footer ends here-->
</body>
</html>