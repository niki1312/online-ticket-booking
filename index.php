<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
  <title>Web Demo</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="landing">
<div class="main" id="section1">
   <header>
    <div style="width:100%; height :100%;">
  <h2> <a class="navbar-brand">Online Tickets</a></h2>
<nav>
<a href="Admin/adminlogin.php">Admin Login</a>
<ul>
<li><a href="#">HOME</a></li>
<li><a href="timetables.php">Timetables</a></li>
  <li><a href="#service">Services</a></li>
   <li><a href="login.php">Login</a></li>
 <li><a href="#about">About us</a></li>
</ul>
 </nav>
<center>
<div class="img">
<div class="row">
  <div class="column">
    <img src="gifs/bus_loader.gif" alt="Bus" border="5" style="width:70%" >
  </div>
  <div class="column">
    <img src="gifs/train.gif" alt="Train" border="5" style="width:90%">
  </div>
  <div class="column">
    <img src="gifs/giphy.gif" alt="Airopalne" border="5" style="width:70%">
  </div>
</div>
</div>
<div class="typewriter">
<?php include "header.php";?>
<button class="button" onclick="window.location.href='login.php'"><span>Login </span></button>
<div class="ab">
<div class="main" id="about">
 <center><h4>
<section id="banner">
<a href="#about">
<div style="width:100%; height:80%;">
<div style="background-color: #d5d8dc"><font color="#000"><p>Quick Search <br> Online Bookings <br> Pay Online <br></p></font></div>
<ul class="actions">
</a>
</ul>
</div>
</section></center></h4>
</div>
</div>
</div></div>
</center>
</header>
</center>
<h5><a name="contact"></a>
<!-- Footer --><center>
<footer id="footer">
<div class="container">
<div class="row">
 <div class="column" style="background-color:#aaa;">
<section class="4u 6u(medium) 12u$(small)">
<h3>BoookMyTicket</h3>
<ul class="alt">
<li>Quick Search</li>
<li>Online Bookings</li>
<li>Pay Online</li>
</ul>
</section>
</div>

<div class="main" id="service">
 <div class="column" style="background-color:#bbb;">
<section class="4u 6u$(medium) 12u$(small)">
<h3>Top Routes</h3>
<ul class="alt">
<li>Nasik-Mumbai</li>
<li>Nasik-Pune</li>
<li>Nasik-Nagpur</li>
<li>Pune-Nasik</li>
</ul>
</section>
</div>

 <div class="column" style="background-color:#aaa;">
<section class="4u$ 12u$(medium) 12u$(small)">
<h3>Contact Us</h3>
<ul class="alt">
<li>Address:ABC Road<br></li>
<li>Mail:pandenikita@gmail.com</a></li>
<li>MobileNo:9689436076</li>
</ul>
</section>
</div>
</div>
</div>
<ul class="copyright">
<li>&copy; 2019 BookMyTicket. All rights reserved. Brought To You Projects</a></li>
	</ul>
	</div>
			</footer>
			</center>
</h5>
	</body>
</html>

