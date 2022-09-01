<?php
include_once"../php/conn.php";
session_start();
$uname = $_SESSION['uname'];
?>

<html>
<head>
<title>Update Profile</title>
<link rel="stylesheet" type="text/css" href="../css/headfoot.css"/>
<link rel="stylesheet" type="text/css" href="../css/formstyle.css"/>
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
	<img src="../images/example.png">
	<a class="active" href="#">ABC Services</a>
</div>
</header>
<header id = "header">
<div class="topnav">
	<a href="companyprofile.php">Company Profile</a>
	<a class="active" href="#">Update Profile</a>
	<div>
		<a href="../php/logout.php">Logout</a>
	</div>
</div>
</header>
<!--header ends here-->

<br >
<h1 align = "center">Update Company Details</h1>
<div class="row">
	<div class="colfot1"></div>
	<div class="colfot3 input-form">
		<?php
		
		$sql="SELECT * FROM is1109.company where company.cemail = '".$uname."'";
		$result=$conn->query ($sql);
		if ($result -> num_rows >0)
		{
			while ($row= $result -> fetch_assoc())
			{
                    $name=$row ['cname'];
                    $caddress=$row ['caddress'];
                    $cmobile=$row ['cmobile'];
					$cservice=$row ['cservice'];
                    $cdescription=$row ['cdescription'];
                    $cpassword=$row ['cpassword'];
                    $cminprice=$row ['cminprice'];
					$cmaxprice=$row ['cmaxprice'];  					
			}
		}
        ?>	
		<form action = "../php/updatecom.php" name = "myForm" method = "POST" onsubmit="return password()" enctype="multipart/form-data">
		<fieldset>
		<legend>Update Company Profile</legend>
		<table align = "center" cellspacing = "2" cellpadding = "2" border = "0" >
		<tr>
		<td>Company Name</td>
		<td><input type = "text" name = "Name" value="<?php echo $name ?>" required></td>
		</tr>
		<tr>
		<td>Company Address</td>
		<td><input type = "text" name = "Address" value="<?php echo $caddress ?>" required></td>
		</tr>
		<tr>
		<td>Company Mobile</td>
		<td><input type = "text" name = "Mobile" value="<?php echo $cmobile ?>" pattern="[0-9]{10}" required></td>
		</tr>		
		<tr>
		<td>Company Email</td>
		<td><input type = "text" name = "EMail" value="<?php echo $uname ?>" pattern="[a-zA-Z0-9%_+-]+@[a-zA-Z]+\.[a-z]{2,3}" disabled></td>
		</tr>
		<tr>
		<td>Providing Service</td>
		<td>
		  <select name="Service" required>
			<option disabled selected><?php echo $cservice ?></option>
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
		<td><textarea type = "text" rows="3" name = "Description" required><?php echo $cdescription ?></textarea></td>
		</tr>
		<tr>
		<td>Password</td>
		<td><input type = "password" value="<?php echo $cpassword ?>" name = "Password" placeholder="Passwordmust contain 8-20 characters" required></td>
		</tr>
		<tr>
		<td>Re-enter Password</td>
		<td><input type = "password" value="<?php echo $cpassword ?>" name = "RPassword" required></td>
		</tr>
		<tr>
		<td>Minimum Price</td>
		<td><input type = "text" value="<?php echo $cminprice ?>" name = "Minprice" required></td>
		</tr>
		<tr>
		<td>Maximum Price</td>
		<td><input type = "text" value="<?php echo $cmaxprice ?>" name = "Maxprice" required></td>
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
<?php include '../php/stickyfooter.php';?>
<!--footer ends here-->
</body>
</html>