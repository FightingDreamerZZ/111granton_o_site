<?php include("system/functions.php"); ?>


<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The most unique line of electric vehicle in our line-up. Argo has unmatched seating capacity and range. See how Argo fits your business or communities needs." />
	<title>Argo Overview | AGT Electric Cars</title>

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

	<section class="art-board" id="argo">
		<div class="container-fluid">
			<div class="row">
				<h1 class="sr-only">Argo</h1>
				<img src="img/art-board/argo.jpg" class="img-responsive" />
			</div>
		</div>
	</section>

	<section id="content" class="bus">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center">Argo</h1>
					<h2 class="text-center sub-title">High range, high capacity but very low in cost, it's one thing your businessis missing.</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="main-image">
						<img src="img/overview/argo.png" class="img-responsive img-center" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Why choose Argo?</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<img src="img/features/argo-range.png" class="img-responsive img-center" />
					<h4>100 km Range</h4>
					<p>Our 100km range means that you don't have to worry about charging anytime soon. Equipped with Industry leading Trojan deep-cycle batteries.</p>
				</div>
				<div class="col-sm-4">
					<img src="img/features/argo-seats.png" class="img-responsive img-center" />
					<h4>8, 11 and 14 seating</h4>
					<p>Unmatched seating capacity. From 8 to 23, suitable for any event. Keeping people together is better than deciding who goes on which car.</p>
				</div>
				<div class="col-sm-4">
					<img src="img/features/argo-closed-cabin.png" class="img-responsive img-center" />
					<h4>Option for closed cabin</h4>
					<p>Protect your passengers from the elements with our optional closed cabin. Closed cabin makes the argo into a much more versatile all-around vehicle.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="lineup">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3>Our Argo Lineup</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="lineup-carousel">
						<div class="unit text-center">
							<a href="passenger/argo-8.php" title="Argo 8"><img src="img/sideview/argo-8.jpg" class="img-responsive" /></a>
							<h4>Argo 8</h4>
							<hr />
							<a href="passenger/argo-8.php" class="btn btn-default" title="Argo 8">Learn More</a>
						</div>
						<div class="unit text-center">
							<a href="passenger/argo-11.php" title="Argo 11"><img src="img/sideview/argo-11.jpg" class="img-responsive" /></a>
							<h4>Argo 11</h4>
							<hr />
							<a href="passenger/argo-11.php" class="btn btn-default" title="Argo 11">Learn More</a>
						</div>
						<div class="unit text-center">
							<a href="passenger/argo-14.php" title="Argo 14"><img src="img/sideview/argo-14.jpg" class="img-responsive" /></a>
							<h4>Argo 14</h4>
							<hr />
							<a href="passenger/argo-14.php" class="btn btn-default" title="Argo 14">Learn More</a>
						</div>
						<div class="unit text-center">
							<a href="passenger/argo-23.php" title="Argo 23"><img src="img/sideview/argo-23-sm.jpg" class="img-responsive" /></a>
							<h4>Argo 23</h4>
							<hr />
							<a href="passenger/argo-23.php" class="btn btn-default" title="Argo 23">Learn More</a>
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