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
 <title>Delete a Record from MySQL Database</title>

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


  
<font color="#1f618d"><h1> Enter ID which you have to deleted</h1></font>
 <form method = "post">
 <table width = "400" border = "1" cellspacing = "1"  cellpadding = "2">

  <tr>
  <td width = "100">Train ID</td>
  <td><input name = "Train_id" type ="text" id = "train_id"></td>
  </tr>
 <tr>
 <td width = "100"> </td>
 <td> </td>
 </tr>
 <tr>
 <td width = "100"> </td>
 <td>
 <input name = "delete" type = "submit" id = "delete" value = "Delete">
  </td>
  </tr>

 </table>
</form>
</fieldset></center>
 </body>
</html>

 <?php
 if(isset($_POST['delete'])) {
 include "config.php";
 $tr_id = $_POST['Train_id'];
 $sql = "delete from Train_Available where Train_id='$tr_id'" ;
  $result = mysqli_query($conn,$sql);
   if($result == true)
  {
	?>
		<script>
		    alert('Data Deleted Successfully');
		</script>
		<?php
  }
  else
{ 
  echo "not deleted";
}
}
?>
