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
<body>

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
        <a class="nav-link" href="about.php">About Us </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link"  href="contact.php">Contact Us </a>
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
     <p style="color: #fed136; font-size: 20px;" align="justify "> E-mail: contact@company.com<br>
Contact No.: 0265479877</p>    
</div>

</header>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.429316804005!2d72.91444451485556!3d19.35055478693096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a56dd564fc65%3A0xdedc6f62731ee7eb!2sUniversal%20College%20of%20Engineering%20Mumbai!5e0!3m2!1sen!2sin!4v1607159351202!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

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
</body>
</html>
