<html>
<head>
<title>About Us</title>
<link rel="stylesheet" type="text/css" href="css/headfoot.css"/>
<link rel="stylesheet" type="text/css" href="css/formstyle.css"/>
<link rel="stylesheet" type="text/css" href="css/about.css"/>
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
	<a class="active" href="#">About Us</a>
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

<hr style="height:5px;border-width:0;color:gray;background-color:white">
<img class ="image" src="images/img2.jpg" style="width:100%; height: 55%;">
<center>
<div class ="center" > <h1 >ABOUT US</h1><hr>
	<p style ="font-size:20px; background-color:rgb(255,255,255,0.1);padding:15px;">We are here to give new and emerging service providing companies as well as well-known service providing companies a chance to publish their details about what services they offer, their price ranges and their contact information so that customers can search and find service providers for their corresponding requirements easily at one place.</p>
</div>
</center>
<hr style="height:5px;border-width:0;color:gray;background-color:white">
<div>
	<center>		   
	<table class="para">
		<tr>
		<td colspan="2" style="font-size: 40px;font-family: Georgia, serif;">Who We Are</td>
		</tr>
		<tr>
		<td style="padding:30px 15px;font-family: serif;">ABC services is able to offer the perfect advertising for your company. We are useful for any large/medium/small size company, and possess many features which means customers can easily find your details. New and emerging service providing companies can register with us and advertise their details among the leading service providing companies. This will become a huge benifit for them in making a good reputation, finding customers and earning a profit. </td>
		<td style="font-size:80px; font-family:Fantasy; color:#801a00;"><center><b>CREATIVE</b><br>IDEAS</center></td>
		</tr>
		<tr>
		<td colspan="2"><br ></td>
		</tr>		
		<tr>
		<td><center><img src ="images/banner.png" height="190px" ></center></td><br>
		<td style="padding:30px 15px; font-family: serif;">Customers are able to search which services they need and the corresponding companies with their details will popup as advertisements. Customers can further find more details about the companies by clicking on the respective advertisements. This will help your customers find the services that match their needs and requirements quickly and easily. The company details include contact information such as mobile numbers, addresses and emails as well as their price ranges, thereby helping your customers fully understand the options you can offer them and to reach you if they feel satisfied.</td>
		</tr>
		<tr>
		<td colspan="2"><br ></td>
		</tr>		
		<tr>
		<td colspan="2" style="font-size: 40px;font-family: Georgia, serif;">Our Vision</td>
		</tr>
		<tr>
		<td colspan="2"><hr style=" color: red;"></td>
		</tr>
		<tr>
		<td>Our vision is simple - We exist to accelerate fulfilling peoples needs, helping them find the companies which offer their prefered services and giving them information about such new and well-known service providing companies.</td>
		<td style="font-size:80px; font-family:Fantasy; color:#801a00;"><center>TEAMWORK</center></td>
		</tr>
		<tr>
		<td colspan="2" style="font-size: 40px;font-family: Georgia, serif;">Our Mission</td>
		</tr>
		<tr>
		<td colspan="2"><hr style=" color: red;"></td>
		</tr>
		<tr>
		<td colspan="2">Our mission is to help service providers find their customers and customers fullfill their needs.</td>
		</tr>
	</table>
	</center>
</div>

<!----------FOOTER-------------->
<?php include 'php/stickyfooter.php';?>
<!--footer ends here-->
</body>
</html>