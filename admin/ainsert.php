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
<head>
 <link rel="stylesheet"  href="css/binsert.css"> 
</head>

<body>
<center><fieldset>
<div class="main">
   <header>
    <div style="width:100%; height :100%;">
  <h2> <a class="navbar-brand">Online Tickets</a></h2>

<nav>
<ul>
 <li><a href="adminlogin.php">Login</a></li>
<li><a href="index.php">HOME</a></li>
  <li><a href="home1.php">BACK TO Admin Home</a></li>

</ul>
 </nav>

<font color="#2e86c1"><h1>ADD FLIGHT IN TIMETABLE</h1></font>
<table border="2">
<form method="post" action="">
<tr><th>Flight_id:</th><th><input type="text"  name="flight_id"><br /><br></th></tr>
<tr><th>Flight Name:</th><th><input type="text" name="flight_name"><br /><br></th></tr>
<tr><th>leaving_from:</th><th><input type="text" name="leaving_from"> <br /><br></th></tr>

<tr><th>going_to:</th><th><input type="text" name="going_to"><br /><br></th></tr>

 <tr><th>depart_date:</th><th><input type="text" name="depart_date"><br /><br></th></tr>
 <tr><th>time:</th><th><input type="text" name="time"><br /><br></th></tr>

<tr><th>Return_Date:</th><th><input type="text" name="Return_Date"><br /><br></th></tr>
 <tr><th>dest_time:</th><th><input type="text" name="dest_time"><br /><br></th></tr>

<tr><th>fare: </th><th><input type="text" name="fare"><br /><br></th></tr>
</table><br><br>
<input type="submit" name="submit" value="insert"></center>
</fieldset></form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
include "config.php";
$fid=$_POST['flight_id'];
$fname=$_POST['flight_name'];
$lefrom=$_POST['leaving_from'];
$gto=$_POST['going_to'];
$ddate=$_POST['depart_date'];
$time=$_POST['time'];
$reto=$_POST['Return_Date'];
$dest_time=$_POST['dest_time'];
$fare=$_POST['fare'];

$sql = "insert into Flight_Available(flight_id, flight_name,leaving_from,going_to,depart_date,time,Return_Date,dest_time,fare)VALUES($fid,'$fname','$lefrom','$gto','$ddate','$time','$reto','$dest_time','$fare')";
$query=mysqli_query($conn,$sql); 

 if($query == true)
  {
	?>
		<script>
		    alert('Data Inserted Successfully');
		</script>
		<?php
  }
  else
{ 
  echo "not inserted";
}
}

?>
