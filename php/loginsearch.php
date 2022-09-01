<?php
include 'conn.php';

$uname = "";
$password = "";

if(isset($_POST['Uname']))
	{
		$uname = $_POST["Uname"];
	}
if(isset($_POST['Password']))
	{
		$password = $_POST["Password"];
	}

$sql="SELECT * FROM is1109.company WHERE company.cemail = '". $uname. "' AND company.cpassword = '". $password. "'";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())	
	{
		$uname = $row["cemail"];
		if($uname == "admin@admin.com")
		{
			echo "<script type='text/javascript'>alert('You are logged in as an admin!'); window.location.href='http://localhost/PWA/admin/viewservices.php';</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('You are logged in as a company!'); window.location.href='http://localhost/PWA/company/companyprofile.php';</script>";
		}
		
	}
}
else 
{
	echo "<script type='text/javascript'>alert('UserID or Password do not match.Please try again!'); window.location.href='http://localhost/PWA/index.html';</script>";
}

$conn->close();
?>

<?php

session_start();
$_SESSION['uname'] = $uname;

?>