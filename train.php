
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
<head>

<script type="text/javascript">

</script>
</head>
<body style="background-image:url('trains.jpg'); background-attachment: fixed; background-repeat: no-repeat; background-size:cover;">

<ul><h3><b><a href="cancleTTicket.php">Ticket cancellation</a> </h3</b>

  <li><a class="active" href="#">Train</a></li>
  <li><a href="flight.php">Flight</a></li>
  <li><a href="bus.php">Bus</a></li>
  <li><a href="index.php">home</a></li>
  <li><a href="Ttimetable.php">Timetable</a></li>
</ul> 
 

<link rel="stylesheet"  href="css/train.css">
<center>
<div id="trains" class="box">
<h2>Train booking  </h2>
<form action="train1.php" method="post">
<div>
<select id="Make0" name="Make"  onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
<option value="0" disabled="disabled" selected="selected" id="place">Leaving from...</option>
<option value="Nasik">Nasik</option>
<option value="Mumbai">Mumbai</option>
<option value="Pune">Pune</option>
<option value="Nagpur">Nagpur</option>
<option value="Aurangabad">Aurangabad</option>
<option value="bhusaval">Bhusaval</option>
<option value="Amritsar">Amritsar</option>
<option value="Allahabad">Allahabad</option>
</select>
<select id="Make1" name="Make1"     onchange="document.getElementById('selected_text1').value=this.options[this.selectedIndex].text">
<option value="0" disabled="disabled" selected="selected" id="place">Going to...</option>
<option value="Delhi" >Delhi</option>
<option value="Nasik">Nasik</option>
<option value="Aurangabad"> Aurangabad</option>
<option value="Kathmandu" >Kathmandu</option>
<option value="Pune">Pune</option>
<option value="Mumbai">Mumbai</option>
<option value="Bhusaval">Bhusaval</option>
<option value="Nagpur">Nagpur</option>
</select>
</div>
<p><label style="display:block" id="label0">Depart date:</label>
<input type="date" name="depart_date"  id="datepicker" placeholder="Pick a date"/></p>
<p><label style="display:block" id="label1">Return date:</label>
 <input type="date" name="return_date"  id="datepicker1" placeholder="Pick a date" onkeyup='checkdatepicker();'/></p>

<input type="hidden" name="selected_text" id="selected_text" value="" />
<input type="hidden" name="selected_text1" id="selected_text1" value="" />
<input type="hidden" name="selected_text2" id="selected_text2" value="" />
<input type="hidden" name="selected_text3" id="selected_text3" value="" />
<input type="submit" name="search" id="find" value="Check Availability"/>
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
