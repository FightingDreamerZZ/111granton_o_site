<?php
/**
 * Created by PhpStorm.
 * Date: 2018-11-28
 * Time: 3:18 PM
 */
//zz load phpMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../lib/PHPMailer-master/src/Exception.php';
require '../lib/PHPMailer-master/src/PHPMailer.php';
require '../lib/PHPMailer-master/src/SMTP.php';

require 'functions.php';
require 'Database.php';

//zz get db connection
$db = new Database();
$conn = $db->get_db_connection();


//zz get posted params
$new_email = $_POST['new_email'];
if(isset($_POST['email_consent'])){
    $consent = 1;
    $consent_text = "Subscribed";
} else {
    $consent = 0;
    $consent_text = "Did Not Subscribe";
}

//zz handler for existing email.. check db for existing email..
$query = "SELECT * FROM coupon WHERE `email`='".$new_email."';";
$result_set = mysqli_query($conn,$query) or die(mysql_error());
$coupons = array();
while($row = $result_set -> fetch_assoc()){
    $coupons[] = $row;
}

$is_existing_email = (count($coupons)!=0);
$existing_coupon_code = 0;
if($is_existing_email){
    $is_existing_and_redeemed = ($coupons[0]['status'] == 'redeemed');
    $existing_coupon_code = $coupons[0]['coupon_code'];
}

//for checking purpose the script ends here
if(isset($_POST['check_existing_email'])){
    if(!$is_existing_email){
        $result['message'] = "";
        $result['type'] = "no_existing_email";
    }
    else{
        if(!$is_existing_and_redeemed){
            $result['message'] = "";
            $result['type'] = "existing_email_valid";
        }
        else {
            $result['message'] = "";
            $result['type'] = "existing_email_not_valid";
        }
    }
    echo json_encode($result);
    exit();
}

// Global Email HTML Variables
$openRow = "<tr>";
$closeRow = "</tr>";
$openCell = "<td width='50%'>";
$closeCell = "</td>";
$emailHTML = "";

// Create Email HTML
//$email_text_content = "Thank you for downloading coupon. Just print out or show the following image to the dealer and we are all good to go. (If no image shown here pls refer to the attachment)<br />";
$email_text_content = "<p>Thank you for downloading the coupon.</p>
<p>Print the coupon or show this email to our dealer, and you are good to go!</p>
<p>(If image is not properly displayed, please refer to the attachment)</p>";
$emailHTML .= "<html><body>".$email_text_content;

// Create Email Parameters
//$email_from_name = "no-reply";
$email_from_name = "AGT Electric Car";
//$email_from = "smtp.jasonzhang5195@gmail.com";//zz temp
//$email_from = "jason.zhang@agtecars.com";//zz temp
$email_from = "no-reply@agtecars.com";//zz temp

$email_subject = "Promotion Coupon From AGT Electric Car";

$email_to_name 	= "";
$email_to 		= $new_email;

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$email_BCC = "info@agtecars.com";
//$email_CC = "info@agtecars.com";
$email_CC = "jason.zhang@agtecars.com";//zz temp
$headers .= 'CC: '.$email_CC."\r\n";
$headers .= 'From: '.$email_from_name.' <'.$email_from.'>' . "\r\n";

//zz generate coupon code, use existing code for existing email
$new_coupon_code = ($is_existing_email)?($existing_coupon_code):(generate_unique_coupon_code($conn));

$current_time = date("Y-m-d H:i:s");
$new_status='generated';
$new_type='N/A';

//zz draw coupon code to empty coupon img
$gd_img = imagecreatefromjpeg('../img/promo/youhuijuan_empty.jpg');
$text_to_draw = 'Coupon code: '.$new_coupon_code;
$gd_img = draw_text_to_img($gd_img, 14, 'VeraSe.ttf', 255, 255, 255, 0, 590, 30, $text_to_draw);

$mail = new PHPMailer(true);
try {
//    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
//    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//    $mail->Host = 'mail.agtecars.com';
    $mail->Host = 'just36.justhost.com';
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
//    $mail->Username = 'smtp.jasonzhang5195@gmail.com';                 // SMTP username
//    $mail->Password = 'xxxxxx33';                           // SMTP password
//    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//    $mail->Port = 587;
    $mail->Username = 'no-reply@agtecars.com';
    $mail->Password = '3Ed4c54!';
    $mail->SMTPSecure = 'ssl';
    $mail->Port=465;

    //Recipients
    $mail->setFrom($email_from, $email_from_name);
    $mail->addAddress($email_to, $email_to_name);
//    $mail->addReplyTo('info@xx.com', 'Information');
    $mail->addCC($email_CC);
//    $mail->addBCC('bcc@example.com');

    //prepare attachmt
    $str_data="";
    ob_start();
    imagejpeg($gd_img);
    $str_data=ob_get_contents();
    ob_end_clean();

    $mail->addStringAttachment($str_data,"coupon.jpg");
    $mail->addStringEmbeddedImage($str_data,"cid_of_the_photo");

    $img = "<img src=\"cid:cid_of_the_photo\">";
    $emailHTML_footer = "
    <p style=\"\" align=\"\">
        <em>
            <span style=\"font-size:12px;font-family:Helvetica,sans-serif;color:#656565\">
            Copyright &copy; 2018 AGT, All rights reserved.
            </span>
        </em>

    </p>
    <span>

        <span style=\"font-size:12px;font-family:Helvetica,sans-serif;color:#656565\">
            <strong>AGT Electric Cars</strong><br/>
                    Unit 301, 111 Granton Dr<br/>
                    Richmond Hill, ON L4B1L5<br/>
                    T: +1-905-597-6227<br/>
        </span>
    </span>

    <span style=\"font-size:15px;font-family:Helvetica,sans-serif;color:#656565\">
        <a href=\"http://www.agtecars.com\">
            <span style=\"color:#656565\">
                www.agtecars.com
            </span>
        </a>
    </span>
    <br />
    <a href='http://www.agtecars.com'>
    <img src='http://www.agtecars.com/img/agt_logo_white.jpg' width='140'/>
    </a>
    </body></html>";
    $emailHTML .= $img.$emailHTML_footer;

    //Content
    $mail->isHTML(true);
    $mail->Subject = $email_subject;
    $mail->Body    = $emailHTML;
    $email_plain_text_content = "Thank you for downloading coupon. Just print out or show the following image to the dealer and we are all good to go. (If no image shown here pls refer to the attachment)<br />";
    $mail->AltBody = $email_plain_text_content;

    $mail->send();
    $result['message'] = "Coupon successfully sent! Please check your email for the coupon.";
    $result['type'] = "success";

    //zz write to DB after success sending, do nothing for existing email
    if(!$is_existing_email){
        $stmt = $conn -> prepare("INSERT INTO `coupon` (`coupon_code`, `email`, `status`, `type`, `time_generated`, `email_consent`) VALUES (?,?,?,?,?,?)");
        $stmt -> bind_param("issssi",$new_coupon_code,$new_email,$new_status,$new_type,$current_time,$consent);
        $stmt -> execute();
        // Close the statement and connection for security purpose
        $stmt -> close();
    }
    $db->close_db_connection();
} catch (Exception $e) {
    $result['message'] = "We're sorry. Your request cannot be completed at the moment, please try again later.{$mail->ErrorInfo}";
    $result['type'] = "error";
}

echo json_encode($result);
