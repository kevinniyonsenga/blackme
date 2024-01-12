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
              VALUES ('$fname', '$lname', '$email', '$password','$phone','$dob', '$nationality','$gender', '$transport', '$vehicle', '$border', '$cv')";

    $result = mysqli_query($con, $query);
    if (!$result) {
        ;
    }
    
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="adduser.css">

    <title>AdminHub</title>
</head>
<body>
<i class='bx bxs-universal-access'></i>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">AdminHub</span>
        </a>
        <ul class="side-menu top">
            <li >
                <a href="dashboard.php">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="border.php">
                 <i class='bx bxs-no-entry'></i>
                    <span class="text">border control</span>
                </a>
            </li>
            <li>
                <a href="usercontrol.php">
                    <i class='bx bxs-contact'></i>
                    <span class="text">user control</span>
                </a>
            </li>
            <li>
                <a href="message.php">
                    <i class='bx bxs-message-dots' ></i>
                    <span class="text">Message</span>
                </a>
            </li>
            <li class="active">
                <a href="adduser.php">
                    <i class='bx bxs-group' ></i>
                    <span class="text">add user</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog' ></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell' ></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="PIC/logo.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            
   <center> <h2>Fill the following form:</h2>
    <form action="" method="POST">
      <label >First name:</label>
      <input type="text"  name="fname" placeholder="enter the first name" required>

      <label >Second name:</label>
      <input type="text"  name="lname" placeholder="enter the second name" required>

 <label >Email:</label>
      <input type="email"  name="email" placeholder="enter your email" required>
      <label >password:</label>
      <input type="password"  name="password" placeholder="create your password" required>
<label >Phone:</label>
      <input type="number"  name="phone" placeholder="enter your telephone" required>
      <label >Date of birth:</label>
      <input type="Date"  name="dob" placeholder="enter your date of birth" required> 
     <label >Nationality:</label>
      <input type="text"  name="nationality" placeholder="Your the name of your country" required>
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
<input type="file" name="cv"><div class="bu">
            <input type="submit" name="submit" value="submit">
            <input type="button" name="resert" value="resert" ></div>
    </form></center>
  

           
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    

    <script src="dashboard.js"></script>
</body>
</html>