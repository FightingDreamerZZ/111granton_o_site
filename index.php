    <?php include("system/functions.php"); ?>
<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="R2v6ILYiGESwlrnpNnSc0ZQ939STWvSqL6ZD3ytZOEU" />
	<meta name="description" content="Specializing in electric carts, AGT provides you with economical and reliable electric vehicles for all your needs. Contact us now or find a dealer near you." />
	<title>AGT Electric Cars in Canada</title>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

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
<body class="fadein">


	<?php 
		if(isset($_GET['dev'])){
			include("include/inc.header-dev.php"); 
		} else {
			include("include/inc.header.php"); 
		}
	?>


	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-xs-offset-4">
					<div class="homepage-carousel">
						<div>
							<img src="img/slide-lsv.png" class="img-responsive" />
						</div>
						<div>
							<img src="img/slide-fleet.png" class="img-responsive" />
						</div>
						<div>
							<img src="img/slide-zephyr.png" class="img-responsive" />
						</div>
						<div>
							<img src="img/slide-bus.png" class="img-responsive" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="type-bar">
		<div class="container">
            <div class="row" style="margin-bottom: -10px">
                <div id="promo_anchor_caption" style="margin-top: -70px"></div>
                <div class="col-lg-1 col-centered" id="promo_btn_dn">
                    <a href="#promo_anchor_caption" title="Summer PROMO" class=""><img src="img/promo/btn_dn.png"/></a>
                    <br/>
<!--                    <br/>-->
                </div>
            </div>

            <div class="row" style="">
<!--                <div class="col-lg-2"></div>-->
                <div class="col-lg-4 col-centered" style="text-align: center">
                    <h1 style="color:white;text-transform: none;font-family: 'Times New Roman'">Limited Time Offer!</h1>
                    <br/>
                </div>
<!--                <div class="col-lg-1"></div>-->
            </div>

<!--            <div class="row">-->
<!--                <div class="col-lg-8 col-centered">-->
<!--                    <img src="img/promo/promo201808_1.jpg"  style="z-index: 3"/>-->
<!--                </div>-->
<!--                <div class="promo_spacer"></div>-->
<!--                <div class="col-lg-8 col-centered">-->
<!--                    <img src="img/promo/promo201808_2.jpg"  style="z-index: 3"/>-->
<!--                </div>-->
<!--                <div class="promo_spacer"></div>-->
<!--                <div class="col-lg-8 col-centered">-->
<!--                    <img src="img/promo/promo201808_3.jpg"  style="z-index: 3"/>-->
<!--                </div>-->
<!--                <div class="promo_spacer"></div>-->
<!--                <div class="col-lg-8 col-centered">-->
<!--                    <img src="img/promo/promo201808_4.jpg"  style="z-index: 3"/>-->
<!--                </div>-->
<!--            </div>-->

            <div class="row" style="margin-top: 0px">
                <div class="col-lg-2"></div>
<!--                <div class="col-lg-10">-->
<!--                    <h4 style="color:#fff;text-transform: none;">-->
<!--<!--                        Download a money-off coupon for great sale offer whether you are buying a new Zephyr or trade-in your old golf cart for a new one.-->
<!--<!--                        Just redeem it at any of our dealer and saves instantly.-->
<!--                        Download a money-off coupon for a great sale offer whether you are buying a new Zephyr-->
<!--                        or trading-in your old golf cart for a new one. Redeem the coupon at any of the participating-->
<!--                        Ontario dealerships and save instantly.-->
<!--                    </h4>-->
<!--                    <br/>-->
<!--                    <p style="color:#fff;">*Promotion applies to new and pre-ordered cars only.</p>-->
<!--                    <br/>-->
<!--                </div>-->
                <div class="col-lg-8">
                    <div class="darken_img_on_hover">
<!--                        <div class="darken_img_on_hover_overlay"></div>-->
                        <img src="img/promo/coupon_info_home_page.jpg"  id="dioh_original"/>
                        <img src="img/promo/coupon_info_home_page_darken70.jpg" id="dioh_dark70"/>
                        <div class="darken_img_on_hover_btn">
                            <a href="promotion.php"></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2"></div>
            </div>

            <div class="row">
                <br />
                <div class="col-lg-2 col-centered" style="/*margin-top: -10px*/">
<!--                    <a href="promotion.php" title="Find a dealer to get the promo today!" id="promo_btn_dealer" class="">Start Now</a>-->
                    <br/><br/>
                </div>
            </div>

            <div class="row">
				<div class="col-lg-12">
					<h4 class="text-center">Let Us Help You Look For The Perfect Vehicle</h4>
					<hr />
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-2 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
					<a href="javascript:void(0);" class="text-center type active" data-target="#golf">
						<span><i class="fa fa-flag fa-fw"></i></span>
						Golf Course
					</a>
				</div>
				<div class="col-xs-4 col-sm-2">
					<a href="javascript:void(0);" class="text-center type" data-target="#lsv">
						<span><i class="fa fa-truck fa-fw"></i></span>
						LSV
					</a>
				</div>
				<div class="col-xs-4 col-sm-2">
					<a href="javascript:void(0);" class="text-center type" data-target="#utility">
						<span><i class="fa fa-cogs fa-fw"></i></span>
						Utility
					</a>
				</div>
				<div class="col-xs-4 col-sm-2 col-xs-offset-2 col-sm-offset-0">
					<a href="javascript:void(0);" class="text-center type" data-target="#industrial">
						<span><i class="fa fa-industry fa-fw"></i></span>
						Industrial
					</a>
				</div>
				<div class="col-xs-4 col-sm-2">
					<a href="javascript:void(0);" class="text-center type" data-target="#passenger">
						<span><i class="fa fa-users fa-fw"></i></span>
						Passenger
					</a>
				</div>
			</div>
		</div>
	</section>

	<section id="type-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center item active" id="golf">
						<p class="side-padding-150">You love the game, you train to improve and practice to be the best. AGT uses the same approach to achieve innovation and refinement in its Hobbit G-Series. </p>

						<div class="product-carousel initial">
							<div class="product text-center">
								<a href="hobbit-g.php" title="Hobbit G Overview" class="hidable">Hobbit G Series Overview</a>
								<a href="golf-course/hobbit-2g.php" title="Hobbit 2G"><img src="img/sideview/cricket-2.jpg" /></a>
								<span class="title">Hobbit 2G</span>
								<a href="golf-course/hobbit-2g.php" title="Hobbit 2G" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="hobbit-g.php" title="Hobbit G Overview" class="hidable">Hobbit G Series Overview</a>
								<a href="golf-course/hobbit-4g.php" title="Hobbit 4G"><img src="img/sideview/cricket-4.jpg" /></a>
								<span class="title">Hobbit 4G</span>
								<a href="golf-course/hobbit-4g.php" title="Hobbit 4G" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="hobbit-g.php" title="Hobbit G Overview" class="hidable">Hobbit G Series Overview</a>
								<a href="golf-course/hobbit-6g.php" title="Hobbit 6G"><img src="img/sideview/cricket-6.jpg" /></a>
								<span class="title">Hobbit 6G</span>
								<a href="golf-course/hobbit-6g.php" title="Hobbit 6G" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="zephyr.php" title="Zephyr Overview" class="hidable">Zephyr Series Overview</a>
								<a href="golf-course/zephyr-2.php" title="Zephyr 2"><img src="img/sideview/zephyr-2.jpg" /></a>
								<span class="title">Zephyr 2</span>
								<a href="golf-course/zephyr-2.php" title="Zephyr 2" class="hidable">Learn more about this vehicle</a>
							</div>
						</div>
					</div>
					<div class="text-center item" id="lsv">
                        <p class="side-padding-150">Decision making is a big challenge. We made it easier by offering the best. AGT Electric cars strives to deliver excellence and comfort at low cost, we believe YOU deserve it.</p>
						<div class="product-carousel">
							<div class="product text-center">
								<a href="lsv.php" title="LSV Overview" class="hidable">LSV Series Overview</a>
								<a href="lsv/lsv-2.php" title="LSV 2"><img src="img/sideview/lsv-2.jpg" /></a>
								<span class="title">LSV 2</span>
								<a href="lsv/lsv-2.php" title="LSV 2" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="lsv.php" title="LSV Overview" class="hidable">LSV Series Overview</a>
								<a href="lsv/lsv-2hcx.php" title="LSV 2HCX"><img src="img/sideview/lsv-2hcx.jpg" /></a>
								<span class="title">LSV 2HCX</span>
								<a href="lsv/lsv-2hcx.php" title="LSV 2HCX" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="lsv.php" title="LSV Overview" class="hidable">LSV Series Overview</a>
								<a href="lsv/lsv-4.php" title="LSV 4"><img src="img/sideview/lsv-4.jpg" /></a>
								<span class="title">LSV 4</span>
								<a href="lsv/lsv-4.php" title="LSV 4" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="lsv.php" title="LSV Overview" class="hidable">LSV Series Overview</a>
								<a href="lsv/lsv-2.php" title="LSV 2"><img src="img/sideview/lsv-2.jpg" /></a>
								<span class="title">LSV 2</span>
								<a href="lsv/lsv-2.php" title="LSV 2" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="lsv.php" title="LSV Overview" class="hidable">LSV Series Overview</a>
								<a href="lsv/lsv-2hcx.php" title="LSV 2HCX"><img src="img/sideview/lsv-2hcx.jpg" /></a>
								<span class="title">LSV 2HCX</span>
								<a href="lsv/lsv-2hcx.php" title="LSV 2HCX" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="lsv.php" title="LSV Overview" class="hidable">LSV Series Overview</a>
								<a href="lsv/lsv-4.php" title="LSV 4"><img src="img/sideview/lsv-4.jpg" /></a>
								<span class="title">LSV 4</span>
								<a href="lsv/lsv-4.php" title="LSV 4" class="hidable">Learn more about this vehicle</a>
							</div>
						</div>	
					</div>

					<div class="text-center item" id="utility">
						<p class="side-padding-150">No task is impossible when you have the right tool for the job. AGT designs and builds Hobbit to be the most versatile, durable, and economical vehicle on the market.</p>

						<div class="product-carousel">
							<div class="product text-center">
								<a href="zephyr.php" title="Zephyr Overview" class="hidable">Zephyr Series Overview</a>
								<a href="utility/zephyr-2-plus-2.php" title="Zephyr 2+2"><img src="img/sideview/zephyr-2_plus_2.jpg" /></a>
								<span class="title">Zephyr 2+2</span>
								<a href="utility/zephyr-2-plus-2.php" title="Zephyr 2+2" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="zephyr.php" title="Zephyr Overview" class="hidable">Zephyr Series Overview</a>
								<a href="utility/zephyr-2h.php" title="Zephyr 2H"><img src="img/sideview/zephyr-2h.jpg" />
								<span class="title">Zephyr 2H</span>
								<a href="utility/zephyr-2h.php" title="Zephyr 2H" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="zephyr.php" title="Zephyr Overview" class="hidable">Zephyr Series Overview</a>
								<a href="utility/zephyr-2hcx.php" title="Zephyr 2HCX"><img src="img/sideview/zephyr-2hcx.jpg" /></a>
								<span class="title">Zephyr 2HCX</span>
								<a href="utility/zephyr-2hcx.php" title="Zephyr 2HCX" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="zephyr.php" title="Zephyr Overview" class="hidable">Zephyr Series Overview</a>
								<a href="utility/zephyr-4h.php" title="Zephyr 4H"><img src="img/sideview/zephyr-4h.jpg" /></a>
								<span class="title">Zephyr 4H</span>
								<a href="utility/zephyr-4h.php" title="Zephyr 4H" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="hobbit.php" title="Hobbit Overview" class="hidable">Hobbit Series Overview</a>
								<a href="utility/hobbit-2-plus-2.php" title="Hobbit 2+2"><img src="img/sideview/hobbit-2_plus_2.jpg" /></a>
								<span class="title">Hobbit 2+2</span>
								<a href="utility/hobbit-2-plus-2.php" title="Hobbit 2+2" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="hobbit.php" title="Hobbit Overview" class="hidable">Hobbit Series Overview</a>
								<a href="utility/hobbit-2h.php" title="Hobbit 2H"><img src="img/sideview/hobbit-2h.jpg" /></a>
								<span class="title">Hobbit 2H</span>
								<a href="utility/hobbit-2h.php" title="Hobbit 2H" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="hobbit.php" title="Hobbit Overview" class="hidable">Hobbit Series Overview</a>
								<a href="utility/hobbit-2hcx.php" title="Hobbit 2HCX"><img src="img/sideview/hobbit-2hcx.jpg" /></a>
								<span class="title">Hobbit 2HCX</span>
								<a href="utility/hobbit-2hcx.php" title="Hobbit 2HCX" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="hobbit.php" title="Hobbit Overview" class="hidable">Hobbit Series Overview</a>
								<a href="utility/hobbit-4h.php" title="Hobbit 4H"><img src="img/sideview/hobbit-4h.jpg" /></a>
								<span class="title">Hobbit 4H</span>
								<a href="utility/hobbit-4h.php" title="Hobbit 4H" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="commercial-off-road.php" title="Off-Road Overview" class="hidable">Off-Road Series Overview</a>
								<a href="utility/nomad.php" title="Nomad"><img src="img/sideview/nomad.jpg" /></a>
								<span class="title">Nomad</span>
								<a href="utility/nomad.php" title="Nomad" class="hidable">Learn more about this vehicle</a>
							</div>
						</div>
					</div>
					<div class="text-center item" id="industrial">
						<p class="side-padding-150">Designed to be stylish, tough, environmentally friendly and with a variety of payloads. Built for the hardest tasks and biggest loads, our industrial series delivers what your business needs. </p>

						<div class="product-carousel">
							<div class="product text-center">
								<a href="commercial-industrial.php" title="Industrial Overview" class="hidable">Industrial Series Overview</a>
								<a href="industrial/marrow.php" title="Marrow"><img src="img/sideview/marrow.jpg" /></a>
								<span class="title">Marrow</span>
								<a href="industrial/marrow.php" title="Marrow" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="commercial-industrial.php" title="Industrial Overview" class="hidable">Industrial Series Overview</a>
								<a href="industrial/proton.php" title="Proton"><img src="img/sideview/proton.jpg" /></a>
								<span class="title">Proton</span>
								<a href="industrial/proton.php" title="Proton" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="commercial-industrial.php" title="Industrial Overview" class="hidable">Industrial Series Overview</a>
								<a href="industrial/nucleus.php" title="Nucleus"><img src="img/sideview/nucleus.jpg" /></a>
								<span class="title">Nucleus</span>
								<a href="industrial/nucleus.php" title="Nucleus" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="commercial-industrial.php" title="Industrial Overview" class="hidable">Industrial Series Overview</a>
								<a href="industrial/kernel.php" title="Kernel"><img src="img/sideview/kernel.jpg" /></a>
								<span class="title">Kernel</span>
								<a href="industrial/kernel.php" title="Kernel" class="hidable">Learn more about this vehicle</a>
							</div>
						</div>
					</div>
					<div class="text-center item" id="passenger">
						<p class="side-padding-150">AGT is proud to introduce the most unique line of electric passenger vehicles in Canada. Experience genuine comfort and true innovation.</p>

						<div class="product-carousel">
							<div class="product text-center">
								<a href="argo.php" title="Argo Overview" class="hidable">Argo Series Overview</a>
								<a href="passenger/argo-8.php" title="Argo 8"><img src="img/sideview/argo-8.jpg" /></a>
								<span class="title">Argo 8</span>
								<a href="passenger/argo-8.php" title="Argo 8" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="argo.php" title="Argo Overview" class="hidable">Argo Series Overview</a>
								<a href="passenger/argo-11.php" title="Argo 11"><img src="img/sideview/argo-11.jpg" /></a>
								<span class="title">Argo 11</span>
								<a href="passenger/argo-11.php" title="Argo 11" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="argo.php" title="Argo Overview" class="hidable">Argo Series Overview</a>
								<a href="passenger/argo-14.php" title="Argo 14"><img src="img/sideview/argo-14.jpg" /></a>
								<span class="title">Argo 14</span>
								<a href="passenger/argo-14.php" title="Argo 14" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="argo.php" title="Argo Overview" class="hidable">Argo Series Overview</a>
								<a href="passenger/argo-23.php" title="Argo 23"><img src="img/sideview/argo-23-sm.jpg" /></a>
								<span class="title">Argo 23</span>
								<a href="passenger/argo-23.php" title="Argo 23" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="zephyr.php" title="Zephyr Overview" class="hidable">Zephyr Series Overview</a>
								<a href="passenger/zephyr-4-plus-2.php" title="Zephyr 4+2"><img src="img/sideview/zephyr-4_plus_2.jpg" /></a>
								<span class="title">Zephyr 4+2</span>
								<a href="passenger/zephyr-4-plus-2.php" title="Zephyr 4+2" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="hobbit.php" title="Hobbit Overview" class="hidable">Hobbit Series Overview</a>
								<a href="passenger/hobbit-4-plus-2.php" title="Hobbit 4+2"><img src="img/sideview/hobbit-4_plus_2.jpg" /></a>
								<span class="title">Hobbit 4+2</span>
								<a href="passenger/hobbit-4-plus-2.php" title="Hobbit 4+2" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="hobbit.php" title="Hobbit Overview" class="hidable">Hobbit Series Overview</a>
								<a href="passenger/hobbit-6-plus-2.php" title="Hobbit 6+2"><img src="img/sideview/hobbit-6_plus_2.jpg" /></a>
								<span class="title">Hobbit 6+2</span>
								<a href="passenger/hobbit-6-plus-2.php" title="Hobbit 6+2" class="hidable">Learn more about this vehicle</a>
							</div>
							<div class="product text-center">
								<a href="commercial-off-road.php" title="Off-Road Overview" class="hidable">Off-Road Series Overview</a>
								<a href="passenger/rambler.php" title="Rambler"><img src="img/sideview/rambler.jpg" /></a>
								<span class="title">Rambler</span>
								<a href="passenger/rambler.php" title="Rambler" class="hidable">Learn more about this vehicle</a>
							</div>
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

		$(window).on("load scroll", function(){

			if($(window).scrollTop() === 0){
				$("header").addClass("top-of-page");
			} else {
				$("header").removeClass("top-of-page");
			}		

		});

		$(document).ready(function(){

			$(".product-carousel.initial").slick({
				infinite: true,
 		 		slidesToShow: 3,
  				slidesToScroll: 1,
  				centerMode: true,
  				adaptiveHeight: true,
  				responsive:[
  					{
  						breakpoint: 768,
  						settings:{
  							slidesToShow:1
  						}
  					}

  				]
			});

			// Main Image Slick Carousel
	        $(".homepage-carousel").slick({
				infinite: true,
 		 		slidesToShow: 1,
  				slidesToScroll: 1,
  				adaptiveHeight: false,
  				dots: true,
  				arrows: true,
  				fade: true,
  				autoplay: false
			});

			$("#type-bar .type").click(function(){
				
				// Smooth Scroll to #type-content
				$('html, body').animate({
			        scrollTop: $("#type-bar").offset().top
			    }, 500);

				if($(this).hasClass("active")){
					return false;
				} else {
					var $target_content_id = $(this).data("target");
					$("#type-bar .type").removeClass("active");
					$(this).addClass("active");

					$("#type-content .item").removeClass("active");
					$($target_content_id,$("#type-content")).addClass("active");

					$($target_content_id + " .product-carousel").slick({
						infinite: true,
		 		 		slidesToShow: 3,
		  				slidesToScroll: 1,
		  				centerMode: true,
		  				adaptiveHeight: true,
		  				responsive:[
		  					{
		  						breakpoint: 768,
		  						settings:{
		  							slidesToShow:1
		  						}
		  					}
		  				]
					});
				}
			});

			
			



		});

	</script>


</body>

</html>