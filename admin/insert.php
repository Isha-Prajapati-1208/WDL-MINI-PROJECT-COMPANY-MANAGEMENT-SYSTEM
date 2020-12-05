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
 $date_of_birth = $_POST['date_of_birth'];
 $gender = $_POST['gender'];
 $contact_number = $_POST['contact_number'];
 $address = $_POST['address'];
 $department = $_POST['department'];
 $degree = $_POST['degree'];
 $salary = $_POST['salary'];
 $date_of_joining = $_POST['date_of_joining'];
 $aadhar_card_number = $_POST['aadhar_card_number'];
 $martial_status = $_POST['martial_status'];

 $q = " INSERT INTO `info`(`firstname`, `lastname`,`emailid`,`date_of_birth`,`gender`,`contact_number`,`address`,`department`,`degree`,`salary`,`date_of_joining`,`aadhar_card_number`,`martial_status`) VALUES('$firstname', '$lastname','$emailid','$date_of_birth','$gender','$contact_number','$address','$department','$degree','$salary','$date_of_joining','$aadhar_card_number','$martial_status')";

 if(mysqli_query($con,$q)){
 echo "<script type='text/javascript'>  alert('Data inserted successfully');";
 echo'window.location= "display.php"';
 echo "</script>";}
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Add Employee</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">
<?php include('bar.php'); ?>
<div class="col-lg-6 m-auto" >
 
 <form method="post" action="insert.php">
 
 <br><br><div class="card" style="background-color: black; color: white;">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Add Employee </h1>
 </div><br>

 <label> First name: </label>
 <input type="text" name="firstname" class="form-control" required> <br>

 <label> Last name: </label>
 <input type="text" name="lastname" class="form-control" required> <br>
 
 <label> Email-id: </label>
 <input type="email" name="emailid" class="form-control" required> <br>
 
 <label>Birth date: </label>
 <input type="date" name="date_of_birth" class="form-control" required> <br>
 
 <label> Gender: </label>
 <select  name="gender" value="" selected class="form-control" required>
  <option value="" selected></option>
  <option value="Female">Female</option>
  <option value="Male">Male</option>
  <option value="Others">Others</option>
  
</select><br>
 
 <label> Contact number: </label>
 <input type="number" name="contact_number" class="form-control" required> <br>
 
 <label> Address: </label>
 <input type="text" name="address" class="form-control" required> <br>
 
 <label> Department: </label>
 <!--<input type="text" name="department" class="form-control" required>-->
<select class="form-control" name="department" required>
<option selected>--Select--</option>
<option>Production</option>
<option>Research and Development (often abbreviated to R&D)</option>
<option>Purchasing</option>
<option>Marketing </option>
<option>Human Resource Management</option>
<option>Accounting and Finance</option>
<option>Supplier</option>
</select>
 <br>
 
 <label> Degree: </label>
 <input type="text" name="degree" class="form-control" required> <br>
 
 <label> Salary: </label>
 <input type="number" name="salary" class="form-control" required> <br>
 
 <label> Date of joining: </label>
 <input type="date" name="date_of_joining" class="form-control" required> <br>

 <label> Aadhar card number: </label>
 <input type="number" name="aadhar_card_number" class="form-control" required> <br>
 
 
 <label> Martial status: </label>
 <select  name="martial_status"  selected class="form-control" required>
 <option value="" selected></option>
  <option value="Married">Married</option>
  <option value="Unmarried">Unmarried</option>
 </select><br>
    <button class="btn btn-success" type="submit" name="done" style="background-color: #fed136; color: black;"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>