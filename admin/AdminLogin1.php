<?php
session_start();
include("config.php");
?>

<link rel="stylesheet"  href="AdminLogin.css">
<body><center>
<?php include "header.php";?></center>
<div class="box">
 <h2>Login</h2>
<form action="" method="post">
<div class="inputBox">
<input type="text" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required=""/>
 <label>Username</label>
	 </div>
	  <div class="inputBox">
<input type="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required=""/>
<label>Password</label>
		</div>
		<div>
		 <label class="checkbox">
                  <span class="pull-right">
                  <a data-toggle="modal" href="forget.php"> Forgot Password?</a>
                  </span>
                  </label>
				<br/>
	 </div>
	 <input type="submit" name="submit" value="login">
	<br/>
	 <div class="registration">
                     Don't have an account yet?<br/>
                     <a class="" href="register.html">
                     Create an account
                     </a>
                  </div><br/>

</form>
</div>

 <?php



 if(isset($_POST['submit']))
 {
	 $user=$_POST['username'];
	 $psw=$_POST['password'];
	 $query="select * from student where username='$user' && password='$psw'";
	 $data=mysqli_query($conn,$query);
	 $total=mysqli_num_rows($data);
	 if($total==1)
	 {
         $_SESSION['user_name']=$user;
		 header('location:home.php');
	 }
	 else
	 {
                echo "<script type='text/javascript'>alert('Login failed....');</script>";
	 }

 }


 ?>
