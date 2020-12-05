<?php
session_start();
if($_SESSION['login'] != "admin"){
    header('location:../index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Display</title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body style="background-color: black;">
<?php include('bar.php'); ?>
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Sales </h1>
 <br>
<br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered" style="color: white;">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th>Supplier Id</th>
 <th> Name </th>
 <th> Product Name </th>
 <th> Product Description </th>
 <th> Client Name </th>
 <th> Quantity </th>
 <th> Total Amount </th>
 <th> Proof </th>

 </tr >

 <?php

 include 'dbconnect.php'; 
 $con = OpenCon();
 $q = "select * from supplier  ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['supplier_id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['product'];  ?> </td>
 <td> <?php echo $res['product_desc'];  ?> </td>
 <td> <?php echo $res['client_name'];  ?> </td>
 <td> <?php echo $res['quantity'];  ?> </td>
 <td> <?php echo "Rs.".$res['amount'];  ?> </td>
 <td><a href='../supplier/<?php echo $res['proof']?>'>Proof</a></td>";

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