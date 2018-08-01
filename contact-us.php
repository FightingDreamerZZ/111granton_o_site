<?php include("system/functions.php"); ?>
<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Have any questions? Want to be a dealer? Contact our friendly staff if you have any questions or require support regarding any of our electric carts." />
	<title>Contact Us | AGT Electric Cars</title>

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
	<link href="css/main.css" type="text/css" rel="stylesheet" />

	<!-- Google reCaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="fadein contact">


	<?php include("include/inc.header.php"); ?>

	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Contact Us</h1>
					<div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11507.368851786325!2d-79.387427!3d43.859099!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3110178c3bef1a37!2sAgt+Electric+Cars!5e0!3m2!1sen!2sca!4v1527484573062" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

					<h3>Have a question?</h3>
					<p>Feel free to drop us a line; whether it's a simple question or if you're thinking about becoming one our associated dealers. AGT Electric Cars will answer all your questions as quickly as possible.</p>
					<form role="form" id="contact-form" data-toggle="validator">
						<div class="row">
							<div class="col-sm-3">
								<div class="form-group">
									<label for="fname">First Name <span>*</span></label>
									<input type="text" name="fname" id="fname" class="form-control" required />
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label for="lname">Last Name <span>*</span></label>
									<input type="text" name="lname" id="lname" class="form-control" required />
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label for="company">Company Name</label>
									<input type="text" name="company" id="company" class="form-control" />
								</div>
							</div>
							<div class="col-sm-8">
								<div class="form-group">
									<label for="email">Email <span>*</span></label>
									<input type="email" name="email" id="email" class="form-control" required />
								</div>
								<div class="consent-text">
									<label><input type="checkbox" name="mail-list" id="mail-list"> I wish to receive AGT news, announcements and updates.</label>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="phone">Phone Number</label>
									<input type="text" name="phone" id="phone" class="form-control" />
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="department">Which Department Do You Wish to Contact? <span>*</span></label>
									<select name="department" id="department" class="form-control" required>
										<option value=''>Please select a department</option>
										<option value="general">General Enquiries</option>
										<option value="sales">Sales</option>
										<option value="parts-service">Parts & Service</option>
										<option value="media">Media</option>
										<option value="partner">Become a Dealer</option>
									</select>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="message">Your Message <span>*</span></label>
									<textarea name="message" id="message" class="form-control" rows="10" required></textarea>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="g-recaptcha" data-sitekey="6Lf9zlsUAAAAAEWV52cqnqij4VXwvtH7Tp8JEsJb"></div>
							</div>
							<div class="col-sm-4">
								<input type="submit" class="form-control btn btn-primary btn-block margin-top-10" value="Send" />
							</div>
							<div class="col-sm-12">
								<div id="feedback"></div>
							</div>
						</div>
						
					</form>

				</div>
				<div class="col-sm-4">
					<h2>Find Us</h2>
					<ul>
						<li><span><i class="fa fa-location-arrow fa-fw"></i></span> 111 Granton Drive, Unit #301</li>
						<li class="second-line">Richmond Hill, Ontario, Canada</li>
						<li class="second-line">L4B 1L5</li>
						<li><span><i class="fa fa-phone fa-fw"></i></span> <a href="tel:+19055976227">1<span class="first-separator"></span>905<span class="second-separator"></span>597<span class="third-separator"></span>6227</a></li>
						<li><span><i class="fa fa-fax fa-fw"></i></span> 1<span class="first-separator"></span>905<span class="second-separator"></span>597<span class="third-separator"></span>6228</li>
						<li><span><i class="fa fa-envelope-o fa-fw"></i></span> <a href="mailto:info@agecars.com">info@agtecars.com</a></li>
					</ul>
					<h2>Hours</h2>
					<ul class="hours">
						<li><span>Monday:</span> 9:00am - 5:00pm</li>
						<li><span>Tuesday:</span> 9:00am - 5:00pm</li>
						<li><span>Wednesday:</span> 9:00am - 5:00pm</li>
						<li><span>Thursday:</span> 9:00am - 5:00pm</li>
						<li><span>Friday:</span> 9:00am - 5:00pm</li>
						<li><span>Saturday:</span> Closed</li>
						<li><span>Sunday:</span> Closed</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	
	<?php include("include/inc.footer.php"); ?>


	<!-- Google jQuery v3.2.1 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap v3.3.7 JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Bootstrap Validator -->
	<script src="js/validator.js"></script>

	<?php include("include/inc.javascript.php"); ?>


	<script>

		$('#contact-form').validator().on('submit', function (e) {
			if (e.isDefaultPrevented()) {
			   console.log("Form is invalid");
			  } else {
			    // Submit the form
				$.ajax({
					url: "/system/ajax-post.form.php",
					data: $("#contact-form").serialize(),
					dataType: "json",
					type: "post",
					success: function(data){
						
						console.log(data);

						switch(data.type){
							case "error":
								$("#contact-form #feedback").html("<div class='error'>" + data.message + "</div>").fadeIn("fast");
							break;
							
							case "success":
								$("#contact-form #feedback").html("<div class='success'>" + data.message + "</div>").fadeIn("fast");

								$("#contact-form input[type=submit]").prop("disabled",true);
							break;
						}
					},
					error: function(data){
						$("#contact-form #feedback").html("<div class='error'>An error has occured, please try again.</div>").fadeIn("fast");
						
						setTimeout(function(){
							$("#contact-form #feedback").fadeOut("slow",function(){ 
								$(this).html("");
							});
						}, 10000);
								
					}
				});
			  }

			return false;
		});

	</script>


</body>

</html>