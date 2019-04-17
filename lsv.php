<?php include("system/functions.php"); ?>


<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Low Speed Vehicle, a new kind of electric vehicles. Enclosed and perfectly suited for any situation, let our line of LSV’s enhance your home or business. Learn more about LSV's." />
	<title>LSV Overview | AGT Electric Cars</title>

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
</head>
<body class="fadein product-overview">


	<?php include("include/inc.header.php"); ?>

	<section class="art-board" id="lsv">
		<div class="container-fluid">
			<div class="row">
				<h1 class="sr-only">LSV</h1>
				<img src="img/art-board/lsv.png" class="img-responsive" />
			</div>
		</div>
	</section>

	<section id="content" class="city">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center">Low Speed Vehicle</h1>
					<h2 class="text-center sub-title">The Future</h2>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="col-lg-12">
					<div class="main-image">
						<img src="img/overview/lsv.png" class="img-responsive img-center" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Why choose LSV?</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<img src="img/features/lsv-all_seasons.png" class="img-responsive img-center" />
					<p>Enclosure makes it drivable in any weather, any season.</p>
				</div>
				<div class="col-sm-4">
					<img src="img/features/lsv-range.png" class="img-responsive img-center" />
					<p>Industry leading 80km range.</p>
				</div>
				<div class="col-sm-4">
					<img src="img/features/lsv-light_weight.png" class="img-responsive img-center" />
					<p>Less than 1000 lbs, including enclosure.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="lineup">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Our LSV Lineup</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="lineup-carousel">
						<div class="unit text-center">
							<a href="lsv/lsv-2.php" title="LSV 2"><img src="img/sideview/lsv-2.jpg" class="img-responsive" /></a>
							<h4>LSV 2</h4>
							<hr />
							<a href="lsv/lsv-2.php" class="btn btn-default" title="LSV 2">Learn More</a>
						</div>
						<div class="unit text-center">
							<a href="lsv/lsv-2hcx.php" title="LSV 2HCX"><img src="img/sideview/lsv-2hcx.jpg" class="img-responsive" /></a>
							<h4>LSV 2HCX</h4>
							<hr />
							<a href="lsv/lsv-2hcx.php" class="btn btn-default" title="LSV 2HCX">Learn More</a>
						</div>
						<div class="unit text-center">
							<a href="lsv/lsv-4.php" title="LSV 4"><img src="img/sideview/lsv-4.jpg" class="img-responsive" /></a>
							<h4>LSV 4</h4>
							<hr />
							<a href="lsv/lsv-4.php" class="btn btn-default" title="LSV 4">Learn More</a>
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