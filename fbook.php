<?php
session_start();
error_reporting(0);

include("config.php");

if(!isset($_SESSION['username']) && ($_SESSION['$password']))
{
	 header('location:login.php');
}
else
{
}

?>
<link rel="stylesheet" type="text/css" href="css/fbook.css">
</head>
<body>
<form action="fbooked.php" method="post">
<?php
$user=$_SESSION['username'];
$psw=$_SESSION['password'];
?><fieldset><table border="1" width='90%' height='90%'>
<legend>Book From</legend>
<tr><th>
<label>Number of seats</th>
<td><?php
$checked_arr = $_POST['seat'];
$count = count($checked_arr);
?><input type="text" name="txt" value="<?php echo $count;?>" readonly>
</lable></td></tr>
<tr><th><lable>Your Selected Seats Are:</th>
<td><?php 
$chkbox = $_POST['seat']; 
$i = 0; 
While($i < sizeof($chkbox))
{ 
?><input type="text" name="txt1[]" value="<?php echo $chkbox[$i];?>" readonly><br>
<?php
$i++;?><?php
echo array_count_values(array_column($chkbox, 'txt'))[$i];
}
?>
</label></td></tr>
<tr><th><label for="Flight_id">FlightId</th><td><input type="text" name="Flight_id" placeholder="Enter the flight id"></td</tr>
<tr><th><label for="name">Full Name<span class="required">*</span></label></th><td><input type="text" name="name" placeholder="Type your Name" required></td></tr>
<tr><th><label for="address">Address<span class="required">*</span></label></th><td><textarea name="address" placeholder="Type your Address" required></textarea></td></tr>
<tr><th><label for="mno">contact number(only 10 digit)<span class="required">*</span></label></th><td><input type="tel" name="mno" pattern="\d{3}\d{3}\d{4}" placeholder="Type mobile number" required></td></tr>
<tr><th><label for="city">City<span class="required">*</span></label></th><td><input type="text" name="city" placeholder="Type your city" required></td></tr>
<tr><th><label for="state">State<span class="required">*</span></label></th><td><input type="text" name="state" placeholder="Type your state" required></td></tr>
<tr><th>user Id</th><td><input type="text" name="uname" value="<?php echo $user;?>" readonly></td></tr> 
<tr><th>Email Id<span class="required">*</span></th><td><input type:"text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" data-pattern-error="Please enter correct Email!!"  placeholder="Type your Email Address" required></td></tr>
<tr><th>Password</th><td><input type="password" name="password" value="<?php echo $psw;?>" readonly></td></tr>
<tr><th><input type="reset" value="reset"></th>
<td><input type="submit" name="book"  value="Book"></td></tr>
</fieldset></table>
</form></body>
</html>


