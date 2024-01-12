<!DOCTYPE html>
<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "register";

$con = mysqli_connect($server, $user, $password, $db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $transport = $_POST['transport'];
    $vehicle = $_POST['vehicle'];
    $border = $_POST['border'];
    $cv = $_POST['cv'];

    $query = "INSERT INTO form(firstname, secondname, email, password, phone, dateofbirth, nationality,gender, transport, vehicle, border, cv) 
              VALUES ('$fname', '$lname', '$email', '$password', '$phone','$dob', '$nationality','$gender', '$transport', '$vehicle', '$border', '$cv')";

    $result = mysqli_query($con, $query);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    }
    header("Location: login.php");
   exit;
}

?><script>
const currentTime = new Date().getHours();
let greeting;
if (currentTime >0 && currentTime<12) {
    greeting="Good morning! dear welcome, first register";
} else if (currentTime < 17) {
    greeting="Good afternoon! dear welcome, first register";
} else {
    greeting="Good evening! dear welcome, first register";
}
window.onload = function() {
  alert(greeting);
};
</script>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="new.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<style>
    label{
        color: black;
    }
</style>
<body>
  <header class="headers">
    <h4>RWANDA BORDER AND CUSTOM CONTROLL</h4>
        <input type="search" name="search" placeholder="search" autocomplete="yes">
        <a href="https://www.youtube.com">
            <i class="fa-solid fa-magnifying-glass"></i></a>
        <div class="href">
    <a href="login.php">login as user</a>
<a href="adminl.php">login as admin</a>
<img src="PIC/logo.png" alt="logo"  width="90" height="70">
    </div></div></div>
  </header>

  <section class="form-section">
   <center> <h2>Fill the following form:</h2>
    <form action="" method="POST">
      <label >First name:</label>
      <input type="text"  name="fname" placeholder="enter the first name" required>

      <label >Second name:</label>
      <input type="text"  name="lname" placeholder="enter the second name" required>

 <label >Email:</label>
      <input type="email"  name="email" placeholder="enter your email" required>
       <label >password:</label>
      <input type="password"  name="password" placeholder="enter your password" required>
<label >Phone:</label>
      <input type="number"  name="phone" placeholder="enter your telephone" required>
      <label >Date of birth:</label>
      <input type="Date"  name="dob" placeholder="enter your date of birth" required> 
     <label >Nationality:</label>
      <input type="text"  name="nationality" placeholder="enter the name of your country" required>
     <label >Sex:</label>
<select name="gender">
    <option value="male">male</option>
    <option value="female">female</option>
    <option value="better not to say">better not to say</option>
</select>
      <label >Transport way:</label>
 <select name="transport">
    <option value="land transport">land transport</option>
    <option value="water transport">water transport</option>
    <option value="air transport">air transport</option>
</select>
      <label >Vehicle:</label>
      <select name="vehicle">
    <option value="long car">long car</option>
    <option value="normal car">normal car</option>
    <option value="airplane">airplane</option>
<option value="boat">boat</option>
</select>
       <label >Border:</label>
<select name="border">
    <option value="Gatuna">Gatuna</option>
    <option value="Rusumo">Rusumo</option>
    <option value="kagitumba">Kagitumba</option>
</select>
      <label >upload your C.V:</label>
<input type="file" name="cv" style="background-color: whitesmoke;"><div class="bu" >
            <input type="submit" name="submit" value="submit" style="background-color: greenyellow;">
            <input type="submit" name="resert" value="resert" style="background-color: greenyellow;" size="200px"></div>
    </form></center>
  </section>
  <br><br><br><br>
  <footer class="footer">
    <div class="container">
    <div class="row">
<div class="footer-col">
             <h4>company</h4>
    <ul>
<li><a href="#">about us</a></li>
<li><a href="#">our services</a></li>
<li><a href="#">privacy policy</a></li>

    </ul>
    </div>
    <div class="footer-col">
          <h4>get help</h4>
    <ul>
<li><a href="#">FAQ</a></li>
<li><a href="#">contact us</a></li>
<li><a href="#">payment option</a></li>
    </ul>
    </div>
    <div class="footer-col">
       <h4>border security</h4>
    <ul>
<li><a href="#">security controll</a></li>
<li><a href="#">trade</a></li>
<li><a href="#">travel</a></li>
    </ul>
    </div>
<div class="footer-col">
                          <h4>follow us</h4>
    <div class="social-links">
    <ul>
    <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></a></i>
    <a href="https://www.twitter.com"><i class="fab fa-twitter"></a></i>
    <a href="www.youtube.com/@meinkamp"><i class="fab fa-instagram"></a></i>
    <a href="#"><i class="fab fa-youtube"> 
    </i></a>
    </div>
<div class="footer-col">
    <div class="contact">
      <h4>location</h4>
      <ul>
        <li><i class="fa fa-home" aria-hidden="true"></i>
<a href="https://www.google.com/maps/place/Rwanda-Tanzania+Border+Post">Magerwa warehouse B, KK 6 Avenue, Kigali
        </a></li>
    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="call.com">
0782421304</a></li>
    <li><i class="fa fa-envelope" aria-hidden="true"></i>
    <a href="https://www.gmail.com">bushugukevin02@gmail.com</a></li>
    </ul></div></div></div>
</footer>
</body>
</html>