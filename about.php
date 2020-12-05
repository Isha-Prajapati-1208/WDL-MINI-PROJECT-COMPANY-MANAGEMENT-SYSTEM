
<html>
<title>
</title>
<head>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
<style>


</style>
</head>
<body style="background-color: black;">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
  <a class="navbar-brand" style="color: #fed136;" href="#">Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link"  href="about.php">About Us </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact Us </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" onclick="document.getElementById('id01').style.display='block'">Log In</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" onclick="document.getElementById('id02').style.display='block'">Suppliers Log In</a>
      </li>
     
    </ul>
    
  </div>
  </div>
</nav>
<header>
<div class="container">
    <div class="banner-text">
     <p style="color: #fed136; font-size: 20px;" align="justify "> Company Pvt.Ltd is a multinational company settled in Mumbai,India. Company started on: 1st July 2020. We supply all types of products that are useful for kids, youngsters, mens, womens and aged people. We provide service to every corner of the country. There is a wide selection of products , there are proper supply chain and all the delivery are done to the clients on the given time.</p>   
    
</div>
</header>
<div id="id01" class="modal">
  <center>
  <form class="modal-content animate" action="index.php" method="post">
    
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container">
      <label for="uname" >Username: </label> &nbsp  <input type="text" placeholder="Enter Username" name="username" class="input" required >
      <br><br> 
      <label for="psw">Password: </label >&nbsp &nbsp <input type="password" placeholder="Enter Password" name="password" class="input" required>
        <br><br>
      <a href="#"><button id = "btn" name="submit" type="submit">Login</button></a>
      <br> <br>
      
      <!--<button type="button" onclick="document.getElementById('id02').style.display='block'"  class="cancelbtn">Create Account</button>-->
      <!--<span><p>Forgot <a href="#" style="color:green;">Password?</a></p></span>-->
    </div>

    
  </form>
  </center>
</div>


<div id="id02" class="modal">
  <center>
  <form class="modal-content animate" action="index.php" method="post">
    
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container">
      <label for="uname" >User Email: </label> &nbsp  <input type="text" placeholder="Enter Email" name="susername" class="input" required >
      <br><br> 
      <label for="psw">Password: </label >&nbsp &nbsp <input type="password" placeholder="Enter Password" name="spassword" class="input" required>
        <br><br>
      <a href="#"><button id = "btn" name="submit" type="submit">Login</button></a>
      <br> <br>
      
      <!--<button type="button" onclick="document.getElementById('id02').style.display='block'"  class="cancelbtn">Create Account</button>-->
      <!--<span><p>Forgot <a href="#" style="color:green;">Password?</a></p></span>-->
    </div>

    
  </form>
  </center>
  
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

}
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

}
</script>
<center><h1 style="color: #fed136; background-color: black;">OUR TEAM</h1></center>
<div class="row">
  <div class="column">
    <div class="card" style="background-color: black;">
    <img src="shreya.jfif" style="width:80%; height: 400px; ">
      <h2 style= "text-align: left; color: #fed136; font-weight: bold;">SHREYA PATIL</h2>
      
    </div>
  </div>

  <div class="column">
    <div class="card" style="background-color: black;">
   
    <img src="isha.jpg" style="width:85%; height: 400px; ">
      <h2 style= "text-align: left; color: #fed136; font-weight: bold;">ISHA PRAJAPATI</h2>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card" style="background-color: black;">
    
    <img src="vrunda.jfif" style="width: 70%; height: 400px; ">
      <h2 style= " text-align: left; color: #fed136; font-weight: bold;">VRUNDA PATEL</h2>
      
    </div>
  </div>
  
  
</div>

<style>
.column {
  float: left;
  width: 33.33%;
  padding: 0 10px;
  background-color: black;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px; background-color: black;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  background-color: black;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</body>
</html>
