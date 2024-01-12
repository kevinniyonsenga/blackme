<!DOCTYPE html>
<html>
<head lang="en-us">
	<title>admin log in </title>
	<link rel="stylesheet" type="text/css" href="adminl.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<div class="wrapper">
<form action="">
<H1>ADMIN LOGIN </H1>
<div class="input-box">
<input type="text" name=" tel" placeholder="e-mail" id="email" required>
<i class='bx bx-envelope'></i>
</div>
<div class="input-box">
<input type="password" name="password" placeholder="password" id="password" required>
<i class='bx bx-search-alt-2'></i>
</div>
<div class="remember-forgot">
<label><input type="checkbox" name="checkbox">Remember me</label>
<a href="login.php"># login as user #</a>
</div>
<button type="submit" name="button" class="btn" onclick="auth()">LOGIN</button>
</form>
</div>
<script>

	function auth(){
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;
      if (email =="bushugukevin02@gmail.com" && password =="123") {
      	alert("login successfull");
      	window.open("dashboard.php");
      }
 else{
 	alert("not successfull");
 return;	
 }
 
	}


</script>
</body>
</html>