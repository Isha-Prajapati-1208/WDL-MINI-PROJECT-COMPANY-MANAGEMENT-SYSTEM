<?php
include 'dbconnect.php';

session_start();
if($_SESSION['login'] != "supplier"){
    header('location:../index.php');
}
$mysid=$_SESSION['sid'];
 $sql = "SELECT * FROM `supplier` WHERE supplier_id = '$mysid'";

//echo "$sql";
$result = mysqli_query($db, $sql);



?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">
<?php include('bar.php'); ?>
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > View Details </h1>
 <br>
 <a href="insert.php"> <button class="btn btn-success" type="submit" name="insert" style="background-color: #fed136; color: black;"> Insert Details </button></a><br>
<br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered" style="color: white;">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Name </th>
 <th> Product </th>
 <th> Product Description </th>
 <th> Client Name </th>
 <th> Quantity </th>
 <th> Amount </th>
 <th> Proof </th>
 

 </tr >

 <?php



 while($res = mysqli_fetch_array($result)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['product'];  ?> </td>
 <td> <?php echo $res['product_desc'];  ?> </td>
 <td> <?php echo $res['client_name'];  ?> </td>
 <td> <?php echo $res['quantity'];  ?> </td>
 <td> <?php echo $res['amount'];  ?> </td>
<td><a href='<?php echo $res['proof']?>'>Proof</a></td>";
 

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>