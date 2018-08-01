<?php include("system/functions.php"); ?>


<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Big tires, high ground clearance and fun to drive. Our off-road series takes you to your favourite scenic spot easily. See how to enhance your adventures." />
	<title>Commercial: Off-Road Overview | AGT Electric Cars</title>

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

	<section class="art-board" id="off-road">
		<div class="container-fluid">
			<div class="row">
				<h1 class="sr-only">Off-Road</h1>
				<img src="img/art-board/off-road.jpg" class="img-responsive" />
			</div>
		</div>
	</section>

	<section id="content" class="off-road">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center">Off-Road</h1>
					<h2 class="text-center sub-title">Advance your enjoyment with our rough and tough Off-Road Series. Taking your outdoor experience to the next level</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="main-image">
						<img src="img/overview/nomad.png" class="img-responsive img-center" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Why choose Off-Road?</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<img src="img/features/off_road-ground_clearance.png" class="img-responsive img-center" />
					<h4>Ground Clearance</h4>
					<p>We hike it up! 25cm - 41.5cm. Increased ride height for better off-road capabilities.</p>
				</div>
				<div class="col-sm-4">
					<img src="img/features/off_road-all_conditions.png" class="img-responsive img-center" />
					<h4>All Terrain Tires</h4>
					<p>Paired up with the increased ride height, our all terrain tires tackles hill, mud, snow, rocks amd twigs with ease.</p>
				</div>
				<div class="col-sm-4">
					<img src="img/features/onboard-charger.png" class="img-responsive img-center" />
					<h4>On Board Chargers</h4>
					<p>Built into our cars are Delta-Q on-board chargers. Efficient, quick and reliable, great batteries should be paired with exceptional chargers.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="lineup">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Our Off-Road Lineup</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="lineup-carousel">
						<div class="unit text-center">
							<a href="utility/nomad.php" title="Nomad"><img src="img/sideview/nomad.jpg" class="img-responsive" /></a>
							<h4>Nomad</h4>
							<hr />
							<span>4 Seats</span>
							<span>Foldable Rear Seats into Flat Bed</span>
							<a href="utility/nomad.php" class="btn btn-default" title="Nomad">Learn More</a>
						</div>
						<div class="unit text-center">
							<a href="passenger/rambler.php" title="Rambler"><img src="img/sideview/rambler.jpg" class="img-responsive" /></a>
							<h4>Rambler</h4>
							<hr />
							<span>6 Seats</span>
							<span>Foldable Rear Seats into Flat Bed</span>
							<a href="passenger/rambler.php" class="btn btn-default" title="Rambler">Learn More</a>
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