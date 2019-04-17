<?php
/**
 * Created by PhpStorm.
 * User: AGT John
 * Date: 2018-11-26
 * Time: 4:57 PM
 */

//zz load phpMailer library
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'lib/PHPMailer-master/src/Exception.php';
require 'lib/PHPMailer-master/src/PHPMailer.php';
require 'lib/PHPMailer-master/src/SMTP.php';

require 'system/functions.php';
require 'system/Database.php';

////zz get db connection
//$db = new Database();
//$conn = $db->get_db_connection();

// Create Email Parameters
$email_from_name = "no-reply";
//$email_from = "smtp.jasonzhang5195@gmail.com";//zz temp
$email_from = 'no-reply@agtecars.com';//zz temp

$email_subject = "Promotion Coupon From AGT Electric Car";

$email_to_name 	= "ok";
$email_to 		= "jasonzhang5195@gmail.com";
$email_CC = "jason.zhang@agtecars.com";

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'just36.justhost.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'no-reply@agtecars.com';                 // SMTP username
    $mail->Password = '3Ed4c54!';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port=465;

    //Recipients
    $mail->setFrom($email_from, $email_from_name);
    $mail->addAddress($email_to, $email_to_name);
//    $mail->addReplyTo('info@xx.com', 'Information');
//    $mail->addCC($email_CC);
//    $mail->addBCC('bcc@example.com');

//    //prepare attachmt
//    $str_data="";
//    ob_start();
//    imagejpeg($gd_img);
//    $str_data=ob_get_contents();
//    ob_end_clean();
//
//    $mail->addStringAttachment($str_data,"coupon.jpg");
//    $mail->addStringEmbeddedImage($str_data,"cid_of_the_photo");
//
//    $img = "<img src=\"cid:cid_of_the_photo\">";
    $emailHTML .= "<html><body>haha</body></html>";

    //Content
    $mail->isHTML(true);
    $mail->Subject = $email_subject;
    $mail->Body    = $emailHTML;
//    $email_plain_text_content = "Thank you for downloading coupon. Just print out or show the following image to the dealer and we are all good to go. (If no image shown here pls refer to the attachment)<br />";
//    $mail->AltBody = $email_plain_text_content;

    $mail->send();
    echo "success!";
} catch (Exception $e) {
    echo $mail->ErrorInfo;
}

//echo date('Y-m-d H:i:s')."<br/>";
//
//$photo = imagecreatefromjpeg('img/promo/promo201808.jpg');
////imagealphablending($photo, true);
////$fontsize = 20;
////$font = '../times.ttf';
//$fontcolor = imagecolorallocate($photo, 0, 0, 0);
////$angle = 0;
////$x = 100;
////$y = 100;
////$text = 'THIS IS A BLOB OF TEXT YO!';
////imagettftext($photo, $fontsize, $angle, $x, $y, $fontcolor, $font, $text);
////imagegif($photo, 'test.gif');
//
////imagegif($photo);
//$str="";
//ob_start();
//imagejpeg($photo,'img/promo/banner_promo_page.jpg');
//$str=ob_get_contents();
//
//ob_end_clean();
//
//echo microtime(true)."\r\n";
//echo microtime(true);
//
//echo sha1(substr(round(microtime(true) * 1000),0, -2));
//
//echo sha1(substr(round(microtime(true) * 1000),0, -2));
//echo sha1(substr(round(microtime(true) * 1000),0, -2))."<br/><br/><br/><br/><br/>";
//
//
//echo microtime(true).microtime(true)."\n<br/>";
//echo microtime(true).time()."\n<br/>";
//
//$max = ceil(10 / 32);
//$random = '';
//for ($i = 0; $i < $max; $i ++) {
//    $random .= md5(microtime(true).mt_rand(10000,90000));
//}
//echo substr($random, 0, 10)."\n<br/>";
//
//$random = '';
//for ($i = 0; $i < $max; $i ++) {
//    $random .= md5(microtime(true).mt_rand(10000,90000));
//}
//echo substr($random, 0, 10)."\n<br/>"."\n<br/>"."\n<br/>";
//
//echo microtime(true).mt_rand(10000,90000)."<br/>";
//
//// Open connection to database
//$servername = "localhost";
//$username = "root";
//$password = "agtEcars123";
//$dbname = "agtecar1_system";
//
//// Create connection
//$conn = new mysqli($servername,$username,$password,$dbname);
//
//$isUnique = false;
//while(!$isUnique){
//    $new_coupon_code = mt_rand(100000,999999);
//    $query = "SELECT * FROM coupon WHERE coupon_code='".$new_coupon_code."';";
//
//    $result_set = mysqli_query($conn,$query) or die(mysql_error());
//
//    $result_array = $result_set -> fetch_assoc();
//
//    echo "<br/><br/><br/> new couppon code<br/>".count($result_array)."<br/>new couppon code<br/><br/><br/> ";
//    if(count($result_array)==0){
//        $isUnique = true;
//    }
//}
//
//echo "<br/><br/><br/> new couppon code<br/>".$new_coupon_code."<br/>new couppon code<br/><br/><br/> ";
//
//for($i=0;$i<50;$i++)
//    echo mt_rand(100000,999999)."<br/>";
//$ct = new DateTime();
//$ct->format('Y-m-d H:m:s');
//
//header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
//header("Pragma: no-cache"); // HTTP 1.0.
//header("Expires: 0");
//
//echo $ct->getTimestamp()."<br/>";
//date_default_timezone_set('Etc/GMT+5');
//echo date('Y-m-d H:m:s')."<br/>";
//
//$photo = imagecreatefromjpeg('img/promo/youhuijuan_empty.jpg');
//
////imagealphablending($photo, true);
//$fontsize = 14;
//$font = 'system/VeraSe.ttf';
//$fontcolor = imagecolorallocate($photo, 255, 255, 255);
//$angle = 0;
//$x = 590;
//$y = 30;
//$text = 'Coupon code: 111111';
//imagettftext($photo, $fontsize, $angle, $x, $y, $fontcolor, $font, $text);
//
//
//imagejpeg($photo,"zz temp.jgp");

?>
