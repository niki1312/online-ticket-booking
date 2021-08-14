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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fbooked.css">
<body>

<h2>Responsive Checkout Form</h2>
<div class="row">
<div class="col-75">
<div class="container">
<form method="post" action="TrainBillpdf.php">
<div class="row">
<div class="col-50">
<h3>Billing Address</h3>
<?php
$seat=$_POST['txt1'];
$session_var=implode(",",$seat);?>
<label for="seat"><i class="fa fa-chair"></i>Selected Seats</label>
<input type="text" id="seat" name="seat" value="<?php echo $session_var;?>" readonly>

<label for="fname"><i class="fa fa-user"></i> Full Name</label>
<input type="text" id="name" name="name" value="<?php echo $_POST['name'];?>" readonly>
<label for="email"><i class="fa fa-envelope"></i> Email</label>
<input type="text" id="email" name="email" value="<?php echo $_POST['email'];?>" readonly>
<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
<input type="text" id="address" name="address" value="<?php echo $_POST['address'];?>" readonly>
<label for="city"><i class="fa fa-institution"></i> City</label>
<input type="text" id="city" name="city" value="<?php echo $_POST['city'];?>" readonly>
<div class="row">
<div class="col-50">
<label for="state">State</label>
<input type="text" id="state" name="state" value="<?php echo $_POST['state'];?>" readonly>
</div>
<div class="col-50">
<label for="zip">Zip</label>
<input type="text" id="zip" name="zip" placeholder="10001">
</div>
</div>
</div>
<div class="col-50">
<h3>Payment</h3>
<label for="fname">Accepted Cards</label>
<div class="icon-container">
<i class="fa fa-cc-visa" style="color:navy;"></i>
<i class="fa fa-cc-amex" style="color:blue;"></i>
<i class="fa fa-cc-mastercard" style="color:red;"></i>
<i class="fa fa-cc-discover" style="color:orange;"></i>
</div>
<label for="cname">Name on Card</label>
<input type="text" id="cardname" name="cardname" placeholder="Enter Name on Card">
<label for="ccnum">Credit card number</label>
<input type="text" id="cardnumber" name="cardnumber" placeholder="1111-2222-3333-4444">
<label for="expmonth">Exp Month</label>
<input type="text" id="expmonth" name="expmonth" placeholder="September">
<div class="row">
<div class="col-50">
<label for="expyear">Exp Year</label>
<input type="text" id="expyear" name="expyear" placeholder="2018">
</div>
<div class="col-50">
<label for="cvv">CVV</label>
<input type="text" id="cvv" name="cvv" placeholder="352">
</div>
</div>
</div>
</div>
<div class="col-25">
<div class="container">
 <?php
if(isset($_POST['book'])) {
 include "config.php";
  $seat1=$_POST['txt'];

 $train_id = $_POST['Train_id'];
 $sql = "select fare from Train_Available where train_id='$train_id'" ;
  $result = mysqli_query($conn,$sql);
   if($result == true)
  {
      while($row =mysqli_fetch_assoc($result))
      {
           $total=($seat1*$row['fare']);
          }
  }
}
?>
<center><b>Total Bill</b>
<table border="3" width="40%" height="50%">
<tr><th><p>Total<span class="price" style="color:black"></th><td><input type="text" align="middle" name="fare1" value="<?php echo $total;?>Rs." readonly><b></b></span></p></td></tr>
</table></center>
</div>
 </div>
</div>

<input type="submit" name="submit" value="Continue to checkout" class="btn">

</form>
</div>
</div>

</body>
</html>
