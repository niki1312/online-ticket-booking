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

<html><head>
<link rel="stylesheet" type="text/css" href="css/bus_seat.css">
 <style>
input:checked + label { color: green; }
</style>
</head>
<body><fieldset> 
<center><h1><header>Seat Selection</header></h1></center>

<center>
<form action="Bbook.php" method="post">

<div class="row">

  <div class="col"><input type="checkbox" name="seat[]" value="41"/><label>seat41</label></div><b>front side</b>
  <div class="col"><input type="checkbox" name="seat[]" value="37" checked  disabled="disabled"/><label>seat37</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="33"/><label>seat33</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="29"/><label>seat29</label></div>
 <div class="col"><input type="checkbox" name="seat[]"  value="25"checked disabled="disabled"/><label>seat25</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="21"/><label>seat21</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="17"/><label>seat17</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="13"/><label>seat13</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="09"/><label>seat09</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="05"/><label>seat05</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="01"/><label>seat01</label></div>
</div>

<div class="row">
    <div class="col"><input type="checkbox" name="seat[]" value="42"/><label>seat42</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="38"/><label>seat38</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="34" checked  disabled="disabled"/><label>seat34</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="30"/><label>seat30</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="26"/><label>seat26</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="22"/><label>seat22</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="18"  checked disabled="disabled"/><label>seat18</label></div> 
<div class="col"><input type="checkbox" name="seat[]"value="14"/><label>seat14</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="10"/><label>seat10</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="06"/><label>seat06</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="02"/><label>seat02</label></div>
</div>

<div class="row">
<b>Bus Seat Model</b>
  <div class="col"><input type="checkbox" name="seat[]" value="43"/><label>seat43<br><b>(backside)</b></br></label> </div>
</div>
</div>
<div class="row">

    
  <div class="col"><input type="checkbox" name="seat[]" value="44"/><label>seat44</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="39"/><label>seat39</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="35"/><label>seat35</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="31"  checked  disabled="disabled"/><label>seat31</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="27"/><label>seat27</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="23"/><label>seat23</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="19"/><label>seat19</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="15"/><label>seat15</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="11" checked  disabled="disabled"/><label>seat11</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="07"/><label>seat07</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="03"/><label>seat03</label></div>
</div>
<div class="row">

    <div class="col"><input type="checkbox"  name="seat[]" value="45"/><label>seat45</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="40"/><label>seat40</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="36" checked  disabled="disabled"/><label>seat36</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="32"/><label>seat32</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="28"/><label>seat28</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="24"/><label>seat24</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="20"/><label>seat20</label></div> 
<div class="col"><input type="checkbox"  name="seat[]" value="16"/><label>seat16</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="12"/><label>seat12</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="08" checked  disabled="disabled"/><label>seat08</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="04"/><label>seat04</label></div><b>front side</b>

</div>
</center>

<br>
<center>
<fieldset><input type="submit" value="submit"></fieldset>
<br><br>
</fieldset></form>
</body>
</html>


<?php
$_SESSION['leaving_from']=$leaving;
$_SESSION['going_to']=$going;
?>
