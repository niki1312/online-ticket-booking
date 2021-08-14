
<html><head>
<link rel="stylesheet"  href="css/signin1.css">
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
</script>
</head><body><center>
<font color="#800080"><?php include "header.php";?></center></font>
<div class="box">
 <h2>SIGN IN</h2>
<form action="" method="post">

<div class="inputBox">
    <input type="text" name="email" id="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
<label>Email Id:</label>
</div>

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

<input type="submit" value="Signin" name="submit"><br /> <br /> <br />
<a href="login.php">Back To Login</a>
</form>
</div>
</body>
</html>


<?php
if(isset($_POST['submit'])){
include "config.php";
$email=$_POST['email'];
$uname=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['confirm_password'];
$sql = "insert into user(EmailId,username,password,cpassword)VALUES('$email','$uname','$password','$cpassword')";
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
