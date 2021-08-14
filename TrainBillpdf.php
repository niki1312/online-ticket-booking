<?php
session_start();
include "config.php";
?>
<html>
<head>
<title>Datatables of Bill</title>

<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>
<link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet"/>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>


<script>
$(document).ready(function() {
    $('#example').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        { extend:'copy', attr: { id: 'allan' } }, 'csv', 'excel', 'pdf', 'print'
    ]
    } );
} );
</script>
</head>
<body>
<?php
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$seat=$_POST['seat'];
$fare=$_POST['fare1'];
?>
<table id="example" class="display" style="width:80%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Selected seats</th>
            <th>Total Bill</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $name?></td>
            <td><?php echo $email?></td>
            <td><?php echo $address?></td>
            <td><?php echo $city?></td>
            <td><?php echo $state?></td>
            <td><?php echo $seat?></td>
            <td><?php echo $fare?></td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
           <th>Selected seats</th>
            <th>Total Bill</th>
        </tr>
    </tfoot>
    </table>
</body>
</html>

<?php
if(isset($_POST['submit'])){
include "config.php";
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$NameOnCard=$_POST['cardname'];
$cardnumber=$_POST['cardnumber'];
$ExpMonth=$_POST['expmonth'];
$ExpYear=$_POST['expyear'];
$cvv=$_POST['cvv'];
$fare=$_POST['fare1'];

$sql = "insert into Train_booked(Name,email,address,city,state,zip,NameOnCard,CardNumber,ExpMonth,ExpYear,cvv,fare)VALUES('$name','$email','$address','$city','$state','$zip','$NameOnCard','$cardnumber','$ExpMonth','$ExpYear','$cvv','$fare')";
$query=mysqli_query($conn,$sql); 

 if($query == true)
  {
	?>
		<script>
		    alert('Your Ticket Book Successfully');
		</script>
		<?php
  }
  else
{ 
  echo "not inserted";
}
}

?>
