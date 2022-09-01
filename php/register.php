<?php
include 'conn.php';

$image = addslashes(file_get_contents($_FILES['Image']['tmp_name']));
$name=$_POST ["Name"];
$address=$_POST ["Address"];
$mobile=$_POST ["Mobile"];
$email=$_POST ["EMail"];
$service=$_POST ["Service"];
$description=$_POST ["Description"];
$password=$_POST ["Password"];
$min=$_POST ["Minprice"];
$max=$_POST ["Maxprice"];

$sqli="SELECT * FROM is1109.company WHERE company.cemail = '" .$email. "'";
$resultt = $conn->query($sqli);

if($resultt->num_rows > 0)
{
	echo "<script type='text/javascript'>alert('This email is already reserved! Please try again!'); window.location.href='http://localhost/PWA/signup.php';</script>";
}
else 
{
	$sql = "INSERT INTO is1109.company (logo,cname,caddress,cmobile,cemail,cservice,cdescription,cpassword,cminprice,cmaxprice) VALUES ('$image','$name','$address','$mobile','$email','$service','$description','$password','$min','$max')";

	if(mysqli_query($conn,$sql))
	{
		echo "<script type='text/javascript'>alert('Registration Successfull!'); window.location.href='http://localhost/PWA/index.html';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Registration Unsuccessfull!'); window.location.href='http://localhost/PWA/signup.php';</script>";
	}		
}
mysqli_close($conn);
?>