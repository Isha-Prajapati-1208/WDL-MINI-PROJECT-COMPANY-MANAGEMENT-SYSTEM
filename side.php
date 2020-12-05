<?php
session_start();
include 'dbconnect.php';

if($_SESSION['login'] != "admin"){
    header('location:index.php');
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #fed136;
  
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  
}
.sidebar .closebtn:hover{
  color:white;
}
.openbtn {
  font-size: 20px;
  cursor: pointer;
  
  background-color: #111;
  color: #fed136;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #fed136;
  color:black;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <br>
  <a href="#">Add Employee</a>
  <br>
  <a href="#">View Employee</a>
  <br>
  <a href="#">Add Client</a>
  <br>
  <a href="#">View Client</a>
  <br>
  <a href="#">Add Supplier</a>
  <br>
  <a href="#">View Supplier</a>
  <br>
  <a href="#">Total no. of sales</a>
  <br>
  <a href="#">Add Branch</a>
  <br>
  <a href="admin_logout.php">Log Out</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Dashboard</button>  
  <h2>ADMIN</h2>
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 
