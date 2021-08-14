<?php
session_start();
include("config.php");

if(!isset($_SESSION['username']) && ($_SESSION['password']))
{
         header('location:login.php');
}
else
{

}

?>
<html>
<body style="background-image:url('Best-Bus1.jpg'); background-attachment: fixed; background-repeat: no-repeat; background-size:cover;">

 <link rel="stylesheet"  href="css/train.css">
<ul><h3><b><a href="cancelBTicket.php">Ticket cancellation</a> </h3></b>

  <li><a class="active" href="#">Bus</a></li>
  <li><a href="flight.php">Flight</a></li>
  <li><a href="train.php">Train</a></li>
  <li><a href="index.php">home</a></li>
  <li><a href="Btimetable.php">Timetable</a></li>
</ul> 

<center>
<div id="buses" class="box">
<h2>Bus booking  </h2>
<form action="bus1.php" method="post">
<div>
<select id="Make" name="Make"     onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
<option value="0" disabled="disabled" selected="selected" id="place">Leaving from...</option>
<option value="Nasik">Nasik</option>
<option value="Pune">Pune</option>
<option value="Ahmadnagar">Ahmadnagar</option>
<option value="Mumbai">Mumbai</option>
<option value="Shirdi">Shirdi</option>
<option value="Sinnar">Sinnar</option>
<option value="Malegoan">Malegoan</option>
<option value="Kolhapur">kolhapur</option>
</select>
<select id="Make1" name="Make1"     onchange="document.getElementById('selected_text1').value=this.options[this.selectedIndex].text">
<option value="0" disabled="disabled" selected="selected" id="place">Going to...</option>
<option value="Solapur">Solapur</option>
<option value="Nasik">Nasik</option>
<option value="Mumbai">Mumbai</option>
<option value="Malegoan">Malegoan</option>
<option value="Pune">Pune</option>
<option value="Shirdi">Shirdi</option>
<option value="Kolhapur">Kolhapur</option>
<option value="Ahmadnagar">Ahmadnagar</option>
</select>
</div>
<p><label style="display:block" id="label0">Depart date:</label>
<input type="date" name="depart_date"  id="datepicker" placeholder="Pick a date" /></p>
<p><label style="display:block" id="label1">Return date:</label>
<input type="date" name="return_date"  id="datepicker1" placeholder="Pick a date" /></p>
<input type="submit" name="search" id="find" value="Check Availability"/>
</form>
</div>
</center>
</div>
</body>
</html>

