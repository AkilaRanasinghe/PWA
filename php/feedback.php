<?php 
include 'conn.php';

$name = "";
$email = "";
$feedback = "";

if(isset($_POST['Name']))
{
	$name = $_POST["Name"];
}
if(isset($_POST['EMail']))
{
	$email = $_POST["EMail"];
}
if(isset($_POST['Feedback']))
{
	$feedback = $_POST["Feedback"];
}
	
$sql = "INSERT INTO is1109.feedback (feedbackname,feedbackemail,feedback) VALUES ('$name','$email','$feedback')";
	
if(mysqli_query($conn,$sql))
{
	echo "<script type='text/javascript'>alert('Thankyou for the feedback!'); window.location.href='http://localhost/PWA/home.php';</script>";
}
else
{
	echo "<script type='text/javascript'>alert('Your feedbackwas not recorded.'); window.location.href='http://localhost/PWA/feedback.php';</script>";
}
	
mysqli_close($conn);
?>