<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/headfoot.css"/>
<link rel="stylesheet" type="text/css" href="css/homestyle.css"/>
</head>
<Body>
<!-----------HEADER-------------->
<header id = "header">
<div class="topnavname">
	<img src="images/example.png">
	<a class="active" href="#">ABC Services</a>
</div>
<div class="topnav"> 
	<a class="active" href="#">Home</a>
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

<!----------WELLCOME---------->
<br ><br >
<table width = "auto" align="center"><td>
<section id = "wellcome" class = "wellcome">
	<div>
		<h2>WELCOME ABC SERVICES!</h2>
		<h3>Your trusted service finder.</h3>
	</div>
	<br ><br >
	<div>
		<video autoplay loop>
			<source src="images/movie.mp4" type="video/mp4">
		</video>
	</div>
</section>
</td></table>

<div class="row">
	<div class="colfot1"></div>
	<div class="colfot3" align="center">
		<h3 width = "auto">ABC Services is the best service finder on the internet. You can search for any service you need and results will pop up in an instant. We have well- known as well as new and emerging companies who are willing to give their services to you, registered with us. All you need is a need! And we are here to find the perfect service to fullfill your need!</h3>	
		<section id = "btns">
			<button class="btn">
			<a href="search.php" >Get Started</a>
			</button>
		</section>
	</div>
	<div class="colfot1"></div>
</div>

<!--wellcome ends here-->
<br >
<!----------DETAIL---------->

<div class="row" align="center">
	<h2>You can find the details of the following service providing companies through our website.</h2>
</div>
<br >

<table width = "auto" align="center"><td>
<section id = "detail">
	<div class="tbl-header">
		<table cellpadding="0" cellspacing="0" border="0" style="background-color: #2E2E2E;">
		  <thead>
			<tr>
			  <th>NAME</th>
			  <th>SERVICE</th>
			  <th>SLOGAN</th>
			</tr>
		  </thead>      

          <tbody id="table-data" class="tbl-content">
          <?php
            include 'php/conn.php';
            $sql = "SELECT * FROM is1109.company where company.cemail != 'admin@admin.com'";
            $result = $conn->query($sql);
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo "<tr>
                        <td>".$row["cname"]."</td>
                        <td>".$row["cservice"]."</td>
                        <td>".$row["cdescription"]."</td>
                        </tr>";
                    }
                }
                ?>
		  </tbody>
		</table>
	  </div>
</section>

<!--details ends here-->
<br>
<br>
<!----------HELPBTN-------------->
<section id = "btns">
    <table align="center">
	<td><button class="btn">
    <a href="help.php">Help</a>
	</button>
    </td>
	<td><button class="btn">
    <a href="facilities.php">Facilities</a>
	</button>
    </td></table>
</section>

<!--Help Button ends here-->
</td></table>

<!----------FOOTER-------------->
<?php include 'php/stickyfooter.php';?>
<!--footer ends here-->
</body>
</html>