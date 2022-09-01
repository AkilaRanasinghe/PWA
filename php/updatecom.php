<?php
session_start();
include 'conn.php';	
$uname = $_SESSION['uname'];
$name=$_POST ["Name"];
$address=$_POST ["Address"];
$mobile=$_POST ["Mobile"];
$service=$_POST ["Service"];
$description=$_POST ["Description"];
$password=$_POST ["Password"];
$min=$_POST ["Minprice"];
$max=$_POST ["Maxprice"];

$sql="SELECT * FROM is1109.company WHERE company.cemail ='". $uname."'";
$result = $conn->query($sqli);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())	
	{
		$email = $row["cemail"];
		if($uname == $email)
		{
			$sql="UPDATE is1109.company SET cname='$name',caddress='$address',cmobile='$mobile',cservice='$service',cdescription='$description',cpassword='$password',cminprice='$min',cmaxprice='$max' where company.cemail = '".$uname."'";
			if(mysqli_query($conn,$sql))
			{
				echo "<script type='text/javascript'>alert('Updated Successfully!'); window.location.href='http://localhost/PWA/company/companyprofile.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert(Update Unsuccessfull!Please try again later!'); window.location.href='http://localhost/PWA/company/companyprofile.php';</script>";
			}	
		}
		else
		{
			echo "<script type='text/javascript'>alert('This username is already reserved!Please try again!'); window.location.href='http://localhost/PWA/company/updateprofile.php';</script>";
		}
	}
}
else 
{
	$sql="UPDATE is1109.company SET cname='$name',caddress='$address',cmobile='$mobile',cservice='$service',cdescription='$description',cpassword='$password',cminprice='$min',cmaxprice='$max' where company.cemail = '".$uname."'";
    if(mysqli_query($conn,$sql))
    {
        echo "<script type='text/javascript'>alert('Updated Successfully!'); window.location.href='http://localhost/PWA/company/companyprofile.php';</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert(Update Unsuccessfull!Please try again later!'); window.location.href='http://localhost/PWA/company/companyprofile.php';</script>";
    }
}

mysqli_close($conn);
?>