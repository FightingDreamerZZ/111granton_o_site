<?php include("system/functions.php");
//$path_prefix = '/';//zz: live server
$path_prefix = '';//zz: localhost?>

<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="With dealers all across Canada. Find the nearest dealer near you and see how AGT fits into your business or home." />
	<title>Dealer Directory | AGT Electric Cars</title>

	<!-- Bootstrap v3.3.7 Stylesheet -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<!-- Google OpenFont -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- FontAwesome v4.7.0 -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	

	<!-- Custom Stylesheet -->
	<link href="css/main.css" type="text/css" rel="stylesheet" />
</head>
<body class="fadein directory">


	<?php include("include/inc.header.php"); ?>

	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Dealer Directory</h1>
				</div>
			</div>
			<div class="row margin-top-20">
				<div class="col-sm-4">
					<label for="country">Country</label>
					<select id="country" class="form-control">
						<option value=''>Select a Country</option>
						<option value="Canada">Canada</option>
					</select>
				</div>
				<div class="col-sm-4">
					<label for="placeholder-province-state">Province/State</label>
					<select id="placeholder-province-state" class="form-control" disabled="disabled">
						<option>Select a Province/State</option>
					</select>
					<select id="province" class="form-control">
						<option value="">Select a Province</option>
						<option value="AB">Alberta</option>
						<option value="BC">British Columbia</option>
						<option value="NB">New Brunswick</option>
						<option value="ON">Ontario</option>
						<option value="QC">Quebec</option>
						<option value="SK">Saskatchewan</option>
					</select>
					<select id="state" class="form-control">
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
				</div>
				<div class="col-sm-4">
					<label for="placeholder-city">City</label>
					<select id="placeholder-city" class="form-control" disabled="disabled">
						<option>Selected a City</option>
					</select>
					<select id="city-ontario" class="dropdown-city form-control">
						<option value=''>Select a City</option>
						<option value='carleton-place'>Carleton Place</option>
						<option value='dwight'>Dwight</option>
						<option value='embro'>Embro</option>
						<option value='etobicoke'>Etobicoke</option>
						<option value='fergus'>Fergus</option>
						<option value='leamington'>Leamington</option>
						<option value='linsay'>Linsay</option>
						<option value='midland'>Midland</option>
						<option value='otterville'>Otterville</option>
						<option value='st-marys'>St. Marys</option>
						<option value='stoney-creek'>Stoney Creek</option>
						<option value='stouffville'>Stouffville</option>
					</select>
					<select id="city-alberta" class="dropdown-city form-control">
						<option value=''>Select a City</option>
						<option value='calgary'>Calgary</option>
						<option value='sangudo'>Sangudo</option>
					</select>
					<select id="city-quebec" class="dropdown-city form-control">
						<option value=''>Select a City</option>
						<option value='dorval'>Dorval</option>
						<option value='montreal'>Montreal</option>
						<option value='sorel-tracy'>Sorel-Tracy</option>
                        <option value='saguenay'>Saguenay</option>
                    </select>
					<select id="city-british-columbia" class="dropdown-city form-control">
						<option value=''>Select a City</option>
						<option value='delta'>Delta</option>
					</select>
					<select id="city-saskatchewan" class="dropdown-city form-control">
						<option value=''>Select a City</option>
						<option value='swift-current'>Swift Current</option>
					</select>
					<select id="city-new-brunswick" class="dropdown-city form-control">
						<option value=''>Select a City</option>
						<option value='lakeville-west'>Lakeville West</option>
					</select>
				</div>
				<div class="col-sm-12">
					<p class="margin-top-20">Below is our full dealer list. You can filter them by selecting country, province, and city.</p>
				</div>	
			</div><!-- End .row -->


			<div class="row province ontario">

				<div class="dealer ontario col-sm-12">
					<h2>Ontario Dealers</h2>
				</div>

				<div class="dealer ontario etobicoke col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Albion Golf Cars</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/AlbionGolfCars.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>29 Advance Rd.</li>
								<li>Etobicoke, ON. M8Z 2S6</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+14162361001">416-236-1001</a></li>
								<li><i class="fa fa-phone fa-fw"></i> Toll-Free: <a href="tel:+18883115431">1-888-311-5431</a></li>
								<li><i class="fa fa-fax fa-fw"></i> Fax: 416-236-4645</li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> cody@albiongolfcars.com</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="https://www.albiongolfcars.com/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->

				<div class="dealer ontario stouffville col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Bennett Golf Cars</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/BennetteGolfCars.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>4 Paisley Lane</li>
								<li>Stouffville, ON. L4A 7X4</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+19056407822">905-640-7822</a></li>
								<li><i class="fa fa-fax fa-fw"></i> Fax: 905-640-7820</a></li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> sales@bennettgolfcars.ca</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="https://www.bennettgolfcars.ca" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->


				<div class="dealer ontario st-marys col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Canadian Cart Sales</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/CanadianCartSales.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>4 Given Rd.</li>
								<li>St. Marys, ON. N4X 1B1</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+15193492300">519-349-2300</a></li>
								<li><i class="fa fa-fax fa-fw"></i> Fax: 519-349-2221</li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> perrys@turfcare.ca</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://www.canadiancartsales.com/default.asp" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->

				<div class="dealer ontario linsay col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Cart Guy</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/CartGuy.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>2933 Hwy #35 S.</li>
								<li>Linsay, ON. K9V 4R4</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Toll-Free: <a href="tel:+18889052278">1-888-905-2278</a></li>
								<li><i class="fa fa-fax fa-fw"></i> Fax: 1-866-353-2278</li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> jamie@cartguy.ca</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="https://cartguy.ca/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->


				<div class="clearfix"></div>


				<div class="dealer ontario fergus col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Cart World</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/CartWorld.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>8503 Wellinton Rd. 18</li>
								<li>Fergus, ON. N1M 2W5</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+15198431161">519-843-1161</a></li>
								<li><i class="fa fa-fax fa-fw"></i> Fax: 519-843-1167</li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> dave.asem.inc@gmail.com</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="https://www.cartworld.ca/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->


				<div class="dealer ontario embro col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Doug Garner Golf Cart Shop</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/DougGarner.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>923593 Rd. 92, RR#3</li>
								<li>Embro, ON. N0J 1J0</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+15194754460">519-475-4460</a></li>
								<li><i class="fa fa-fax fa-fw"></i> Fax: 519-532-1846</li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> hdgarner97@gmail.com</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://www.golfcars.pro/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->


				<div class="dealer ontario otterville col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Otterville Custom Golf Carts</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/OttervilleCustomCarts.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>92 North St. E.</li>
								<li>Otterville, ON. N0J 1R0</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+15198799900">519-879-9900</a></li>
								<li><i class="fa fa-fax fa-fw"></i> Fax: 519-532-1577</li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> info@ottervillecustomgolfcarts.com</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://ottervillecustomgolfcarts.com/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->


				<div class="dealer ontario stoney-creek col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Skyway Lawn Equipment Ltd.</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/SkywayLawn.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>154 Upper Centennial Pkway</li>
								<li>Stoney Creek, ON. L8J 2T7</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+19056622663">905-662-2663</a></li>
								<li><i class="fa fa-fax fa-fw"></i> Fax: 905-662-2253</li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> gburgess@skywaygroup.ca</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="https://www.skywaygroup.ca/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->

				<div class="clearfix"></div>

				<div class="dealer ontario midland col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Trailer Trash Toyz</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/TrailerTrashToyz.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>2738 Old Fort Rd.</li>
								<li>Midland, ON. L4R 4K3</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+17059371411">705-937-1411</a></li>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+17055294552">705-529-4552</a></li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> trailertrashtoyz@gmail.com</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://www.trailertrashtoyz.com/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->


				<div class="dealer ontario carleton-place col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Wayne Morrow Auto</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/dealer-placeholder.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>359 Franktown Rd.</li>
								<li>Carleton Place, ON. K7C 2N4</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Toll-Free: <a href="tel:+18774427162">1-877-442-7162</a></li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> kevin.morrow@bellnet.ca</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://www.morrowauto.ca/index.html" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->


				<div class="dealer ontario dwight col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Websters Beacon</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/WebstersBeacon.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>25888 Hwy #35</li>
								<li>Dwight, ON. P0A 1H0</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+17056352185">705-635-2185</a></li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> beacon@vianet.ca</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://webstersbeacon.com/marine-powersport/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->


				<div class="dealer ontario leamington col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Rick Butera</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/dealer-placeholder.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>1402 Deer Run Rd.</li>
								<li>Leamington, ON. N8H 3V7</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+15199906431">519-990-6431</a></li>
							</ul>
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> rickbutera1@yahoo.com</li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->
			</div><!-- End Ontario Row -->


			<div class="row province alberta">
				<div class="dealer alberta col-sm-12">
					<h2>Alberta Dealers</h2>
				</div>

				<div class="dealer alberta calgary col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Calgary Golf Car Center</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/dealer-placeholder.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>Bay 7, 4115-64th Ave. S. E.</li>
								<li>Calgary, AB. T2C 2C8</li>
							</ul>
							
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+14032795025">403-279-5025</a></li>
								<li><i class="fa fa-fax fa-fw"></i> Fax: 403-203-4233</li>
							</ul>
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> calgarygolfcar@rogers.com</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://www.calgarygolfcarcentre.com/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->

				<div class="dealer alberta calgary col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Koolsville Kustoms Ltd.</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/KoolsvilleKustoms.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>3514 73 Ave. S. E.</li>
								<li>Calgary, AB. T2C 1N6</li>
							</ul>
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+14032347144">403-234-7144</a></li>
							</ul>
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> koolsvl@telus.net</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://www.koolsvillekustoms.ca/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->

				<div class="dealer alberta sangudo col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Lakeview Small Power</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/LakeviewSmallPower.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>65A Range Road</li>
								<li>Sangudo, AB. T0E 2A0</li>
							</ul>
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+17807853270">780-785-3270</a></li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> infolkgranch@xplornet.com</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://www.lakeviewsmallpower.com/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->
			</div><!-- End Alberta Row -->


			<div class="row province quebec">
				<div class="dealer quebec col-sm-12">
					<h2>Quebec Dealers</h2>
				</div>

				<div class="dealer quebec dorval col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Golfmobiles Inc.</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/GolfmobilesInc.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>165 Ave Lake</li>
								<li>Dorval, QC. H9S 2J2</li>
							</ul>
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+15142421931">514-242-1931</a></li>
								<li><i class="fa fa-fax fa-fw"></i> Fax: 519-647-0200</li>
							</ul>
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> info@golfmobiles.ca</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://www.golfmobiles.ca/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->

				<div class="dealer quebec montreal col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Gestion Cart</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/GestionCart.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>206 - 5555 Cote-des-Neiges</li>
								<li>Montreal, QC. H3T 2A9</li>
							</ul>
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+15147127675">514-712-7675</a></li>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+15143442037">514-344-2037</a></li>
								<li><i class="fa fa-fax fa-fw"></i> Fax: 514-738-3048</li>
							</ul>
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> teamwon@hotmail.com</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://gestioncart.ca/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->

				<div class="dealer quebec sorel-tracy col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Voiturettes M. Bouchard</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/MBouchard.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>1131 Chemin des Patriotes</li>
								<li>Sorel-Tracy, QC. J3P 2M9</li>
							</ul>
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+14507436850">450-743-6850</a></li>
							</ul>
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> info@voiturettes.ca</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://www.voiturettes.ca/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->

                <div class="dealer quebec saguenay col-sm-3">
                    <div class="dealer-wrapper margin-top-20">
                        <div class="title">
                            <span>Voiturette de Golf Saguenay</span>
                        </div>
                        <div class="image">
                            <img src="img/dealers/VoituretteDeGolfSaguenay.png" class="img-responsive" />
                        </div>
                        <div class="address">
                            <ul>
                                <li>360 Route 381</li>
                                <li>Ferland-et-Boilleau, QC. G0V 1H0</li>
                            </ul>
                        </div>
                        <div class="phone">
                            <ul>
                                <li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+14186761073">418-676-1073</a></li>
                                <li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+14189441972">418-944-1972</a></li>
                                <!--                                <li><i class="fa fa-fax fa-fw"></i> Fax: 514-738-3048</li>-->
                            </ul>
                        </div>
                        <div class="email">
                            <ul>
                                <li><i class="fa fa-envelope fa-fw"></i> cartdegolfsaguenay@hotmail.fr</li>
                            </ul>
                        </div>
                        <div class="website">
                            <ul>
                                <li><i class="fa fa-globe fa-fw"></i> <a href="https://www.facebook.com/VoituretteDeGolfSaguenay/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Dealer Item -->
			</div><!-- End Quebec Row -->


			<div class="row province british-columbia">
				<div class="dealer british-columbia col-sm-12">
					<h2>British Columbia Dealers</h2>
				</div>

				<div class="dealer british-columbia delta col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Recreation Sport Carts</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/RecreationSportsCarts.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>7191 Progress Way</li>
								<li>Delta, BC. V4G 1K8</li>
							</ul>
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+16049406236">604-940-6236</a></li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> mark@mtrsc.ca</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="https://rsccustomgolfcarts.com/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->
			</div><!-- End British Columbia Row -->


			<div class="row province saskatchewan">
				<div class="dealer saskatchewan col-sm-12">
					<h2>Saskatchewan Dealers</h2>
				</div>

				<div class="dealer saskatchewan swift-current col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Superior Carts & Rentals</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/SuperiorCart.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>138 7 Ave NW</li>
								<li>Swift Current, SK. S9H 0Z5</li>
							</ul>
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+13067743363">306-774-3363</a></li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> superior.seymour@sasktel.net</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://superiorcarts.ca/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->
			</div><!-- End Saskatchewan Row -->


			<div class="row province new-brunswick">
				<div class="dealer new-brunswick col-sm-12">
					<h2>New Brunswick Dealers</h2>
				</div>

				<div class="dealer new-brunswick lakeville-west col-sm-3">
					<div class="dealer-wrapper margin-top-20">
						<div class="title">
							<span>Atlantic Golf Equipment Services Ltd.</span>
						</div>
						<div class="image">
							<img src="<?php echo $path_prefix;?>img/dealers/AtlanticGolfEquipServicesLtd.png" class="img-responsive" />
						</div>
						<div class="address">
							<ul>
								<li>156 Baseline Rd.</li>
								<li>Lakeville Westmorland County, NB. E1H 1N6</li>
							</ul>
						</div>
						<div class="phone">
							<ul>
								<li><i class="fa fa-phone fa-fw"></i> Local: <a href="tel:+15068558129">506-855-8129</a></li>
								<li><i class="fa fa-fax fa-fw"></i> Fax: 506-854-8217</li>
							</ul>
							
						</div>
						<div class="email">
							<ul>
								<li><i class="fa fa-envelope fa-fw"></i> sales@atlanticgolf.ca</li>
							</ul>
						</div>
						<div class="website">
							<ul>
								<li><i class="fa fa-globe fa-fw"></i> <a href="http://atlanticgolf.ca/" target="_blank" rel="nofollow">Visit Dealer Website</a></li>
							</ul>
						</div>
					</div>
				</div><!-- Dealer Item -->
			</div><!-- End New Brunswick Row -->



		</div>
	</section>

	<?php include("include/inc.footer.php"); ?>


	<!-- Google jQuery v3.2.1 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap v3.3.7 JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<?php include("include/inc.javascript.php"); ?>

	<script>

		$(document).ready(function(){

			$("#country").change(function(){
				if($(this).val() !== ''){
					$("#placeholder-province-state").hide();

					var $selected_country = $(this).val();

					switch($selected_country){
						case "Canada":
							$("#province").show();
							$("#state").hide();
							break;
						case "USA":
							$("#state").show();
							$("#province").hide();
							break;
					}


				} else {
					return false;
				}
			}); // End $("#country").change();


			$("#province").change(function(){

				var $selected_province = $(this).val();
				var $province_class;

				if($selected_province !== ''){

					$("#placeholder-city").hide();

					switch($selected_province){

						case "ON":

							$(".dealer").each(function(){
								if($(this).hasClass("ontario")){
									$(this).show();
								} else {
									$(this).fadeOut("fast");
								}
							});

							$(".dropdown-city").hide();
							$("#city-ontario").show();

							break;
						case "AB":

							$(".dealer").each(function(){
								if($(this).hasClass("alberta")){
									$(this).show();
								} else {
									$(this).fadeOut("fast");
								}
							});

							$(".dropdown-city").hide();
							$("#city-alberta").show();
							
							break;
						case "QC":

							$(".dealer").each(function(){
								if($(this).hasClass("quebec")){
									$(this).show();
								} else {
									$(this).fadeOut("fast");
								}
							});

							$(".dropdown-city").hide();
							$("#city-quebec").show();
							
							break;
						case "BC":

							$(".dealer").each(function(){
								if($(this).hasClass("british-columbia")){
									$(this).show();
								} else {
									$(this).fadeOut("fast");
								}
							});

							$(".dropdown-city").hide();
							$("#city-british-columbia").show();
							
							break;
						case "SK":

							$(".dealer").each(function(){
								if($(this).hasClass("saskatchewan")){
									$(this).show();
								} else {
									$(this).fadeOut("fast");
								}
							});

							$(".dropdown-city").hide();
							$("#city-saskatchewan").show();
							
							break;
						case "NS":

							$(".dealer").each(function(){
								if($(this).hasClass("nova-scotia")){
									$(this).show();
								} else {
									$(this).fadeOut("fast");
								}
							});

							$(".dropdown-city").hide();
							$("#city-nova-scotia").show();
							
							break;
						case "NB":

							$(".dealer").each(function(){
								if($(this).hasClass("new-brunswick")){
									$(this).show();
								} else {
									$(this).fadeOut("fast");
								}
							});

							$(".dropdown-city").hide();
							$("#city-new-brunswick").show();
							
							break;

						default:
							$(".dealer").show();


					}
				} else {
					return false;
				}
			}); // End $("#province").change();

			$(".dropdown-city").change(function(){

				var $selected_city = $(this).val();

				if($selected_city !== ''){

					$(".dealer").each(function(){
						if($(this).hasClass($selected_city)){
							$(this).show();
						} else {
							$(this).hide();
						}
					});

				} else {
					return false;
				}


			});


		});

	</script>



</body>

</html>
