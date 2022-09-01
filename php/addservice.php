<?php 
include 'conn.php';

$service = "";

if(isset($_POST['Service']))
{
	$service = $_POST["Service"];
}
	
$sql = "INSERT INTO is1109.service (servicename) VALUES('$service')";
	
if(mysqli_query($conn,$sql))
{
	echo "<script type='text/javascript'>alert('New service added successfully!'); window.location.href='http://localhost/PWA/admin/viewservices.php';</script>";
}
else
{
	echo "<script type='text/javascript'>alert('Service was not recorded!'); window.location.href='http://localhost/PWA/admin/addservice.php';</script>";
}
	
mysqli_close($conn);
?>