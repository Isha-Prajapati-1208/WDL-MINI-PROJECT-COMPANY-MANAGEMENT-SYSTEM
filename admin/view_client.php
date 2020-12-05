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
 <h1 class="text-warning text-center" > CLIENTS </h1>
 <br>
 <a href="add_client.php"> <button class="btn btn-success" type="submit" name="insert" style="background-color: #fed136; color: black;"> Insert </button></a><br>
<br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered" style="color: white;">
 
 <tr class="bg-dark text-white text-center">
 
 <th> id </th>
 <th> firstname </th>
 <th> lastname </th>
 <th> emailid </th>
 <th> contact_number </th>
 <th> company </th>
 <th> product </th>
 <th> product description </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'dbconnect.php'; 
 $con = OpenCon();
 $q = "select * from client_info ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['firstname'];  ?> </td>
 <td> <?php echo $res['lastname'];  ?> </td>
 <td> <?php echo $res['emailid'];  ?> </td>
 <td> <?php echo $res['contact_number'];  ?> </td>
 <td> <?php echo $res['company'];  ?> </td>
 <td> <?php echo $res['product'];  ?> </td>
 <td> <?php echo $res['product_description'];  ?> </td>
 
 <td> <button class="btn-danger btn"> <a href="delete_client.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update_client.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

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