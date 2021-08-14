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
<link rel="stylesheet" type="text/css" href="css/tseat.css">
  <style>
input:checked + label { color: green; }
</style>
</head>
<body>
<center><font color=" #e74c3c"><h1><header>Seat Selection</header></h1></font></center>
<fieldset>
<form action="tbook.php" method="post"> 

<center>
<div class="row">

  <div class="col"><input type="checkbox" name="seat[]" value="A22"/><label>seat22</label></div><b> Door</b>
  <div class="col"><input type="checkbox" name="seat[]" value="A20" checked disabled="disabled"/><label>seat20</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="A18"/><label>seat18</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="A16"/><label>seat16</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A14" checked disabled="disabled"/><label>seat14</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A12"/><label>seat12</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A10"/><label>seat10</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="A08"/><label>seat08</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A06"/><label>seat06</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A04"/><label>seat04</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="A01"/><label>seat01</label></div>
</div>
<div class="row">
    <div class="col"><input type="checkbox" name="seat[]" value="A21"/><label>seat21</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="A19"/><label>seat19</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="A17"/><label>seat17</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="A15"/><label>seat15</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="A13"/><label>seat13</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A11"/><label>seat11</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A09"/><label>seat09</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="A07"/><label>seat07</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A05"/><label>seat05</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A03"/><label>seat03</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="A02"/><label>seat02</label></div>
</div>

<div class="row">
 <label>A:First-Class Air-conditioned</label>
</div>
</div>
<div class="row">

     	
  <div class="col"><input type="checkbox" name="seat[]" value="A23"/><label>seat23</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="A26"/><label>seat26</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="A28"/><label>seat28</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="A30"/><label>seat30</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A32"/><label>seat32</label></div>
 <div class="col"><input type="checkbox" name="seat[]"value="A34"/><label>seat34</label></div>
 <div class="col"><input type="checkbox" name="seat[]"value="A36"/><label>seat36</label></div> 
<div class="col"><input type="checkbox" name="seat[]"value="A38"/><label>seat38</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A40"/><label>seat40</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A42"/><label>seat42</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="A44"/><label>seat44</label></div>
</div>
<div class="row">
    <div class="col"><input type="checkbox" name="seat[]" value="A24"/><label>seat24</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="A25"/><label>seat25</label></div>
    <div class="col"><input type="checkbox" name="seat[]"value="A27"/><label>seat27</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="A29"checked disabled="disabled"/><label>seat29</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="A31"/><label>seat31</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A33"/><label>seat33</label></div>
 <div class="col"><input type="checkbox" name="seat[]"value="A35"/><label>seat35</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="A37"/><label>seat37</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A39" checked disabled="disabled"/><label>seat39</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="A41"/><label>seat41</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="A43"/><label>seat43</label></div><b>Door</b>
</div>
</center>
<br>
<center>
<div class="row">

  <div class="col"><input type="checkbox" name="seat[]" value="B22"/><label>seat22</label></div><b>Door</b>
  <div class="col"><input type="checkbox" name="seat[]"  value="B20" checked disabled="disabled"/><label>seat20</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="B18"/><label>seat18</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="B16"/><label>seat16</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B14" checked disabled="disabled"/><label>seat14</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B12"/><label>seat12</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B10"/><label>seat10</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="B08"/><label>seat08</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B06"/><label>seat06</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B04"/><label>seat04</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="B01"/><label>seat01</label></div>
</div>
<div class="row">
    <div class="col"><input type="checkbox" name="seat[]" value="B21"/><label>seat21</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="B19"/><label>seat19</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="B17"/><label>seat17</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="B15"checked disabled="disabled"/><label>seat15</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="B13"/><label>seat13</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B11"/><label>seat11</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B09"/><label>seat09</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="B07"/><label>seat07</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B05"/><label>seat05</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B03"/><label>seat03</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="B02"checked disabled="disabled"/><label>seat02</label></div>
</div>

<div class="row">
 <label>B:Executive Air-Conditioned chair car</label>
</div>
</div>
<div class="row">

    
  <div class="col"><input type="checkbox" name="seat[]" value="B23" checked disabled="disabled"/><label>seat23</label></div>
  <div class="col"><input type="checkbox" name="seat[]"value="B26"/><label>seat26</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="B28"/><label>seat28</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="B30"/><label>seat30</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B32"/><label>seat32</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B34"/><label>seat34</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B36" checked disabled="disabled"/><label>seat36</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="B38"/><label>seat38</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B40"/><label>seat40</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B42"/><label>seat42</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="B44"/><label>seat44</label></div>
</div>
<div class="row">
    <div class="col"><input type="checkbox" name="seat[]" value="B24"/><label>seat24</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="B25"/><label>seat25</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="B27" checked disabled="disabled"/><label>seat27</label></div>
    <div class="col"><input type="checkbox" name="seat[]"value="B29"/><label>seat29</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="B31"/><label>seat31</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B33"/><label>seat33</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B35"/><label>seat35</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="B37"/><label>seat37</label></div>
 <div class="col"><input type="checkbox" name="seat[]"value="B39"/><label>seat39</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="B41" checked disabled="disabled"/><label>seat41</label></div>
<div class="col"><input type="checkbox" name="seat[]"value="B43"/><label>seat43</label></div><b>Door</b>
</div>
</center>

<br>
<center>
<div class="row">

  <div class="col"><input type="checkbox" name="seat[]" value="C22"/><label>seat22</label></div><b>Door</b>
  <div class="col"><input type="checkbox" name="seat[]" value="C20" checked disabled="disabled"/><label>seat20</label></div>
  <div class="col"><input type="checkbox" name="seat[]"value="C18"/><label>seat18</label></div>
  <div class="col"><input type="checkbox" name="seat[]"value="C16"/><label>seat16</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C14" checked disabled="disabled"/><label>seat14</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C12"/><label>seat12</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C10"/><label>seat10</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="C08"/><label>seat08</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C06"/><label>seat06</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C04"/><label>seat04</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="C01"/><label>seat01</label></div>
</div>
<div class="row">
    <div class="col"><input type="checkbox" name="seat[]" value="C21"/><label>seat21</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="C19"/><label>seat19</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="C17"/><label>seat17</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="C15" checked disabled="disabled"/><label>seat15</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="C13"/><label>seat13</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C11"/><label>seat11</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C09"/><label>seat09</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="C07"/><label>seat07</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C05"/><label>seat05</label></div>
 <div class="col"><input type="checkbox" name="seat[]"value="C03"/><label>seat03</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="C02"/><label>seat02</label></div>
</div>

<div class="row">
 <label>C:Air-conditioned-Class</label>
</div>
</div>
<div class="row">

    
  <div class="col"><input type="checkbox" name="seat[]" value="C23" checked disabled="disabled"/><label>seat23</label></div>
  <div class="col"><input type="checkbox" name="seat[]"value="C26"/><label>seat26</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="C28" checked disabled="disabled"/><label>seat28</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="C30"/><label>seat30</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C32"/><label>seat32</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C34"/><label>seat34</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C36"/><label>seat36</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="C38"/><label>seat38</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C40"/><label>seat40</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C42"/><label>seat42</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="C44"/><label>seat44</label></div>
</div>
<div class="row">
    <div class="col"><input type="checkbox" name="seat[]" value="C24"/><label>seat24</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="c25"/><label>seat25</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="C27" checked disabled="disabled"/><label>seat27</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="C29"/><label>seat29</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="C31"/><label>seat31</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C33"/><label>seat33</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C35"/><label>seat35</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="C37"/><label>seat37</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C39"/><label>seat39</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="C41" checked disabled="disabled"/><label>seat41</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="C43"/><label>seat43</label></div><b>Door</b>
</div>
</center>
<br>

<center>
<div class="row">

  <div class="col"><input type="checkbox" name="seat[]" value="D22"/><label>seat22</label></div><b>Door</b>
  <div class="col"><input type="checkbox" name="seat[]" value="D20" checked disabled="disabled"/><label>seat20</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="D18"/><label>seat18</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="D16"/><label>seat16</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D14" checked disabled="disabled"/><label>seat14</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D12"/><label>seat12</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D10"/><label>seat10</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="D08"/><label>seat08</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D06"/><label>seat06</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D04"/><label>seat04</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="D01"/><label>seat01</label></div>
</div>
<div class="row">
    <div class="col"><input type="checkbox" name="seat[]" value="D21"/><label>seat21</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="D19"/><label>seat19</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="D17"/><label>seat17</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="D15"/><label>seat15</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="D13" checked disabled="disabled"/><label>seat13</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D11"/><label>seat11</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D09"/><label>seat09</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="D07"/><label>seat07</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D05"/><label>seat05</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D03"/><label>seat03</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="D02"/><label>seat02</label></div>
</div>

<div class="row">
 <label>D:Sleeper Class</label>
</div>
</div>
<div class="row">

    
  <div class="col"><input type="checkbox" name="seat[]" value="D23"/><label>seat23</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="D26" checked disabled="disabled"/><label>seat26</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="D28"/><label>seat28</label></div>
  <div class="col"><input type="checkbox" name="seat[]" value="D30"/><label>seat30</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D32"/><label>seat32</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D34" checked disabled="disabled"/><label>seat34</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D36"/><label>seat36</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="D38"/><label>seat38</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D40"/><label>seat40</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D42"/><label>seat42</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="D44"/><label>seat44</label></div>
</div>
<div class="row">
    <div class="col"><input type="checkbox" name="seat[]" value="D24" checked disabled="disabled"/><label>seat24</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="D25"/><label>seat25</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="D27"/><label>seat27</label></div>
    <div class="col"><input type="checkbox" name="seat[]" value="D29"/><label>seat29</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="D31" checked disabled="disabled"/><label>seat31</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D33"/><label>seat33</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D35"/><label>seat35</label></div> 
<div class="col"><input type="checkbox" name="seat[]" value="D37"/><label>seat37</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D39"/><label>seat39</label></div>
 <div class="col"><input type="checkbox" name="seat[]" value="D41"/><label>seat41</label></div>
<div class="col"><input type="checkbox" name="seat[]" value="D43"/><label>seat43</label></div><b>Door</b>
</div>
</center>
<br>

<center>
<div class="row">

  <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat41</label></div><b>Door</b>
  <div class="col"><input type="checkbox" name="seat[]"  disabled="disabled"/><label>seat37</label></div>
  <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat33</label></div>
  <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat29</label></div>
 <div class="col"><input type="checkbox"  name="seat[]" disabled="disabled"/><label>seat25</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat21</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat17</label></div> 
<div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat13</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat09</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat05</label></div>
<div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat01</label></div>
</div>
<div class="row">
    <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat42</label></div>
    <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat38</label></div>
    <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat34</label></div>
    <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat30</label></div>
<div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat26</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat22</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat18</label></div> 
<div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat14</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat10</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat06</label></div>
<div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat02</label></div>
</div>

<div class="row">
 <label>E:Unreserverd Class</label>
</div>
</div>
<div class="row">

    
  <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat44</label></div>
  <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat39</label></div>
  <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat35</label></div>
  <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat31</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat27</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat23</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat19</label></div> 
<div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat15</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat11</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat07</label></div>
<div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat03</label></div>
</div>
<div class="row">
    <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat45</label></div>
    <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat40</label></div>
    <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat36</label></div>
    <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat32</label></div>
<div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat28</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat24</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat20</label></div> 
<div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat16</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat12</label></div>
 <div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat08</label></div>
<div class="col"><input type="checkbox" name="seat[]" disabled="disabled"/><label>seat04</label></div><b>Door</b>
</div>
</center>
<br>
<br><br>
<center>
<fieldset><input type="submit" value="submit"></fieldset>
</center>
</fieldset></form></body>
</html>


<?php
$_SESSION['leaving_from']=$leaving;
$_SESSION['going_to']=$going;
?>
