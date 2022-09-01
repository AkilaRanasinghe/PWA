<?php
include 'conn.php';

	$recordId = $_GET["id"];
	
	$sql = "DELETE FROM is1109.company WHERE company.companyid = '".$recordId."'";

	if(mysqli_query($conn,$sql))
	{
		session_destroy();
		echo "<script type='text/javascript'>alert('Your profile has been deleted. Thankyou for using ABC Services!.'); window.location.href='http://localhost/PWA/home.php';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Sorry, Your profile was not deleted. Please try again later!'); window.location.href='http://localhost/PWA/company/companyprofile.php';</script>";
	}
	
	mysqli_close($conn);
?>