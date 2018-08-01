<?php
	session_start();

	// Open connection to database
	$servername = "localhost";
	$username = "agtecar1_howard";
	$password = "Hl757121986$";
	$dbname = "agtecar1_system";

	// Create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	// Check connection
	if($conn -> connect_error){
		$result['message'] = "There was an error while submitting your message, please try again soon. If this proble persists, please contact us via 1-905-597-6227.";
		$result['type'] = "error";

		echo json_encode($result);
		exit();
	}

	$uname = $_POST['login-name'];
	$pswd = $_POST['login-password'];

	// First we will check the user name
	$query = "SELECT * FROM users WHERE username = '{$uname}'";
	$rslt = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($rslt);

	if($rows != 1){	
		$result['type'] = "error";
		$result['message'] = "This login name was not found. Please ensure the name is correct.";
	} else {
		
		// Now we check the password
		$query = "SELECT * FROM users WHERE username = '{$uname}' AND password = '{$pswd}'";
		$rslt = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($rslt);

		if($rows != 1){
			$result['type'] = "error";
			$result['message'] = "Invalid password";
		} else {

			// Both User name and Password pass
			$_SESSION['username'] = $uname;
			
			$result['type'] = "success";
			$result['message'] = "<i class=\"fa fa-spinner fa-pulse fa-fw\"></i> Logging in...";


		}

	}

	
	echo json_encode($result);
	exit();

?>