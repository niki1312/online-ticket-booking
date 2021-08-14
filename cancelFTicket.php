<html>
   <head>
      <title>Delete a Record from MySQL Database</title>
   </head>
   <body><fieldset>
 <form method = "post"><center>
<font color= '#1f618d'><h1>Ticket Cancellation Page</h1><br></font>

 <form method = "post">
 <table width = "400" border = "1" cellspacing = "1"  cellpadding = "2">

  <tr>
  <td width = "100">Enter Your Name</td>
  <td><input name = "name" type ="text" id = "name"></td>
  </tr>
 <tr>
 <td width = "100"> </td>
 <td> </td>
 </tr>
 <tr>
 <td width = "100"> </td>
 <td>
 <input name = "delete" type = "submit" id = "delete" value = "Cancel">
  </td>
  </tr>

 </table></fieldset>
</form>
 </body>
</html>

 <?php
 if(isset($_POST['delete'])) {
 include "config.php";
 $name = $_POST['name'];
 
 $sql = "delete from Flight_booked where Name='$name'" ;
  $result = mysqli_query($conn,$sql);
   if($result == true)
  {
	?>
		<script>
		    alert('Your Booking Cancel Successfully!!!');
		</script>
		<?php
  }

  else  {
  echo "not deleted";
}
}
?>
