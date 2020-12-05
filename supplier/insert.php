<?php
include 'dbconnect.php';
session_start();
if($_SESSION['login'] != "supplier"){
    header('location:../index.php');
}
$sql1 = "select * from client_info";
$res= mysqli_query($db, $sql1);
$mysid=$_SESSION['sid'];
if(isset($_POST['done'])){
 /*$id= $_POST['id'];*/
 $name = $_POST['name'];
 $product = $_POST['product'];
 $description = $_POST['description'];
 
 $client_name = $_POST['client_name'];
 $quantity = $_POST['quantity'];
 $amount = $_POST['amount'];
 

   $proof_file_name=$_FILES["pfile"]["name"];
   $proof_file_tem_loc=$_FILES["pfile"]["tmp_name"];
    $proof_file_store="proof/".$proof_file_name;
    move_uploaded_file($proof_file_tem_loc, $proof_file_store);

 $sql = "INSERT INTO supplier(supplier_id,name,product,product_desc,client_name,quantity,amount,proof) 
         VALUES ('$mysid','$name','$product','$description','$client_name','$quantity','$amount','$proof_file_store')";
 $results = mysqli_query($db, $sql);
 if (($results) == 1) {
    echo '<script>alert("Details Inserted Successfully")</script>';
    
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

  
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Insert Details</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">
<?php include('bar.php'); ?>
<div class="col-lg-6 m-auto">
 
 <form method="post" action="insert.php" enctype="multipart/form-data">
 
 <br><br><div class="card" style="background-color: black; color: white;">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">Insert Details</h1>
 </div><br>

 <label> Name: </label>
 <input type="text" name="name" class="form-control" required> <br>

 <label> Product: </label>
 <input type="text" name="product" class="form-control" required> <br>
 
 <label> Product Description: </label>
 <input type="text" name="description" class="form-control" required> <br>
 
 <label> Quantity: </label>
 <input type="text" name="quantity" class="form-control" required> <br>
 
 <label> Client Name: </label>
 
 <select name="client_name"  class="form-control">

                                            <option value=" "></option>
                                            <?php while ($result_loc = mysqli_fetch_assoc($res)) { ?>
                                            <option value="<?php echo $result_loc['firstname']." ".$result_loc['lastname'] ?>"><?php echo $result_loc['firstname']." ".$result_loc['lastname'] ?></option>
                                            <?php   } ?>
                                            </select>

  <br>
 
 <label>Total Amount </label>
 <input type="text" name="amount" class="form-control" required>
 <br>
 <label>Proof </label>
 <input type="file" name="pfile" class="form-control" required>
  <br>
 
 <br>
    <button class="btn btn-success" type="submit" name="done" style="background-color: #fed136; color: black;"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>