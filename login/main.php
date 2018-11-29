<?php
	session_start();

	if(!isset($_SESSION["username"])){
		header("Location: /login/");
		exit(); 
	}

	// Open connection to database
	$servername = "localhost";
	$username = "root";
	$password = "agtEcars123";
	$dbname = "agtecar1_system";

	// Create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	// Check connection
	if($conn -> connect_error){
		$result['message'] = "There was an error while submitting your message, please try again soon. If this proble persists, please contact us via 1-905-597-6227.";
		$result['type'] = "error";

		echo json_encode($result);
		exit();
	}

	// First we will check the user name
	$query = "SELECT * FROM client ORDER BY date_created DESC;";
	$rslt = mysqli_query($conn,$query) or die(mysql_error());
	
	$clients = array();
	while($row = $rslt -> fetch_assoc()){
		$clients[] = $row;
	}




?>


<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AGT Electric Cars</title>

	<!-- Bootstrap v3.3.7 Stylesheet -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<!-- Google OpenFont -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- FontAwesome v4.7.0 -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

	<!-- Slick Slider CSS -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<!-- Custom Stylesheet -->
	<link href="assets/css/main.css" type="text/css" rel="stylesheet" />
</head>
<body class="fadein subpage">

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<img src="assets/images/logo-ch.lee.jpg" alt="Ch.Lee Logo" />
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="text-center">
						<img src="assets/images/logo.png" alt="AGT Electric Car Logo" />
						<span class="version">version: alpha 1.0.1</span>
					</div>
				</div>
			</div>
			<hr />

            <form action="../system/coupon_promo_backend.php">
                <div class="row">
                    <div class="col-sm-4">
                        <input type="submit" class="form-control btn btn-primary btn-block margin-top-10" value="Go to coupon management panel    >>" />
                    </div>
                </div>
            </form>

            <hr />
			<div class="row">
				<div class="col-lg-12">
					<table class="table table-bordered table-striped" id="client-table">
						<tbody>
							<tr>
								<th>Company Name</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email Address</th>
								<th>Phone Number</th>
								<th>Email Consent</th>
							</tr>

							<?php

								foreach($clients as $client){

									$first_name = $client['fname'];
									$last_name = $client['lname'];
									$company_name = $client['company'];
									$email = $client['email'];
									$phone = $client['phone'];
									$consent = $client['consent'];

									if($consent == true){
										$consent_display = "<span><i class=\"fa fa-check fa-fw\"></i></span>";
									} else {
										$consent_display = "<span><i class=\"fa fa-times fa-fw\"></i></span>";
									}



									echo <<<TEMP
									<tr>
										<td>{$company_name}</td>
										<td>{$first_name}</td>
										<td>{$last_name}</td>
										<td>{$email}</td>
										<td>{$phone}</td>
										<td>{$consent_display}</td>
									</tr>
TEMP;
								}

							?>


						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					&copy; <?php echo date('Y');?> Channel Lee Media - All Right Reserved | 162 King William Street, Hamtilon, ON, Canada L8R 3N9
				</div>
			</div>
		</div>
	</footer>

	
	<!-- Google jQuery v3.2.1 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap v3.3.7 JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Slick JavaScript -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>

</html>