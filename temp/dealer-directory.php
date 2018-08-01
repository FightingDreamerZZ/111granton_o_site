<?php include("system/functions.php"); ?>
<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dealer Directory | AGT Electric Cars</title>

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
<body class="fadein directory">


	<?php include("include/inc.header.php"); ?>

	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Dealer Directory</h1>
				</div>
				<div class="col-sm-12">
					<div id="map-dealer" style="width:95%; height:600px;"></div>
				</div>
				<div class="col-sm-12">
					<div class="legends">
						<div class="no-dealer">
							<div class="indicator"></div>
							<span>No Dealers Available</span>
						</div>
						<div class="has-dealer">
							<div class="indicator"></div>
							<span>Dealers Available</span>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="dealer-list" id="default">
						<div class="text-center">
							<p>Please select a province for complete listings</p>
						</div>
						
					</div>
					<div class="dealer-list" id="on">
						<h2 class="text-center">Ontario Dealer List</h2>
						<table class="table table-bordered" id="ontario-list">
							<tr>
								<th>Dealer Name</th>
								<th>Address</th>
								<th>Phone Number</th>
								<th>Fax</th>
								<th>Contact Person</th>
								<th>Cell Phone</th>
								<th>Email</th>
							</tr>
							
							<!-- Abibaba -->
							<tr>
								<td>Abibaba</td>
								<td>5-5511 Steeles Ave. W., North York, ON, M9L-1S7</td>
								<td><a href="tel:+14167441288">416.744.1288</a></td>
								<td><span class="na">N/A</span></td>
								<td>Abi</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:abi@abibaba.ca">abi@abibaba.ca</a></td>
							</tr>
							
							<!-- Albion Golf Cars -->
							<tr>
								<td rowspan="4">Albion Golf Cars</td>
								<td rowspan="4">29 Advance Rd., Etobicoke, ON, M8Z-2S6</td>
								<td rowspan="4"><a href="tel:+4162361001">416.236.1001</a></td>
								<td rowspan="4">416.236.4645</td>
								<td>Bill Harris (Shipping &amp; Parts)</td>
								<td><a href="tel:+19058153591">905.815.3591</a></td>
								<td><a href="mailto:bill@albiongolfcars.com">bill@albiongolfcars.com</a></td>
							</tr>
							<tr>
								<td>Accounting</td>
								<td><a href="tel:+4169065630">416.906.5630</a></td>
								<td><a href="mailto:bill@albiongolfcars.com">accounting@albiongolfcars.com</a></td>
							</tr>
							<tr>
								<td>Jeffery Strachan (Sales)</td>
								<td><a href="tel:+14167376455">416.737.6455</a></td>
								<td><a href="mailto:bill@albiongolfcars.com">jeff@albiongolfcars.com</a></td>
							</tr>
							<tr>
								<td>Peter Butler (Vice President)</td>
								<td><a href="tel:+16472724386">647.272.4386</a></td>
								<td>
									<a href="mailto:bill@albiongolfcars.com">peter@albiongolfcars.com</a>
									<a href="mailto:pjcbutler@gmail.com">pjcbutler@gmail.com</a>
								</td>
							</tr>
							
							<!-- Armada Golf Cars -->
							<tr>
								<td>Armada Golf Cars</td>
								<td>36 Industrial Parkway S., Aurora, ON, L4G-3W2</td>
								<td><a href="tel:+19057133525">905.713.3525</a></td>
								<td><span class="na">N/A</span></td>
								<td>Bill Heaps (President)</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:bill@armadagolfcars.com">bill@armadagolfcars.com</a></td>
							</tr>
							
							<!-- Bennett Golf Cars -->
							<tr>
								<td rowspan="3">Bennett Golf Cars</td>
								<td rowspan="3">4 Paisley Lane, Stouffville, ON, L4A-7X4</td>
								<td rowspan="3"><a href="tel:+19056407822">905.640.7822</a></td>
								<td rowspan="3">905.640.7820</td>
								<td>Ryan McCutcheon (President)</td>
								<td><a href="tel:+14167067895">416.706.7895</a></td>
								<td><a href="mailto:ryan@bennettgolfcars.ca">ryan@bennettgolfcars.ca</a></td>
							</tr>
							<tr>
								<td>Bill Bath (Sales)</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:sales@bennettgolfcars.ca">sales@bennettgolfcars.ca</a></td>
							</tr>
							<tr>
								<td>Neil (Parts &amp; Sales)</td>
								<td><span class="na">N/A</span></td>
								<td><span class="na">N/A</span></td>
							</tr>
							
							<!-- Birdie Golf Carts -->
							<tr>
								<td>Birdie Golf Carts</td>
								<td>4915 Highway 3, Ridgeway, ON, L0S-1N0</td>
								<td><a href="tel:+19058943113">905.894.3113</a></td>
								<td>905.894.9985</td>
								<td>Mike (President)</td>
								<td><a href="tel:+19056510990">905.651.0990</a></td>
								<td><a href="mailto:mike@birdiegolfcarts.com">mike@birdiegolfcarts.com</a></td>
							</tr>
							
							<!-- Canadian Carts Sales -->
							<tr>
								<td>Canadian Cart Sales</td>
								<td>P.O. Box 159, 4 Given Rd., St. Mary, ON, N4X-1B1</td>
								<td><a href="tel:+15193492300">519.349.2300</a></td>
								<td>519.349.2221</td>
								<td>Perry Stover (President)</td>
								<td><a href="tel:+15196496884">519.649.6884</a></td>
								<td><a href="mailto:perrys@turfcare.ca">perrys@turfcare.ca</a></td>
							</tr>
							
							<!-- Cart Guy -->
							<tr>
								<td rowspan="2">Cart Guy</td>
								<td rowspan="2">2933 Highway 35 S., Linsay, ON, K9V-4R4</td>
								<td rowspan="2"><a href="tel:+18889052278">1.888.905.2278</a></td>
								<td rowspan="2">1.866.353.2278</td>
								<td>Jamie (President &amp; Repair and Parts)</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:jamie@cartguy.ca">jamie@cartguy.ca</a></td>
							</tr>
							<tr>
								<td>Kim (Accountant)</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:kim@cartguy.ca">kim@cartguy.ca</a></td>
							</tr>
							
							<!-- Cart World -->
							<tr>
								<td rowspan="2">Cart World</td>
								<td rowspan="2">8503 RR#4, Wellinton Rd. 18, Fergus, ON, N1M-2W5</td>
								<td rowspan="2"><a href="tel:+15198431161">519.843.1161</a></td>
								<td rowspan="2">519.843.1167</td>
								<td>Steve Vanleeuwen</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:asem.inc@gmail.com">asem.inc@gmail.com</a></td>
							</tr>
							<tr>
								<td>John Iviney</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:cartworld.ca@gmail.com">cartworld.ca@gmail.com</a></td>
							</tr>
							
							<!-- Classic Cart -->
							<tr>
								<td>Classic Cart</td>
								<td>12678 Furnival Rd., Rodney, ON, N01-2C0</td>
								<td><a href="tel:+15197850956">519.785.0956</a></td>
								<td>519.785.2157</td>
								<td>Frank Machan (President)</td>
								<td><a href="tel:+15199029761">519.902.9761</a></td>
								<td><a href="mailto:frank@classiccarts.biz">frank@classiccarts.biz</a></td>
							</tr>
							
							<!-- Doug Garner Golf Cart Shop -->
							<tr>
								<td>Doug Garner Golf Cart Shop</td>
								<td>92 RR#3, 923593 Rd., Embro, ON, N0J-1J0</td>
								<td><a href="tel:+15194754460">519.475.4460</a></td>
								<td><span class="na">N/A</span></td>
								<td>Doug Garner (Owner)</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:hdgarner97@gmail.com">hdgarner97@gmail.com</a></td>
							</tr>
							
							<!-- Oil Spring Sales & Rental -->
							<tr>
								<td>Oil Spring Sales &amp; Rental</td>
								<td>1844 Oil Heritage Rd. RR#2, Oil Spring, ON, N0N-1P0</td>
								<td><a href="tel:+15196924712">519.692.4712</a></td>
								<td><span class="na">N/A</span></td>
								<td>Kayle McDonald</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:kbmcdonald@hotmail.ca">kbmcdonald@hotmail.ca</a></td>
							</tr>
							
							<!-- Otterville Custom Golf Carts -->
							<tr>
								<td rowspan="3">Otterville Custom Golf Carts</td>
								<td rowspan="3">92 North St. E., Otterville, ON, N0J-1R0</td>
								<td rowspan="3"><a href="tel:+1518799900">519.879.9900</a></td>
								<td rowspan="3"><span class="na">N/A</span></td>
								<td>Ron Heleniak</td>
								<td><a href="tel:+15194681055">519.468.1055</a></td>
								<td><a href="mailto:ronh@norpacbeef.com">ronh@norpacbeef.com</a></td>
							</tr>
							<tr>
								<td>Nick (Account Payable)</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:nick@norpacbeef.com">nick@norpacbeef.com</a></td>
							</tr>
							<tr>
								<td>Bill (Golf Cart Manager)</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:info@ottervillecustomgolfcarts.com">info@ottervillecustomgolfcarts.com</a></td>
							</tr>
							
							<!-- Scott City Fun -->
							<tr>
								<td>Scott City Fun</td>
								<td>1-281 Grand Ave. E., Chatham, ON, N7L-1W8</td>
								<td><a href="tel:+15193597557">519.359.7557</a></td>
								<td><span class="na">N/A</span></td>
								<td>Danny Scott</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:scottcitywheels">scottcitywheels@outlook.com</a></td>
							</tr>
							
							<!-- Skyway Lawn Equipment Ltd. -->
							<tr>
								<td>Skyway Lawn Equipment Ltd.</td>
								<td>154 Upper Centennial Parkway, Stoney Creek, ON, L8J-2T7</td>
								<td><a href="tel:+15196622663">519.662.2663</a></td>
								<td>905.662.2253</td>
								<td>Glenn Burgess</td>
								<td><a href="tel:+19059716574">905.972.6574</a></td>
								<td><a href="mailto:fgburgess@skywaygroup.ca">fgburgess@skywaygroup.ca</a></td>
							</tr>
							
							<!-- Tilbury Auto Sales & RV -->
							<tr>
								<td>Tilbury Auto Sales &amp; RV</td>
								<td>20600 County Rd. 42 Lakeshore, ON, N0P-2L0</td>
								<td><a href="tel:+15196822407">519.682.2407</a></td>
								<td>519.682.2683</td>
								<td>Lindsay Belanger (President)</td>
								<td><a href="tel:+15193606163">519.360.6163</a></td>
								<td><a href="mailto:lindsay@tilburyautosales.com">lindsay@tilburyautosales.com</a></td>
							</tr>
							
							<!-- Trailer Trash Toyz -->
							<tr>
								<td rowspan="2">Trailer Trash Toyz</td>
								<td rowspan="2">2738 Old Fort Rd., Midland, ON, L4R-4K3</td>
								<td><a href="tel:+17059371411">705.937.1411</a></td>
								<td rowspan="2"><span class="na">N/A</span></td>
								<td>Ricky (President)</td>
								<td rowspan="2"><span class="na">N/A</span></td>
								<td rowspan="2"><a href="mailto:trailertrashtoyz@gmail.com">trailertrashtoyz@gmail.com</a></td>
							</tr>
							<tr>
								<td><a href="tel:+17055294552">705.529.4552</a></td>
								<td>Bobby (Vice President)</td>
							</tr>
							
							<!-- Wayne Morrow Auto -->
							<tr>
								<td>Wayne Morrow Auto</td>
								<td>359 Franktown Rd., Carleton Place, ON, K7C-2N4</td>
								<td><a href="tel:+18774427162">1.877.442.7162</a></td>
								<td><span class="na">N/A</span></td>
								<td>Kevin Morrow (President)</td>
								<td><a href="tel:+16132571919">613.257.1919</a></td>
								<td><a href="mailto:kevin.morrow@bellnet.ca">kevin.morrow@bellnet.ca</a></td>
							</tr>
							
							<!-- Websters Beacon -->
							<tr>
								<td>Websters Beacon</td>
								<td>25888 Highway 35, Dwight, ON, P0A-1H0</td>
								<td><a href="tel:+17056352185">705.635.2185</a></td>
								<td><span class="na">N/A</span></td>
								<td>John Webster (President)</td>
								<td><a href="tel:+17057838926">705.783.8926</a></td>
								<td><a href="mailto:beacon@vianet.ca">beacon@vianet.ca</a></td>
							</tr>
							
							<!-- Rick Butera -->
							<tr>
								<td>Rick Butera</td>
								<td>1402 Deer Run Rd., Leamington, ON, N8H-3V7</td>
								<td><a href="tel:+15199906431">519.990.6431</a></td>
								<td><span class="na">N/A</span></td>
								<td>Rick Butera (President)</td>
								<td><span class="na">N/A</span></td>
								<td><span class="na">N/A</span></td>
							</tr>
						</table>
						<a href="javascript:void(0);" class="back-to-top">Back to Map...</a>
					</div>
					<div class="dealer-list" id="ab">
						<h2 class="text-center">Alberta Dealer List</h2>
						<table class="table table-bordered" id="alberta-list">
							<tr>
								<th>Dealer Name</th>
								<th>Address</th>
								<th>Phone Number</th>
								<th>Fax</th>
								<th>Contact Person</th>
								<th>Cell Phone</th>
								<th>Email</th>
							</tr>
							
							<!-- Calgary Golf Car Center -->
							<tr>
								<td>Calgary Golf Car Center</td>
								<td>Bay 7, 4115-64th Ave. S.E., Calgary, AB, T2C-2C8</td>
								<td><a href="tel:+14032795025">403.279.5025</a></td>
								<td>403.203.4233</td>
								<td>Kelly Gurnsey (President)</td>
								<td><a href="tel:+14036801887">403.680.1887</td>
								<td><a href="mailto:calgarygolfcar@rogers.com">calgarygolfcar@rogers.com</a></td>
							</tr>

							<!-- Koolsville Kustoms Ltd. -->
							<tr>
								<td>Koolsville Kustoms Ltd.</td>
								<td>3513 73 Ave. SE., Calgary, AB, T2C-1N6</td>
								<td><a href="tel:+14032347144">403.234.7144</a></td>
								<td><span class="na">N/A</span></td>
								<td>Mike (Owner)</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:koolsvl@telus.net">koolsvl@telus.net</a></td>
							</tr>	
						</table>
						<a href="javascript:void(0);" class="back-to-top">Back to Map...</a>
					</div>
					<div class="dealer-list" id="bc">
						<h2 class="text-center">British Columbia Dealer List</h2>
						<table class="table table-bordered" id="british-columbia-list">
							<tr>
								<th>Dealer Name</th>
								<th>Address</th>
								<th>Phone Number</th>
								<th>Fax</th>
								<th>Contact Person</th>
								<th>Cell Phone</th>
								<th>Email</th>
							</tr>
							
							<!-- Recreations Sport Carts -->
							<tr>
								<td>Recreation Sport Carts</td>
								<td>7191 Progress Way, Delta, BC, V4G-1K8</td>
								<td><a href="tel:+16049406236">604.940.6236</a></td>
								<td><span class="na">N/A</span></td>
								<td>Mark Huston &amp; Shane (Owner)</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:mark@mtrsc.ca">mark@mtrsc.ca</a></td>
							</tr>	
						</table>
						<a href="javascript:void(0);" class="back-to-top">Back to Map...</a>
					</div>
					<div class="dealer-list" id="qc">
						<h2 class="text-center">Quebec Dealer List</h2>
						<table class="table table-bordered" id="quebec-list">
							<tr>
								<th>Dealer Name</th>
								<th>Address</th>
								<th>Phone Number</th>
								<th>Fax</th>
								<th>Contact Person</th>
								<th>Cell Phone</th>
								<th>Email</th>
							</tr>
							
							<!-- Diabo Auto Wholesale -->
							<tr>
								<td rowspan="2">Diabo Auto Wholesale</td>
								<td rowspan="2">Route 138, Kahnawake, QC, J0L-1B0</td>
								<td rowspan="2"><a href="tel:+14506389009">450.638.9009</a></td>
								<td rowspan="2"><span class="na">N/A</span></td>
								<td>Chad (Vice President)</td>
								<td><a href="tel:+15144444373">514.444.4373</td>
								<td><span class="na">N/A</span></td>
							</tr>
							<tr>
								<td>Robert (President)</td>
								<td><a href="tel:+15142315542">514.231.5542</td>
								<td><a href="mailto:kimberleythompson@sympatico.ca">kimberleythompson@sympatico.ca</a></td>
							</tr>

							<!-- Franky's Follies Inc. -->
							<tr>
								<td rowspan="3">Franky's Follies Inc.</td>
								<td rowspan="3">206-5555 Cote-des-Neiges, Montreal, QC, H3T-2A9</td>
								<td>
									<a href="tel:+15147127675">514.712.7675</a>
									<a href="tel:+18665507675">1.866.550.7675</a>
								</td>
								<td rowspan="3">514.738.3048</td>
								<td>Stan Ofrecht (Owner)</td>
								<td rowspan="3"><span class="na">N/A</span></td>
								<td><a href="mailto:teamwon@hotmail.com">teamwon@hotmail.com</a></td>
							</tr>
							<tr>
								<td><a href="tel:+15143442037">514.344.2037</a></td>
								<td>Gorge (Administrator)</td>
								<td><a href="mailto:teamwonmontral@gmail.com">teamwonmontral@gmail.com</a></td>
							</tr>
							<tr>
								<td><span class="na">N/A</span></td>
								<td>Stephane (Sales)</td>
								<td><span class="na">N/A</span></td>
							</tr>

							<!-- Golf Car Quebec -->
							<tr>
								<td>Golf Car Quebec</td>
								<td>165 Ave. Lake, Dorval, QC, H9S-2J2</td>
								<td><a href="tel:+15146313775">514.631.3375</a></td>
								<td>519.647.0200</td>
								<td>Martin Murphy (President)</td>
								<td><a href="tel:+15145003021">514.500.3021</td>
								<td><a href="mailto:martinmurphy@sympatico.ca">martinmurphy@sympatico.ca</a></td>
							</tr>

							<!-- Voiturettes M. Bouchard -->
							<tr>
								<td>Voiturettes M. Bouchard</td>
								<td>1131 Chemin des Patriotes, Sorel-Tracy, QC, J3P-2M9</td>
								<td><a href="tel:+14507436851">450.743.6851</a></td>
								<td><span class="na">N/A</span></td>
								<td>Lauriane Bouchard</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:info@voiturettes.ca">info@voiturettes.ca</a></td>
							</tr>
						</table>
						<a href="javascript:void(0);" class="back-to-top">Back to Map...</a>
					</div>
					<div class="dealer-list" id="sk">
						<h2 class="text-center">Saskatchewan Dealer List</h2>
						<table class="table table-bordered" id="saskatchewan-list">
							<tr>
								<th>Dealer Name</th>
								<th>Address</th>
								<th>Phone Number</th>
								<th>Fax</th>
								<th>Contact Person</th>
								<th>Cell Phone</th>
								<th>Email</th>
							</tr>
							
							<!-- Superior Carts & Rentals -->
							<tr>
								<td>Superior Carts &amp; Rentals</td>
								<td>1387 Ave. N.W., Swift Current, SK, S9H-0Z5</td>
								<td><a href="tel:+13067743363">306.774.3363</a></td>
								<td><span class="na">N/A</span></td>
								<td>Seymour (Owner)</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:superior.seymour@sasktel.net">superior.seymour@sasktel.net</a></td>
							</tr>	
						</table>
						<a href="javascript:void(0);" class="back-to-top">Back to Map...</a>
					</div>
					<div class="dealer-list" id="ns">
						<h2 class="text-center">Nova Scotia Dealer List</h2>
						<table class="table table-bordered" id="nova-scotia-list">
							<tr>
								<th>Dealer Name</th>
								<th>Address</th>
								<th>Phone Number</th>
								<th>Fax</th>
								<th>Contact Person</th>
								<th>Cell Phone</th>
								<th>Email</th>
							</tr>
							
							<!-- Real East Import -->
							<tr>
								<td>Real East Import</td>
								<td>30 Brooked Stick Pass, Beaver Bank, NS, B4G-1G9</td>
								<td><a href="tel:+19024688255">902.468.8255</a></td>
								<td>902.468.7266</td>
								<td>David Gylland (President)</td>
								<td><a href="tel:+19022299104">902.229.9104</a></td>
								<td><a href="mailto:davidgylland@hotmail.com">davidgylland@hotmail.com</a></td>
							</tr>	
						</table>
						<a href="javascript:void(0);" class="back-to-top">Back to Map...</a>
					</div>
					<div class="dealer-list" id="nb">
						<h2 class="text-center">New Brunswick Dealer List</h2>
						<table class="table table-bordered" id="new-brunswick-list">
							<tr>
								<th>Dealer Name</th>
								<th>Address</th>
								<th>Phone Number</th>
								<th>Fax</th>
								<th>Contact Person</th>
								<th>Cell Phone</th>
								<th>Email</th>
							</tr>
							
							<!-- Yamaha Atlantic Golf Equipment Services Ltd. -->
							<tr>
								<td>Yamaha Atlantic Golf Equipment Services Ltd.</td>
								<td>156 Baseline Rd., Lakeville West, NB, E1H-1N6</td>
								<td><a href="tel:+15068558129">506.855.8129</a></td>
								<td>506.854.8217</td>
								<td>Chrisa Powers</td>
								<td><span class="na">N/A</span></td>
								<td><a href="mailto:atlanticgolf@nb.aibn.com">atlanticgolf@nb.aibn.com</a></td>
							</tr>	
						</table>
						<a href="javascript:void(0);" class="back-to-top">Back to Map...</a>
					</div>
					<div class="dealer-list" id="mb">
						<h2 class="text-center">Manitoba Dealer List</h2>
						<p class="text-center">We're sorry... there are no authorized dealers in this provice. Please select another province.</p>
					</div>
					<div class="dealer-list" id="pe">
						<h2 class="text-center">Prince Edward Islands Dealer List</h2>
						<p class="text-center">We're sorry... there are no authorized dealers in this provice. Please select another province.</p>
					</div>
					<div class="dealer-list" id="nl">
						<h2 class="text-center">Newfoundland &amp; Labrador Dealer List</h2>
						<p class="text-center">We're sorry... there are no authorized dealers in this provice. Please select another province.</p>
					</div>
					<div class="dealer-list" id="yt">
						<h2 class="text-center">Yukon Dealer List</h2>
						<p class="text-center">We're sorry... there are no authorized dealers in this territory. Please select another province.</p>
					</div>
					<div class="dealer-list" id="nt">
						<h2 class="text-center">Northwest Territories Dealer List</h2>
						<p class="text-center">We're sorry... there are no authorized dealers in this territory. Please select another province.</p>
					</div>
					<div class="dealer-list" id="nu">
						<h2 class="text-center">Nunavut Dealer List</h2>
						<p class="text-center">We're sorry... there are no authorized dealers in this territory. Please select another province.</p>
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
	
	<!-- jqvMap JavaScript -->
	<script src="js/jqvmap/jquery.vmap.min.js"></script>
	<script src="js/jqvmap/maps/jquery.vmap.canada.js" charset="utf-8"></script>

	<?php include("include/inc.javascript.php"); ?>

	<script>
		$(document).ready(function(){

			$('#map-dealer').vectorMap({
				map: 'canada_en',
				backgroundColor: 'transparent',
			    borderColor: '#000000',
			    borderOpacity: 1,
			    borderWidth: 2,
			    color: '#2464c3',
			    colors: {
			    	mb: "#f14040",
			    	yt: "#f14040",
			    	nt: "#f14040",
			    	nu: "#f14040",
			    	pe: "#f14040",
			    	nl: "#f14040"
			    },
			    enableZoom: false,
			    hoverColor: '#a0c800',
			    hoverOpacity: null,
			    normalizeFunction: 'linear',
			    scaleColors: ['#b6d6ff', '#005ace'],
			    selectedColor: '#a0c800',
			    selectedRegions: null,
			    showTooltip: true,
				onRegionClick: function(event, code, region){
					event.preventDefault();

					var selected_region_code = "#" + code;

					$(".dealer-list").fadeOut(function(){
						setTimeout(function(){
							$(selected_region_code).fadeIn("slow");
							$('html, body').animate({
								scrollTop: $(selected_region_code).offset().top
							}, 1500);
						}, 500);
					});

				}
			});


			$('.back-to-top').click(function(){
				$("html, body").animate({ scrollTop: 0}, 2000);
				return false;
			});
			

		});
	</script>


</body>

</html>