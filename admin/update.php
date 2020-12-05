<?php
include 'dbconnect.php';
$con = OpenCon();
session_start();
if($_SESSION['login'] != "admin"){
    header('location:../index.php');
}
$id = $_GET['id'];
 $sql = "SELECT * FROM `info` WHERE id = '$id'";

//echo "$sql";
$result = mysqli_query($con, $sql);
while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstname'];
	$lastname = $res['lastname'];
	$email = $res['emailid'];
	$date_of_birth = $res['date_of_birth'];
	$gender = $res['gender'];
	$contact = $res['contact_number'];
	$address = $res['address'];
	$department = $res['department'];
	$degree = $res['degree'];
	$salary = $res['salary'];
	$date_of_joining = $res['date_of_joining'];
	$aadhar_card_number = $res['aadhar_card_number'];
	$maritial_status = $res['martial_status'];
}
if(isset($_POST['done']))
{

 $id = $_GET['id'];
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
 

$query = mysqli_query($con, "UPDATE `info` SET `firstname`='$firstname',`lastname`='$lastname',`emailid`='$emailid',`date_of_birth`='$date_of_birth',`gender`='$gender',`contact_number`='$contact_number',`address`='$address',`department`='$department',`degree`='$degree',`salary`='$salary',`date_of_joining`='$date_of_joining',`aadhar_card_number`='$aadhar_card_number',`martial_status`='$martial_status' WHERE id=$id");
	
if($query){

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='display.php';
    </SCRIPT>");
 }
}
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
 <div class="col-lg-6 m-auto">
 
 <form method="post" >
 
 <br><br><div class="card" style="background-color: black; color: white;">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Information </h1>
 </div><br>

 <label> First name: </label>
 <input type="text" name="firstname" class="form-control" required value="<?php echo $firstname;?>"> <br>

 <label> Last name: </label>
 <input type="text" name="lastname" class="form-control" required value="<?php echo $lastname;?>"> <br>
 
 <label> Email-id: </label>
 <input type="text" name="emailid" class="form-control" required value="<?php echo $email;?>"> <br>
 
 <label>Birth date: </label>
 <input type="numeric" name="date_of_birth" class="form-control" required value="<?php echo $date_of_birth;?>"> <br>
 
 <label> Gender: </label>
 <select  name="gender"  selected class="form-control" required>
 <option value="<?php echo $gender;?>" selected><?php echo $gender;?></option>
  <option value="Female">Female</option>
  <option value="Male">Male</option>
  <option value="Others">Others</option>
  
</select><br>

 <label> Contact number: </label>
 <input type="numeric" name="contact_number" class="form-control" required value="<?php echo $contact;?>"> <br>
 
 <label> Address: </label>
 <input type="text" name="address" class="form-control" required value="<?php echo $address;?>"> <br>
 
 <label> Department: </label>
 <select  name="department"  selected class="form-control" required>
 <option value="<?php echo $department;?>" selected><?php echo $department;?></option>
  <option>Production</option>
<option>Research and Development (often abbreviated to R&D)</option>
<option>Purchasing</option>
<option>Marketing </option>
<option>Human Resource Management</option>
<option>Accounting and Finance</option>
 <option>Supplier</option> 
</select> <br>
 
 <label> Degree: </label>
 <input type="text" name="degree" class="form-control" required value="<?php echo $degree;?>"> <br>
 
 <label> Salary: </label>
 <input type="numeric" name="salary" class="form-control" required value="<?php echo $salary;?>"> <br>
 
 <label> Date of joining: </label>
 <input type="numeric" name="date_of_joining" class="form-control" required value="<?php echo $date_of_joining;?>"> <br>

 <label> Aadhar card number: </label>
 <input type="numeric" name="aadhar_card_number" class="form-control" required value="<?php echo $aadhar_card_number;?>"> <br>
 
 <label> Martial status: </label>
 <select  name="martial_status"  selected class="form-control" required>
 <option value="<?php echo $maritial_status;?>" selected><?php echo $maritial_status;?></option>
  <option value="Married">Married</option>
  <option value="Unmarried">Unmarried</option>
 </select><br>
 
 <button class="btn btn-success" type="submit" name="done" style="background-color: #fed136; color:black;"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>