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
   $id=$_GET['updateid'];
   $sql="select * from form where id=$id";
   $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_assoc($result);
   
                        $fname=$row['firstname'];
                        $lname=$row['secondname'];
                        $email=$row['email'];
                        $phone=$row['phone'];
                        $dob=$row['dateofbirth'];
                        $nationality=$row['nationality'];
                        $gender=$row['gender'];
                        $transport=$row['transport'];
                        $vehicle=$row['vehicle'];
                        $border=$row['border'];
                        $cv=$row['cv']; 
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $transport = $_POST['transport'];
    $vehicle = $_POST['vehicle'];
    $border = $_POST['border'];
    $cv = $_POST['cv'];

    $query = " update form set id=$id,firstname='$fname',secondname='$lname',email='$email',phone='$phone',dateofbirth='$dob',nationality='$nationality',gender='$gender',transport='$transport',vehicle='$vehicle',border='$border',cv='$cv' where id=$id"; 


    $result = mysqli_query($con, $query);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    }
    
    header('location:usercontrol.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="update.css">

    <title>update</title>
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
                <a href="#">
                    <i class='bx bxs-group' ></i>
                    <span class="text">update</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="attention.php" class="logout">
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
                <span class="num"><?php  
                       $dash_business_query ="select * from contact";
                       $dash_business_query_run = mysqli_query($con,$dash_business_query);
                       if ($business_total = mysqli_num_rows($dash_business_query_run)) {
                        echo '<h3> '.$business_total.'</h3>';

                       }

                      else{
                        echo '<h3>no data<h3>';
                      }
                        ?></span>
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
      <input type="text"  name="fname" placeholder="enter the first name" value=<?php echo $fname;?> required>

      <label >Second name:</label>
      <input type="text"  name="lname" placeholder="enter the second name" value=<?php echo $lname;?> required>

 <label >Email:</label>
      <input type="email"  name="email" placeholder="enter your email" value=<?php echo $email;?> required>
<label >Phone:</label>
      <input type="number"  name="phone" placeholder="enter your telephone" value=<?php echo $phone;?> required>
      <label >Date of birth:</label>
      <input type="Date"  name="dob" placeholder="enter your date of birth" value=<?php echo $dob;?> required> 
     <label >Nationality:</label>
      <input type="text"  name="nationality" placeholder="Your the name of your country" value=<?php echo $nationality;?> required>
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
            <input type="submit" name="submit" value="update">
            </div>
    </form></center>
  

           
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    

    <script src="dashboard.js"></script>
</body>
</html>