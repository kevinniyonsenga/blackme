<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 'email' key is set in the $_POST array
    if (isset($_POST['email'])) {
        // 'email' key is set, so it's safe to access
        $email = $_POST['email'];
        // Rest of your code...
    } }
?>
<!DOCTYPE html>
<html lang="en">
<title>welcome</title>
<link rel="stylesheet" type="text/css" href="welcome.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Welcome</title>
    <script >
  function preventBack(){window.history.forward()};
  setTimeout("preventBack()",0);
  window.onunload=function(){null;}
</script>
<link rel="stylesheet" type="text/css" href="home.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
    <div class="welcome-container">
        <h1>Welcome, friend!</h1>
        <p>This is the Custom and Border Control Program.</p>
        <p>The program is designed to streamline and manage customs and border security operations. For the most accurate and up-to-date information, I recommend checking official government sources or contacting relevant authorities involved in border control.</p>
        <!-- Add more information about your program here -->
        <p>Feel free to explore the features and functionalities.</p>
       <center><a href="Logout.php">Logout</a>     <a href="pong.php">continue</a></center>
    </div>
</body>
</html>
