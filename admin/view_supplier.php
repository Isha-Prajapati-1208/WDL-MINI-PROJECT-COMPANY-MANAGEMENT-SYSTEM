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
 <h1 class="text-warning text-center" > Suppliers </h1>
 <br>
<br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered" style="color: white;">
 
 <tr class="bg-dark text-white text-center">
 
 <th> ID </th>
 <th> First Name </th>
 <th> Last Name </th>
 <th> Email </th>
 <th> DOB </th>
 <th> Gender </th>
 <th> Contact Number </th>
 <th> Address </th>
 <th> Department </th>
 <th> Degree </th>
 <th> Salary </th>
 <th> Date Of Joining </th>
 <th> Aadhar Card Number </th>
 <th> Marital Status </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'dbconnect.php'; 
 $con = OpenCon();
 $q = "select * from info where department ='Supplier' ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['firstname'];  ?> </td>
 <td> <?php echo $res['lastname'];  ?> </td>
 <td> <?php echo $res['emailid'];  ?> </td>
 <td> <?php echo $res['date_of_birth'];  ?> </td>
 <td> <?php echo $res['gender'];  ?> </td>
 <td> <?php echo $res['contact_number'];  ?> </td>
 <td> <?php echo $res['address'];  ?> </td>
 <td> <?php echo $res['department'];  ?> </td>
 <td> <?php echo $res['degree'];  ?> </td>
 <td> <?php echo $res['salary'];  ?> </td>
 <td> <?php echo $res['date_of_joining'];  ?> </td>
 <td> <?php echo $res['aadhar_card_number'];  ?> </td>
 <td> <?php echo $res['martial_status'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

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