<?php

include 'dbconnect.php';
$con = OpenCon();
$id = $_GET['id'];

$q = "DELETE FROM `client_info` WHERE id = $id ";

mysqli_query($con, $q);

echo "<script type='text/javascript'>
alert('Record successfully deleted');";
echo'window.location= "view_client.php"';
echo "</script>";

?>