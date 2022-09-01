<?php 
include 'conn.php';

$service = "";
$description = "";
$email = "";

if(isset($_POST['Service']))
{
	$service = $_POST["Service"];
}
if(isset($_POST['Description']))
{
	$description = $_POST["Description"];
}
if(isset($_POST['EMail']))
{
	$email = $_POST["EMail"];
}
	
$sql = "INSERT INTO is1109.temp (tempservice,tempdescription,tempemail) VALUES ('$service','$description','$email')";
	
if(mysqli_query($conn,$sql))
{
	echo "<script type='text/javascript'>alert('Your service will be considered shortly. Thankyou!'); window.location.href='http://localhost/PWA/home.php';</script>";
}
else
{
	echo "<script type='text/javascript'>alert('Your service was not recorded!'); window.location.href='http://localhost/PWA/requestservice.php';</script>";
}
	
mysqli_close($conn);
?>