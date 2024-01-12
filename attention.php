<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="attention.css">
    <title>Logout Confirmation</title>
</head>
<body>

<div class="logout-container">
    <h1>Logout Confirmation</h1>
    <p>Are you sure you want to log out?</p>
    <a href="logout.php"><button id="confirmLogout">Yes, Logout</button></a>
    <div class="red"> <button onclick="goBack()">Cancel</button></div>
</div>
<script>
	function goBack() {
    // Use window.history to navigate back to the previous page
    window.history.back();
}
function preventBack(){window.history.forward()};
  setTimeout("preventBack()",0);
  window.onunload=function(){null;}
</script>
</body>
</html>