<?php

require_once('form.php');
$query = "select * from form";
$result = mysqli_query($con,$query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="Dashboard.css">

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
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li >
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
		         <li>
                <a href="adduser.php">
                    <i class='bx bxs-group' ></i>
                    <span class="text">add user</span>
                </a>
            </li>
		</ul>
		<ul class="side-menu">
			</li>
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
			<form action="#" method="POST">
				<div class="form-input">
					<input type="search" placeholder="Search..." name="search">
					<button type="submit" name="submit" class="btn btn-search"><i class='bx bx-search' >
					</i></button>
				</div>

				<table class="table" style="margin-right: 30px;">
					<?php
if (isset($_POST['submit'])) {
	$search=$_POST['search'];

	$sql="Select * From form Where id='$search' or firstname='$search' or secondname='$search'";
	$result=mysqli_query($con,$sql);
	if($result){
		if(mysqli_num_rows($result)>0){
echo '<thead>
<tr>
<th>id</th>
<th>firstname</th>
<th>secondname</th>
</tr>
</thead>';
$row=mysqli_fetch_assoc($result);
echo'
<tbody>
<tr>
<td>'.$row['id'].'</td>
<td>'.$row['firstname'].'</td>
<td>'.$row['secondname'].'</td>
</tr>
</tbody>'
 ;
		}
		else{
			echo '<h3> not found</h3>';
		}
	}
}
					?>
				</table>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="message.php" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">	<?php  
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
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="pong.php">Home</a>
						</li>
					</ul>
				</div>
				<a href="cv.pdf" Download class="btn btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
			
				<li>
					<a href="usercontrol.php"><i class='bx bxs-user'></i></a>
					<span class="text">
							<?php  
                       $dash_business_query ="select * from form";
                       $dash_business_query_run = mysqli_query($con,$dash_business_query);
                       if ($business_total = mysqli_num_rows($dash_business_query_run)) {
                       	echo '<h3> '.$business_total.' users </h3>';

                       }

                      else{
                      	echo '<h3>no data<h3>';
                      }
						?>
						<a href="usercontrol.php"><p>total users</p></a>
					</span>
				</li>
				<li>
					<a href="customs.php"><i class='bx bxs-dollar-circle' ></i></a>
					<span class="text">
						<?php  
                       $dash_business_query ="select * from custom";
                       $dash_business_query_run = mysqli_query($con,$dash_business_query);
                       if ($business_total = mysqli_num_rows($dash_business_query_run)) {
                       	echo '<h3> '.$business_total.' businesses </h3>';

                       }

                      else{
                      	echo '<h3>no data<h3>';
                      }
						?>
						<a href="customs.php"><p>business paid custom</p></a>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>users</h3>
				
						<i class='bx bx-filter' ></i>
					</div>
					<table >
						<thead >
							<tr>
								<th>ID</th>
								<th>first name</th>
								<th>second name</th>
								<th>email</th>
								<th>password</th>
								<th>phone</th>
								<th>dateofbirth</th>
								<th>nationality</th>
								<th>see more</th>
								
							</tr>
						</thead>
						<tbody>
							<tr >
						<?php  

                        while ($row = mysqli_fetch_assoc($result)) {
                     
                     
                    ?>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['secondname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td> 
                    <td><?php echo $row['phone'];?></td>
					<td><?php echo $row['dateofbirth']; ?></td>
                    <td><?php echo $row['nationality'];?></td>
                    <td><a href="usercontrol.php">....</a></td>
   		
							</tr>
							<?php
						}
						?>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="dashboard.js"></script>
</body>
</html>