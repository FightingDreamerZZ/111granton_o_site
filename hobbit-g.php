<?php include("system/functions.php"); ?>


<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Our main line up for golfers, drive comfortably and safe around the course. Hobbit G takes you wherever you need to go. See which one is right for you." />
	<title>Hobbit G Overview | AGT Electric Cars</title>

	<!-- Bootstrap v3.3.7 Stylesheet -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<!-- Google OpenFont -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- FontAwesome v4.7.0 -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	

	<!-- Slick Slider CSS -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

	<!-- jqvMap Css -->
	<link href="js/jqvmap/jqvmap.min.css" type="text/css" rel="stylesheet" />

	<!-- Custom Stylesheet -->
	<link href="css/main.css" type="text/css" rel="stylesheet" />
</head>
<body class="fadein product-overview">


	<?php include("include/inc.header.php"); ?>

	<section class="art-board" id="cricket">
		<div class="container-fluid">
			<div class="row">
				<h1 class="sr-only">Hobbit G</h1>
				<img src="img/art-board/cricket.jpg" class="img-responsive" />
			</div>
		</div>
	</section>

	<section id="content" class="golf">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center">Hobbit G</h1>
					<h2 class="text-center sub-title">The Golden Standard in Precision &amp; Efficiency</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="main-image">
						<img src="img/overview/cricket.png" class="img-responsive img-center" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Why choose Hobbit G?</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<img src="img/features/hobbit-customization.png" class="img-responsive img-center" />
					<h4>Our Roof to Tire <span>Customization</span></h4>
					<p>Hobbit has one of the most options in terms of capacity and usability. 2, 4, 6 Seats? +2 more with Flat bed? Cargo box? Hobbit has you covered. Our Colour options for the car and roof makes YOU stand out from the club.</p>
				</div>
				<div class="col-sm-4">
					<img src="img/features/onboard-charger.png" class="img-responsive img-center" />
					<h4>On-Board Charger</h4>
					<p>Built into our cars are advanced On-Board chargers that let you charge everywhere. This makes Hobbit a quick and efficient car for everyone.</p>
				</div>
				<div class="col-sm-4">
					<img src="img/features/hobbit-seating.png" class="img-responsive img-center" />
					<h4>Large <span>Comfortable Bench Seating</span></h4>
					<p>Made out of synthetic leather and extra foam cushioning. Comfortable for short and long distance driving for the driver and passengers.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="lineup">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Our Hobbit G Lineup</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="lineup-carousel">
						<div class="unit text-center">
							<a href="golf-course/hobbit-2g.php" title="Hobbit 2G"><img src="img/sideview/cricket-2.jpg" class="img-responsive" /></a>
							<h4>Hobbit 2G</h4>
							<hr />
							<a href="golf-course/hobbit-2g.php" class="btn btn-default" title="Cricket 2">Learn More</a>
						</div>
						<div class="unit text-center">
							<a href="golf-course/hobbit-4g.php" title="Hobbit 4G<"><img src="img/sideview/cricket-4.jpg" class="img-responsive" /></a>
							<h4>Hobbit 4G</h4>
							<hr />
							<a href="golf-course/hobbit-4g.php" class="btn btn-default" title="Hobbit 4G<">Learn More</a>
						</div>
						<div class="unit text-center">
							<a href="golf-course/hobbit-6g.php" title="Hobbit 6G"><img src="img/sideview/cricket-6.jpg" class="img-responsive" /></a>
							<h4>Hobbit 6G</h4>
							<hr />
							<a href="golf-course/hobbit-6g.php" class="btn btn-default" title="Hobbit 6G">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include("include/inc.footer.php"); ?>


	<!-- Google jQuery v3.2.1 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap v3.3.7 JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Slick JavaScript -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<?php include("include/inc.javascript.php"); ?>

	<script>
		$(document).ready(function(){
			// Main Image Slick Carousel
	        $(".lineup-carousel").slick({
				infinite: true,
 		 		slidesToShow: 3,
  				slidesToScroll: 1,
  				adaptiveHeight: true,
  				dots: false,
  				responsive:[
					{
						breakpoint: 992,
						settings:{
							slidesToShow:2,
							slideToScroll:1
						}
					},
					{
						breakpoint: 768,
						settings:{
							slidesToShow:1,
							slideToScroll:1
						}
					}

				]
			});
		});
	</script>

</body>

</html>