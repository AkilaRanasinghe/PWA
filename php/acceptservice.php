<?php
include 'conn.php';

$recordId = $_GET["id"];

$successmsg = "Your request to add a new service has been accepted. Now you can register to the system.\nThankyou";
$successmsg = wordwrap($successmsg,200);

$sql = "SELECT * FROM is1109.temp WHERE temp.tempid = '".$recordId."'";
$result = $conn->query($sql);
				  
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$service = $row["tempservice"];
		$email = $row["tempemail"];
		$sqli = "INSERT INTO is1109.service (servicename) VALUES('$service')";
		if(mysqli_query($conn,$sqli))
		{
			$sqlii = "DELETE FROM is1109.temp WHERE temp.tempid = '".$recordId."'";
			mail($email,"Reguarding your new service request",$successmsg);
			if(mysqli_query($conn,$sqlii))
			{
				echo "<script type='text/javascript'>alert('New service recorded in database!'); window.location.href='http://localhost/PWA/admin/viewservices.php';</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('Service was not saved!'); window.location.href='http://localhost/PWA/admin/viewservices.php';</script>";
		}		
	}
}

mysqli_close($conn);
?>