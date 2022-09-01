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
	<a href="viewfeedback.php">View Feedback</a>
	<a class="active" href="#">Add Service</a>
	<div>
		<a href="../php/logout.php">Logout</a>
	</div>
</div>
</header>
<!--header ends here-->

<br >
<h1 align = "center">Add a Service</h1>
<div class="row">
	<div class="colfot1"></div>
	<div class="colfot3 input-form">
		<form action = "../php/addservice.php" name = "myForm" method = "POST">
		<fieldset>
		<legend>Service Information</legend>
		<table align = "center" cellspacing = "2" cellpadding = "2" border = "0" >
		<tr>
		<td>New Service</td>
		<td><input type = "text" name = "Service" required></td>
		</tr>
		<tr>
		<td><br ></td>
		<td><br ></td>
		</tr>
		<tr align="center">
		<td colspan="2"><button type = "submit" value = "Submit" />Submit</button><button type = "reset" value = "Reset" />Reset</button></td>
		</tr>
		</fieldset>
		</table>
		</form>
	</div>
	<div class="colfot1"></div>
</div>

<!----------FOOTER-------------->
<?php include '../php/fixedfooter.php';?>
<!--footer ends here-->
</body>
</html>