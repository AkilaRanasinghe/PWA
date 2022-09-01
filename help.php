<html>
<head>
<title>Help</title>
<link rel="stylesheet" type="text/css" href="css/headfoot.css"/>
</head>
<Body>
<!-----------HEADER-------------->
<header id = "header">
<div class="topnavname">
	<img src="images/example.png">
	<a class="active" href="#">ABC Services</a>
</div>
</header>
<header id = "header">
<div class="topnav"> 
	<a href="home.php">Home</a>
	<a href="requestservice.php">Request service</a>
	<a href="feedback.php">Contact Us</a>
	<a href="aboutus.php">About Us</a>
	<div>
		<a href="index.html">Login </a>
	</div>
	<div class="search-container">
		<form method="POST" action="search.php">
		<input type="text" placeholder="Search.." name="search">
		<button type="submit"><img src = "images/search.jpg"></button>
		</form>
	</div>
</div>
</header>
<!--header ends here-->

<br ><br >
<center>
	<div id="loginpic">
		<img src="images/faq.png" height="150px" >
	</div>
</center>
<h1 align = "center">Frequently Asked Questions</h1>
<div class="row">
	<div class="colfot1"></div>
	<div class="colfot3">
		<ul style="list-style-type:none;">
			<h3><img src="images/up-arrow.png" /> How can a company register?</h3>
			<li>First, they should check whether the service they are offering is available within the site. They can check it in the registration form, service section drop down. If the service is not available, they can request the service to be added to the system. An email will be sent shortly if the request is accepted. Then you can register.</li>
			<h3><img src="images/up-arrow.png" /> Can a registered company update or delete their account?</h3>
			<li>Yes, a company may update or delete their accounts as prefered. Their data will be no longer shown in the website if the account is deleted.</li>
			<h3><img src="images/up-arrow.png" /> Must a customer necessarily register to the system to view companies and services?</h3>
			<li>No, customers can freely visit the website and search their preferences. There is no need of them to register.</li>
			<h3><img src="images/up-arrow.png" /> Does the website collect users data who are visiting the site?</h3>
			<li>No details of the visitors will be collected via the website. Only the registered company details will be collected.</li>				
			<h3><img src="images/up-arrow.png" /> How can a customer contact the website?</h3>
			<li>Customers can contact and clarify their questions by filling out the form in the Contact Us tab.</li>				
		</ul>
	</div>
	<div class="colfot1"></div>
</div>
<br ><br >

<!----------FOOTER-------------->
<?php include 'php/stickyfooter.php';?>
<!--footer ends here-->
</body>
</html>