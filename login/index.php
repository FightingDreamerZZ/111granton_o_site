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
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce diam nisi, vehicula nec semper in, faucibus in metus. Sed posuere, ante nec maximus suscipit, dui nisi iaculis mi, quis convallis tortor ligula non ipsum. Nam tempus eget nibh sit amet eleifend. Suspendisse venenatis dolor ut nibh sodales, ac placerat odio euismod. Vestibulum porta mattis posuere. Donec varius felis eros, vel blandit ipsum fermentum in. Nullam scelerisque sem sit amet erat auctor facilisis. Sed ut condimentum justo. Nullam egestas tellus lorem. Etiam metus est, blandit ac congue ut, sollicitudin id mauris. Aenean semper scelerisque sagittis.</p>
					<p>Morbi purus mi, luctus vel ullamcorper vitae, condimentum vel velit. Nunc commodo dapibus nibh nec rutrum. Fusce auctor efficitur risus, nec consectetur nibh ultrices eget. Proin elit risus, hendrerit eu feugiat ac, viverra non purus. Mauris tempor accumsan porta. Aliquam erat volutpat. Mauris dapibus consequat risus quis efficitur. Etiam ligula odio, luctus at lacinia et, volutpat non leo. Praesent eget mi sed urna suscipit hendrerit sit amet non magna.</p>
				</div>
				<div class="col-lg-4 col-lg-offset-4">
					<form role="form" id="login-form">
						<div class="form-group">
							<label>Login Name</label>
							<input type="text" name="login-name" id="login-name" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="login-password" id="login-password" class="form-control" required />
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-block btn-primary" value="Log In" />
						</div>
						<div id="feedback"></div>
					</form>
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


	<script>

		$('#login-form').submit(function(){
			$.ajax({
				url: "system/ajax.login.php",
				data: $(this).serialize(),
				dataType: "json",
				type: "post",
				success: function(data){

					console.log(data);

					if(data.type == 'error'){
						$("#login-form #feedback").html("<p>" + data.message + "</p>");
						$("#login-form #feedback").fadeIn("fast",function(){
							$(this).addClass("failed");
						});
					} else {
						$("#login-form #feedback").html("<p>" + data.message + "</p>");
						$("#login-form #feedback").fadeIn("fast",function(){
							$(this).addClass("passed");

							setTimeout(function(){
								window.location.href = "main.php";
							}, 3000);

						});
					}
				},
				error: function(data){

					console.log(data);

					$("#login-form #feedback").addClass("failed");
					$("#login-form #feedback").html("<p>Something went wrong. Please try again.</p>");
					$("#login-form #feedback").fadeIn("slow");
				}
			});

			return false;
		});

	</script>

</body>

</html>