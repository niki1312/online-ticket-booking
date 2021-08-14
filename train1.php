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


<html>
<head>
<link rel="stylesheet" type="text/css" href="css/tshedule.css">

<head>
<body>
   
<font color="#2c3e50">
<div class="new"><center>
<?php

include "header.php";
?><?php
session_start();
if(isset($_POST['search'])){

$leaving_from = $_POST['Make'];
$going_to = $_POST['Make1'];
$depart_date  = $_POST['depart_date'];
$return_date = $_POST['return_date'];
  // Storing Selected Value In Variable



$sql = "select * from Train_Available where leaving_from='$leaving_from'  AND  going_to='$going_to' AND depart_date='$depart_date' AND  Return_Date='$return_date';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {?>
<marquee direction="left"><font color="#e74c3c" size="5">Note down the Trainid for future use.</font></marquee>
<?php
    echo "<table  border='4' width='30%' height='10%' font-color='#1f618d'><tr><th>Trainid</th><th>Trainname</th><th>Leaving_From</th><th>Going_To</th><th>Depart_Date</th><th>Time</th><th>Return_Date</th><th>Dest_Time</th><th>fare</th><th>Seatselect</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["train_id"]."</td><td>".$row["train_name"]."</td><td>".$row["leaving_from"]."</td><td>".$row["going_to"]."</td><td>".$row["depart_date"]."</td><td>".$row["time"]."</td><td>".$row["Return_Date"]."</td><td>".$row["dest_time"]."</td><td>".$row["fare"]."</td><td><a href=train_seat.php>search</a></td></tr>";
}echo "</table>";
} else {
?>   
          <script >
		    alert('No Train Found!!!');
		</script>;
<?php
}


}
?>
</center>
</div>
</font>
</body>
</html>


<?php

$_SESSION['leaving_from']=$leaving;
$_SESSION['going_to']=$going;
?>
