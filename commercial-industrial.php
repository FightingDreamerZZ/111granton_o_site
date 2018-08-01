<?php include("system/functions.php"); ?>


<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Safe, eco-friendly and economical burden carriers is what you seek? Look no further. AGT provides a variety of electric haulers to help your business move forward." />
	<title>Commercial: Industrial Overview | AGT Electric Cars</title>

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

	<section class="art-board" id="industrial">
		<div class="container-fluid">
			<div class="row">
				<h1 class="sr-only">Industrial</h1>
				<img src="img/art-board/industrial.jpg" class="img-responsive" />
			</div>
		</div>
	</section>

	<section id="content" class="industrial">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center">Industrial</h1>
					<h2 class="text-center sub-title invert">Able to use indoors and outdoors with a variety of load capacity to fit your needs. Versatility and durability is what this line-up is all about</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="main-image">
						<img src="img/overview/proton.png" class="img-responsive img-center" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Why choose Industrial?</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<img src="img/features/industrial-weight_capacity.png" class="img-responsive img-center" />
					<h4>Can haul up to 1500kg</h4>
					<p>With a load capacity of up to 1500kg, these are perfect to transport anything for your needs.</p>
				</div>
				<div class="col-sm-4">
					<img src="img/features/industrial-zero_emission.png" class="img-responsive img-center" />
					<h4>Zero Emissions</h4>
					<p>With no emissions, our cars are SAFE to use indoors and outdoors. Helping save the environment one car at a time.</p>
				</div>
				<div class="col-sm-4">
					<img src="img/features/industrial-steel_frame.png" class="img-responsive img-center" />
					<h4>All Steel Frame Chassis</h4>
					<p>Our steel frame chassis helps improve the stability and ridgidness of our industrial cars. With steel framing comes durability and reliability, strong and yet a comfortable ride.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="lineup">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Our Industrial Lineup</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="lineup-carousel">
						<div class="unit text-center">
							<a href="industrial/nucleus.php" title="Nucleus"><img src="img/sideview/nucleus.jpg" class="img-responsive" /></a>
							<h4>Nucleus</h4>
							<hr />
							<a href="industrial/nucleus.php" class="btn btn-default" title="Nucleus">Learn More</a>
						</div>
						<div class="unit text-center">
							<a href="industrial/kernel.php" title="Kernel"><img src="img/sideview/kernel.jpg" class="img-responsive" /></a>
							<h4>Kernel</h4>
							<hr />
							<a href="industrial/kernel.php" class="btn btn-default" title="Kernel">Learn More</a>
						</div>
						<div class="unit text-center">
							<a href="industrial/marrow.php" title="Marrow"><img src="img/sideview/marrow.jpg" class="img-responsive" /></a>
							<h4>Marrow</h4>
							<hr />
							<a href="industrial/marrow.php" class="btn btn-default" title="Marrow">Learn More</a>
						</div>
						<div class="unit text-center">
							<a href="industrial/proton.php" title="Proton"><img src="img/sideview/proton.jpg" class="img-responsive" /></a>
							<h4>Proton</h4>
							<hr />
							<a href="industrial/proton.php" class="btn btn-default" title="Proton">Learn More</a>
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