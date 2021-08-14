 <?php
session_start();
error_reporting(0);

include("config.php");

if(!isset($_SESSION['user_name']) && ($_SESSION['psw']))
{
	 header('location:login.php');
}
else
{
}

?>

<html>
<body style="background-image:url('A340-500.jpg'); background-attachment: fixed; background-repeat: no-repeat; background-size:cover;">

<ul><h3><b><a href="cancelFTicket.php">Ticket cancellation</a> </h3</b>

  <li><a class="active" href="#">Flight</a></li>
  <li><a href="train.php">Train</a></li>
  <li><a href="bus.php">Bus</a></li>
  <li><a href="index.php">home</a></li>
  <li><a href="Atimetable.php">Timetable</a></li>
</ul> 

<link rel="stylesheet"  href="css/flight.css">
<center>
<div id="flights" class="box">
<h2>Flight booking  </h2>
<form action="flight1.php" method="post">
<div>
<select id="Make" name="Make"  onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
<option value="0" disabled="disabled" selected="selected" id="place">Leaving from...</option>
<option value="New Delhi">New Delhi</option>
<option value="Nasik">Nasik</option>
<option value="Mumbai">Mumbai</option>
<option value="Pune">Pune</option>
<option value="BAnglore">Banglore</option>
<option value="Indore">Indore</option>
<option value="Kolhapur">Kolhapur</option>
<option value="Ahamadabad">Ahamadabad</option>
</select>
<select id="Make1" name="Make1"  onchange="document.getElementById('selected_text1').value=this.options[this.selectedIndex].text">
<option value="0" disabled="disabled" selected="selected" id="place">Going to...</option>
<option value="New Delhi">New Delhi</option>
<option value="Bangalore">Bangalore</option>
<option value="Nasik">Nasik</option>
<option value="Indore">Indore</option>
<option value="Kolhapur">Kolhapur</option>
<option value="Mumbai">Mumbai</option>
<option value="Ahamadabad">Ahamadabad</option>
<option value="Pune">Pune</option>
</select>
</div>
<p><label style="display:block" id="label0">Depart date:</label>
<input type="date" name="depart_date"  id="datepicker" placeholder="Pick a date" /></p>
<p><label style="display:block" id="label1">Return date:</label>
 <input type="date" name="return_date"  id="datepicker1" placeholder="Pick a date" /></p>

<input type="hidden" name="selected_text" id="selected_text" value="" />
<input type="hidden" name="selected_text1" id="selected_text1" value="" />
<input type="hidden" name="selected_text2" id="selected_text2" value="" />
<input type="hidden" name="selected_text3" id="selected_text3" value="" />
<input type="submit" name="search" id="find" value="Search Flights"/>
</form>
</div>
</center>
</div>
</body>
</html>

<?php

$_SESSION['leaving_from']=$leaving;
$_SESSION['going_to']=$going;
?>

