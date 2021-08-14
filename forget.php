<?php
session_start();
?>
<head>
<link rel="stylesheet"  href="css/forget.css">
<script>
 var check = function() {
      if (document.getElementById('password').value ==
          document.getElementById('confirm_password').value) {
          document.getElementById('message').style.color = 'green';
          document.getElementById('message').innerHTML = 'matching';
      } else {
      		document.getElementById('message').style.color = 'red';
          document.getElementById('message').innerHTML = 'not matching';
      }
  }
</script></head>
<body><center>
<font color="#008000"><?php include "header.php";?></center></font>
<div class="box">
 <h2>Login</h2>
<form action="" method="post">
<div class="inputBox">
<input type="text" name="username" id="username" />
<label>username :</label>
</div>

<div class="inputBox">
    <input name="password" id="password" type="password" onkeyup='check();' />
<label>password :</label>
</div>

<div class="inputBox">
    <input type="password" name="confirm_password" id="confirm_password"  onkeyup='check();' /> 
    <span id='message'></span>
<label>confirm password:</label>
</div>

<input type="submit" value="submit" name="submit"><br /> <br /> <br />
<a href="login.php">Back To Login</a>
</form>
</div>
</body>
</html>





<?php
if(isset($_POST['submit']))
{
include("config.php"); 
$user=$_POST['username'];
$psw=$_POST['password'];
$cpassword=$_POST['confirm_password'];
$sql="update user SET cpassword='$cpassword',password='$psw' where username='$user'";
$result =mysqli_query($conn,$sql);
if($result == true)
{?>
<script>
   alert('Data Updated Successfully');
</script>
<?php
 }
  else
{
  echo "not updated";
}
}
 ?>

