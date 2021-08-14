
<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
  <title>Web Demo</title>
 <link rel="stylesheet"  href="css/Atimetable.css">  
</head>
<body class="landing">
<div class="main" id="section1">
   <header>
    <div style="width:100%; height :100%;">
<center>  <h2> <a class="navbar-brand">Online Tickets</a></h2></center>

<nav>
<div class="topnav">
<a href="login.php">Login</a>
<a href="index.php">HOME</a>
<div class="topnav-right">
<a href="Btimetable.php">BusTimetable</a></li>
<a href="#">AiroplaneTimetable</a></li>
<a href="timetables.php">TrainTimetable</a></li>
</div>
</div>
 </nav>
<center>
<font color=""><h1>Timetable Of Airoplanes</h1></font>
</center>
<fieldset>
<?php
include "config.php";

$result = mysqli_query($conn,"SELECT * FROM Flight_Available");

echo "<table border='1' align='center'><tr><th>Flight_Id</th><th>Flight_name</th><th>Leaving_from</th><th>Going_to</th><th>Depart_Date</th><th>Time</th><th>Return_Date</th><th>Dest_time</th><th>Fare</th></tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['flight_id'] . "</td>";
echo "<td>" . $row['flight_name'] . "</td>";
echo "<td>" . $row['leaving_from'] . "</td>";
echo "<td>" . $row['going_to'] . "</td>";
echo "<td>" . $row['depart_date'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "<td>" . $row['Return_Date'] . "</td>";
echo "<td>" . $row['dest_time'] . "</td>";
echo "<td>" . $row['fare'] . "</td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
</fieldset>
