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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $transport = $_POST['transport'];
    $custom = $_POST['custom'];

    $query = "INSERT INTO custom(business, email,transport,amount) 
              VALUES ('$name', '$email', '$transport','$custom')";

    $result = mysqli_query($con, $query);
    if (!$result) {
        die("Error: " . mysqli_error($con));
    }
    header("Location:pong.php");
   exit;
}

?>
<!Doctype html>

<html lang="en">
  <head>
  	<title>pay</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	
	<link rel="stylesheet" href="custom.css">

	</head>
	<body style="background:linear-gradient(pink,white)";>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">PAY IT</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row mb-5">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span><i class="fa-solid fa-ship"></i></span>
			        		</div>
			        		<div class="text">
				            <p><span>water transport:</span> 22000 rwf</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span><i class="fa-solid fa-plane"></i></span>
			        		</div>
			        		<div class="text">
				            <p><span>air transport:</span>111,200,000 rwf </p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span><i class="fa-solid fa-truck-fast"></i></span>
			        		</div>
			        		<div class="text">
				            <p><span>land transport:</span>789,990,030 rwf</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span><i class="fa-sharp fa-solid fa-sack-dollar"></i></span>
			        		</div>
			        		<div class="text">
				            <p><span>payment code:</span>*182*1*1*0782421304#</p>
				          </div>
			          </div>
							</div>
						</div>
						<center><div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">PRODUCT CATEGORIES</h2></div></center>
				
						<div class="products" style="display: flex;">
						<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span><i class="fa-solid fa-wheat-awn-circle-exclamation"></i></span>
			        		</div>
			        		<div class="text">
				            <p><span>foods&beverages:</span> allowed</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span><i class="fa-solid fa-bolt"></i></span>
			        		</div>
			        		<div class="text">
				            <p><span>electronic devices:</span>allowed</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span><i class="fa-solid fa-briefcase-medical"></i></span>
			        		</div>
			        		<div class="text">
				            <p><span>medecine&pills:</span>allowed</p>
				          </div>
			          </div>
							</div>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span><i class="fa-solid fa-joint"></i></span>
			        		</div>
			        		<div class="text">
				            <p><span>weed&drugs:</span>not allowed</p>
				          </div>
			          </div>
							</div></div><br><br><br><br>
						<div class="row no-gutters">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">pay as you earn</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm" action="">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Name of business</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">transport way</label>
													<input type="text" class="form-control" name="transport" id="subject" placeholder="transport" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">amount for custom</label>
													<input  type="number" name="custom" class="form-control" id="message" cols="30" rows="4" placeholder="Rwf" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="pay your custom" class="btn btn-danger" name="submit">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url(PIC/custo.jpg);">
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>
