<html>
<head>
<title>Contact Us</title>
<link rel="stylesheet" type="text/css" href="css/headfoot.css"/>
<link rel="stylesheet" type="text/css" href="css/formstyle.css"/>
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
	<a href="requestservice.php">Request service</a>
	<a class="active" href="#">Contact Us</a>
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
		<img src="images/contact.png" height="110px" >
	</div>
</center>
<h1 align = "center">Feel free to clarify your questions</h1>
<div class="row">
	<div class="colfot1"></div>
	<div class="colfot3 input-form">
		<form action = "php/feedback.php" name = "myForm" method = "POST" onsubmit = "return(validate());">
		<fieldset>
		<legend>Feedback</legend>
		<table align = "center" cellspacing = "2" cellpadding = "2" border = "0" >
		<tr>
		<td>Name</td>
		<td><input type = "text" name = "Name" required></td>
		</tr>
		<tr>
		<td>Email</td>
		<td><input type = "text" name = "EMail" required></td>
		</tr>
		<tr>
		<td>Feedback</td>
		<td><input type = "text" name = "Feedback" required></td>
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