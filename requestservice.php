<html>
<head>
<title>Request a Service</title>
<link rel="stylesheet" type="text/css" href="css/formstyle.css"/>
<link rel="stylesheet" type="text/css" href="css/headfoot.css"/>
<script type = "text/javascript">
<!--
function validate() {
	var emailID = document.myForm.EMail.value;
	atpos = emailID.indexOf("@");
	dotpos = emailID.lastIndexOf(".");
	if (atpos < 1 || ( dotpos - atpos < 2 )) {
		alert("Please enter correct email address!")
		document.myForm.EMail.focus() ;
		return false;
	}
	return( true );	
}
//-->
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
	<a class="active" href="#">Request service</a>
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

<br ><br >
<center>
	<div id="loginpic">
		<img src="images/service.png" height="110px" >
	</div>
</center>
<h1 align = "center">Request a New Service Form</h1>
<div class="row">
	<div class="colfot1"></div>
	<div class="colfot3 input-form">
		<form action = "php/requestservice.php" name = "myForm" method = "POST" onsubmit = "return(validate());">
		<fieldset>
		<legend>Service Information</legend>
		<table align = "center" cellspacing = "2" cellpadding = "2" border = "0" >
		<tr>
		<td>New Service</td>
		<td><input type = "text" name = "Service" required></td>
		</tr>
		<tr>
		<td>Service Description</td>
		<td><input type = "text" name = "Description" required></td>
		</tr>
		<tr>
		<td>Company Email</td>
		<td><input type = "text" name = "EMail" required></td>
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
<?php include 'php/fixedfooter.php';?>
<!--footer ends here-->
</body>
</html>