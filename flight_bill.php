 <?php
if(isset($_POST['submit'])) {
 include "config.php";
  $seat1=$_POST['seat'];

 $flight_id = $_POST['Flight_id'];
 $sql = "select fare from Flight_Available where flight_id='$flight_id'" ;
  $result = mysqli_query($conn,$sql);
   if($result == true)
  {
      while($row =mysqli_fetch_assoc($result))
      {
           printf("%d",$seat1*$row['fare']);
          }
  }
}
?>

