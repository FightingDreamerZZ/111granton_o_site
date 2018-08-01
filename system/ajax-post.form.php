<?php

	/* reCaptcha TEST */
	$captcha;

	if(isset($_POST['g-recaptcha-response'])){
		$captcha = $_POST['g-recaptcha-response'];
	}

	if(empty($captcha)){
		$result['type'] = "error";
		$result['message'] = "Please complete the reCAPTCHA test.";

		echo json_encode($result);
		exit();
	}

	$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf9zlsUAAAAAJU3DE4tbyWMIix8ZS7HPaHENZT7&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

	$r = json_decode($response);

	if($r->{'success'} == false){
		exit();	
	}
	/* END CAPTCHA TEST */
	

	$email_BCC = "chlee1986@gmail.com";

	// Global Email HTML Variables
	$openRow = "<tr>";
	$closeRow = "</tr>";
	$openCell = "<td width='50%'>";
	$closeCell = "</td>";
	$emailHTML = "";


	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$company = $_POST['company'];
	$department = $_POST['department'];
	$message = $_POST['message'];

	if(isset($_POST['mail-list'])){
		$consent = 1;
		$consent_text = "Subscribed";
	} else {
		$consent = 0;
		$consent_text = "Did Not Subscribe";
	}

	// Assign the proper email according to selected department
	// Default to info@agetcars.com
	switch($department){
		case "general":
			$destination_department = "General Inquiry";
			$destination_email = "info@agtecars.com";
			break;
		case "sales":
			$destination_department = "Sales Department";
			$destination_email = "otto.lau@agtecars.com";
			break;
		case "parts-service":
			$destination_department = "Parts & Service Department";
			$destination_email = "john.tan@agtecars.com";
			break;
		case "media":
			$destination_department = "Media Department";
			$destination_email = "aaron.vincent@agtecars.com";
			break;
		case "partner":
			$destination_department = "Partnership Department";
			$destination_email = "otto.lau@agtecars.com";
			break;
		default:
			$destination_department = "General Inquiry";
			$destination_email = "info@agtecars.com";
			break;
	}

	
	// Insert this into the mail-list database (table:client)
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
	$stmt = $conn -> prepare("INSERT INTO client (company, fname, lname, email, phone, comment, consent) VALUES (?,?,?,?,?,?,?)");
	$stmt -> bind_param("ssssssi",$company,$fname,$lname,$email,$phone,$message,$consent);
	$stmt -> execute();

	// Close the statement and connection for security purpose
	$stmt -> close();
	$conn -> close();



	// Placeholder text for empty phone number, this value will be used for email
	if(empty($phone)){
		$phone = "N/A";
	}



	// Create Email HTML
	$emailHTML .= "<html><body><table width='640' cellspacing='0' cellpadding='2' border='1'>";
	if(!empty($company)){
		$emailHTML .= $openRow . $openCell . "Company Name" . $closeCell . $openCell . $company . $closeCell . $closeRow;
	}
	$emailHTML .= $openRow . $openCell . "Customer Name" . $closeCell . $openCell . $fname . " " . $lname . $closeCell . $closeRow;
	$emailHTML .= $openRow . $openCell . "Customer Email Address" . $closeCell . $openCell . "{$email} ({$consent_text})" . $closeCell . $closeRow;
	$emailHTML .= $openRow . $openCell . "Customer Phone Number" . $closeCell . $openCell . $phone . $closeCell . $closeRow;
	$emailHTML .= $openRow . $openCell . "Customer Message" . $closeCell . $openCell . $message . $closeCell . $closeRow;
	$emailHTML .= "</table></body></html>";
	
	// Create Email Parameters
	$email_from_name = $fname . " " . $lname;
	$email_from = $email;
	$email_subject = "A Customer Has Contacted You via Your Website";
	
	$email_to_name 	= $destination_department;
	$email_to 		= $destination_email;
	//$email_to 		= "chlee1986@gmail.com";	// Uncomment during testing

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	// Additional headers
	$headers .= 'To: '.$email_to_name.' <'.$email_to.'>' . "\r\n";
	$headers .= 'BCC: '.$email_BCC."\r\n";
	$headers .= 'From: '.$email_from_name.' <'.$email_from.'>' . "\r\n";

	//Send Email
	if(mail($email_to, $email_subject, $emailHTML, $headers)){
		$result['message'] = "Thank you for contacting AGT Electric Cars, your email was sent successfully.";
		$result['type'] = "success";
	} else {
		$result['message'] = "We're sorry. Your request cannot be completed at the moment, please try again later.";
		$result['type'] = "error";
	}

	echo json_encode($result);

?>