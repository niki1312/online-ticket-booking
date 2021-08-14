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
 <title>Update a Record from MySQL Database</title>

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

<font color="#c0392b"><h1>Enter the FlightId which record can be update</h1></font>
<form method="post">
<table width = "400" border =" 0" cellspacing = "1" cellpadding = "2">
 <tr>
 <td width = "100">Flight ID</td>
 <td><input name = "Flight_id" type = "text" id = "flight_id"></td>
 </tr>
 <tr>
 <td width = "100">depart_date</td>
 <td><input name = "depart_date" type = "text" id = "depart_date"></td>
 </tr>
 <tr>
 <td width = "100">Return_date</td>
 <td><input name = "Return_Date" type = "text" id = "return_date"></td>
 </tr>
<tr>
<td width = "100"> </td>
 <td> </td>
 </tr>
 <tr>
<td width = "100"> </td>
 <td>
 <input name = "update" type = "submit" id = "update" value = "Update">
  </td>
 </tr>
 </table>
</form>
</center></fieldset>
</body>
</html>
<?php
if(isset($_POST['update'])) {
include "config.php";
$fid = $_POST['Flight_id'];
$ddate= $_POST['depart_date'];
$rdate= $_POST['Return_Date'];

$sql = "UPDATE Flight_Available SET depart_date='$ddate',Return_Date='$rdate' WHERE flight_id = '$fid'" ;
$result =mysqli_query($conn,$sql);
 if($result == true)
  {
	?>
		<script>
		    alert('Data Updated Successfully');
		</script>
		<?php
  }
  else
{ 
  echo "not deleted";
}
}
 ?>
