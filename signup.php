<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="css/headfoot.css"/>
<link rel="stylesheet" type="text/css" href="css/formstyle.css"/>
<script type = "text/javascript">
<!--
function password()	{
    var a=document.myForm.Password.value;
    var b=document.myForm.RPassword.value	
    if(a!=b)
	{
		alert("Passsword Mismatch!");
		return false;
    }
    if(a.length<8 || a.length>20)
	{
		alert("Password must contain only 8-20 characters");
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

<br ><br >
<center>
	<div id="regpic">
		<img src="images/register.png" height="110px" >
	</div>
</center>
<h1 align = "center">Register</h1>
<div class="row">
	<div class="colfot1"></div>
	<div class="colfot3 input-form">
		<form action = "php/register.php" name = "myForm" method = "POST" onsubmit="return password()" enctype="multipart/form-data">
		<fieldset>
		<legend>Sign Up as a Company.</legend>
		<table align = "center" cellspacing = "2" cellpadding = "2" border = "0" >
		<tr>
		<td>Company Logo</td>
		<td><input type = "file" name = "Image" required></td>
		</tr>
		<tr>
		<td>Company Name</td>
		<td><input type = "text" name = "Name" required></td>
		</tr>
		<tr>
		<td>Company Address</td>
		<td><input type = "text" name = "Address" required></td>
		</tr>
		<tr>
		<td>Company Mobile</td>
		<td><input type = "text" name = "Mobile" pattern="[0-9]{10}" required></td>
		</tr>		
		<tr>
		<td>Company Email</td>
		<td><input type = "text" name = "EMail" pattern="[a-zA-Z0-9%_+-]+@[a-zA-Z]+\.[a-z]{2,3}" required></td>
		</tr>
		<tr>
		<td>Providing Service</td>
		<td>
		  <select name="Service" required>
			<option disabled selected>-- Select Service --</option>
			<?php
				include 'php/conn.php';
				$sql="SELECT * From is1109.service";
				$result = $conn->query($sql);
				if($result->num_rows > 0)
				{
					while($row = $result->fetch_assoc())	
					{
						echo "<option value='". $row["servicename"] ."'>" .$row["servicename"] ."</option>";
					}
				}
			?>  
		  </select>		
		</td>
		</tr>
		<tr>
		<td>Company Description</td>
		<td><textarea type = "text" rows="3" name = "Description" required></textarea></td>
		</tr>
		<tr>
		<td>Password</td>
		<td><input type = "password" name = "Password" placeholder="Passwordmust contain 8-20 characters" required></td>
		</tr>
		<tr>
		<td>Re-enter Password</td>
		<td><input type = "password" name = "RPassword" required></td>
		</tr>
		<tr>
		<td>Minimum Price</td>
		<td><input type = "number" name = "Minprice" required></td>
		</tr>
		<tr>
		<td>Maximum Price</td>
		<td><input type = "number" name = "Maxprice" required></td>
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
<?php include 'php/stickyfooter.php';?>
<!--footer ends here-->
</body>
</html>