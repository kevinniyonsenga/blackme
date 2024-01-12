<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the keys are set in the $_POST array
    if (isset($_POST['email']) && isset($_POST['password'])) {
        // Get the form data
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validate the username and password (you can add more validation if needed)
        if (!empty($email) && !empty($password)) {
            // Perform database query to check if the username and password exist in the "manager" table
            $servername = "localhost";
            $dbname = "register";
            $dbusername = "root";
            $dbpassword = "";

            // Create a new connection
            $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare the SQL statement
            $sql = "SELECT * FROM form
                WHERE email = '$email' AND password = '$password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // User is authenticated, redirect to the dashboard page
                header("location: welcome.php");
            }
else {
        // Invalid credentials for both
        echo "Invalid username or password. Please try again.";
    }
            // Close the database connection
            $conn->close();
        } 
    } 
}
?>
<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script >
  function preventBack(){window.history.forward()};
  setTimeout("preventBack()",0);
  window.onunload=function(){null;}
</script>
</head>
<body >

  <button class="buto animated-background" onclick="this.classList.toggle('animated-forecolor')">

  </button>
 

<div class="wrapper">
<form action="" method="POST" >
<H1> USER LOGIN </H1>
<div class="input-box">
<input type="text" name=" email" placeholder="e-mail" id="email" required>
<i class='bx bx-envelope'></i>
</div>
<div class="input-box">
<input type="password" name="password" placeholder="password" id="password" required>
<i class='bx bxs-low-vision' id="showpPassword"></i>
</div>
<div class="remember-forgot">
<label><input type="checkbox" name="checkbox" id="eye">Remember me</label>
<a href="adminl.php"># login as admin #</a>
</div>
<button type="submit" name="submit" class="btn" >LOGIN</button>
<div class="register-link"><p>if you don't have an account? <a href="new.php">register</a>

  </p>
</div>
</form>
</div>
    
</body>
</html>
