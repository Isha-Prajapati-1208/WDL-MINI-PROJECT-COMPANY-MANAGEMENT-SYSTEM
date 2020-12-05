<?php
include 'dbconnect.php';
$con = OpenCon();
session_start();
if($_SESSION['login'] != "admin"){
    header('location:../index.php');
}
$id = $_GET['id'];
 $sql = "SELECT * FROM `client_info` WHERE id = '$id'";

//echo "$sql";
$result = mysqli_query($con, $sql);
while($res = mysqli_fetch_assoc($result)){
	$firstname = $res['firstname'];
	$lastname = $res['lastname'];
	$email = $res['emailid'];
	
	$contact = $res['contact_number'];
	$company = $res['company'];
	$product = $res['product'];
	$product_description = $res['product_description'];
	
}
if(isset($_POST['done']))
{

 $id = $_GET['id'];
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $emailid = $_POST['emailid'];
 
 $contact_number = $_POST['contact_number'];
 $company = $_POST['company'];
 $product = $_POST['product'];
 $product_description = $_POST['product_description'];

$query = mysqli_query($con, "UPDATE `client_info` SET `firstname`='$firstname',`lastname`='$lastname',`emailid`='$emailid',`contact_number`='$contact_number',`company`='$company',`product`='$product',`product_description`='$product_description' WHERE id=$id");
	
if($query){

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='view_client.php';
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
 
 
 <label> Contact number: </label>
 <input type="numeric" name="contact_number" class="form-control" required value="<?php echo $contact;?>"> <br>
 
 <label> Company: </label>
 <input type="text" name="company" class="form-control" required value="<?php echo $company;?>"> <br>
 
 <label> Product: </label>
 <input type="text" name="product" class="form-control" required value="<?php echo $product;?>"> <br>
 
 <label> Product Description: </label>
 <input type="text" name="product_description" class="form-control" required value="<?php echo $product_description;?>"> <br>
 
 
 <button class="btn btn-success" type="submit" name="done" style="background-color: #fed136; color:black;"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>