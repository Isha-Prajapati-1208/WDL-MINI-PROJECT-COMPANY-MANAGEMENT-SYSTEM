<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbase = "company_management_system";


$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbase);

if ($db === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>