<?php

include 'dbconnect.php';
$con = OpenCon();
session_start();
if($_SESSION['login'] != "admin"){
    header('location:../index.php');
}
if(isset($_POST['done'])){
 /*$id= $_POST['id'];*/
 $p = $_POST['p'];
 $cp = $_POST['cp'];
 
 

if($p == $cp){
 $q = " UPDATE `admin` SET `password`='$p'";

 if(mysqli_query($con,$q)){
 echo "<script type='text/javascript'>  alert('Password is changed');";
 echo'window.location= "reset.php"';
 echo "</script>";}

} else{
    echo "<script type='text/javascript'>  alert('Password did not match');";
 echo'window.location= "reset.php"';
 echo "</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Reset Password</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">
<?php include('bar.php'); ?>
<div class="col-lg-6 m-auto" >
 
 <form method="post" action="reset.php">
 
 <br><br><div class="card" style="background-color: black; color: white;">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">Reset Password </h1>
 </div><br>

 <label> New Password: </label>
 <input type="password" name="p" class="form-control" required> <br>

 <label> Confirm Password: </label>
 <input type="password" name="cp" class="form-control" required> <br>
 
 <br>
    <button class="btn btn-success" type="submit" name="done" style="background-color: #fed136; color: black;"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>