<?php

include 'dbconnect.php';
$con = OpenCon();
session_start();
if($_SESSION['login'] != "admin"){
    header('location:../index.php');
}
if(isset($_POST['done'])){
 /*$id= $_POST['id'];*/
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $emailid = $_POST['emailid'];
 
 $contact_number = $_POST['contact_number'];
 
 $company = $_POST['company'];
 $product = $_POST['product'];
 $product_description = $_POST['product_description'];

 $q = " INSERT INTO `client_info`(`firstname`, `lastname`,`emailid`,`contact_number`,`company`,`product`,`product_description`) VALUES('$firstname', '$lastname','$emailid','$contact_number','$company','$product','$product_description')";

 if(mysqli_query($con,$q)){
 echo "<script type='text/javascript'>  alert('Data inserted successfully');";
 echo'window.location= "view_client.php"';
 echo "</script>";}
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Add Client</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">
<?php include('bar.php'); ?>
<div class="col-lg-6 m-auto">
 
 <form method="post" action="#">
 
 <br><br><div class="card" style="background-color: black; color: white;">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Add Client </h1>
 </div><br>

 <label> First Name: </label>
 <input type="text" name="firstname" class="form-control" required> <br>

 <label> Last Name: </label>
 <input type="text" name="lastname" class="form-control" required> <br>
 <label> Email: </label>
 <input type="text" name="emailid" class="form-control" required> <br>
 
 <label> Contact Number: </label>
 <input type="number" name="contact_number" class="form-control" required> <br>
 
 <label> Company: </label>
 <input type="text" name="company" class="form-control" required> <br>
 
 <label> Product: </label>
 <input type="text" name="product" class="form-control" required> <br>
 
 <label> Product Description: </label>
 <input type="text" name="product_description" class="form-control" required> <br>
 
 
    <button class="btn btn-success" type="submit" name="done" style="background-color: #fed136; color: black;"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>