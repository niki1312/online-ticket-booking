<?php
session_start();
error_reporting(0);

include("config.php");

if(!isset($_SESSION['username']) && ($_SESSION['password']))
{
	 header('location:login.php');
}
else
{
}

?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/home.css">

</head>

<body>
<div class="log">
<a href="logout.php">Logout</a></div>
<center>
<?php include"header.php";?>
<h2><p>CHOOSE YOUR RESERVATION VEHICAL</p></h2>
</center>

<div class="row">
  <div class="column">
<img src="A340-500.jpg" border="3" alt="image1"  style="width:80%">
	<button class="btn"  onclick="myFunction1()">click</button>
	<script>
function myFunction1() {
  location.replace("flight.php")
}
</script>
  </div>
  
  <div class="column">
    <img src="trains.jpg" border="3" alt="image2"  style="width:80%" >
	<center><button class="btn"  onclick="myFunction2()">Click</button></center>
	<script>
function myFunction2() {
  location.replace("train.php")
}
</script>
  </div>
  </div>
<div class="row">
   <div class="column">
    <img src="best-buses.jpg" border="3" alt="image3"  style="width:80%">
	<button class="btn" onclick="myFunction3()">click</button>
	<script>
function myFunction3() {
  location.replace("bus.php")
}
</script>
  </div>
</script>
  </div>
</div>
</body>
</html>

<br /><br />
