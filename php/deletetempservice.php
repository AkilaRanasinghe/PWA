<?php
include 'conn.php';

	$recordId = $_GET["id"];
	
	$sql = "DELETE FROM is1109.temp WHERE temp.tempid = '".$recordId."'";
	
	if(mysqli_query($conn,$sql))
	{
		echo "<script type='text/javascript'>alert('Service request rejected.'); window.location.href='http://localhost/PWA/admin/viewservices.php';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Service request could not be rejected!'); window.location.href='http://localhost/PWA/admin/viewservices.php';</script>";
	}
	
	mysqli_close($conn);
?>