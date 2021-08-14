<?php
  session_start();
  include('config.php');
?>

<html>
<head>
    <center>
          <?php
              $dfrom = $gto = $ddate = $rdate = "";
              if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $dfrom = $_POST['Make'];
                    $gto = $_POST['Make1'];
                    $ddate = $_POST['depart_date'];
                    $rdate = $_POST['return_date'];
              $sql = "select * from Train_Available";
              if (isset($_POST['search']) )
{
               $sql = "select * from Train_Available where leaving_from='$dfrom' && going_to='$gto' train_id desc";
}
              $result = mysqli_query($conn,$sql);
              $i = 0;
            ?>
 <form method="POST" action="#">
      <table border="1" style="border-collapse: collapse; width:100%;">
              <tr style="color: 008000">
                <td>Train Number</td>
                <td>Train Name</td>
                <td>depart_date</td>
                <td>time</td>
                <td>Return_Date</td>
                <td>dest time</td>
                <td>fare</td>
                <td>Show Seat</td>
              </tr>

            <?php
              while($row = mysqli_fetch_array($conn,$result)) {
               $tid = $row['train_id'];
               $_SESSION["route"] =  $row['Make'] ." - ". $row['Make1']?>              
               
                 <tr>
                 <td>
                  <?php echo $row['train_id'] ." - ". $row['Make1']?>
                 </td>
                 <td>
                  <?php echo $row['train_name'] ?>
                 </td>
                 <td>
                   <?php echo $row['depart_date'] ." - ". $row['time']?>
                 </td>
                 <td>
                   <?php echo $row['time']?>
                 </td>
                 <td>
                   <?php echo $row['return_date']?>
                 </td>
                <td>
                   <?php echo $row['dest_time']?>
                 </td>

                 <td>
                   <?php echo $row['fare']?> 
                 </td>
                 <td onclick="document.location = 'trainSeat.php?id=<?php echo urlencode($tid);?>'" style="background-color: coral; color: white; font-size: 20px; cursor:hand;">Show Seat</td>
                </tr>
          <?php
          }
        }
        else
             echo "Please Search Your Desire Info";
          ?>
          </table>
   </form>
   </center>
</body>
</html>
