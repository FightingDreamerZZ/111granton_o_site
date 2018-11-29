<?php
/**
 * Created by PhpStorm.
 * User: AGT John
 * Date: 2018-10-01
 * Time: 2:01 PM
 */
?>

《--below is summer promo code on index.php (for the release version)--》
		    <div class="row">
                            <div id="promo_anchor_caption" style="margin-top: -10px"></div>
                            <div class="col-lg-1 col-centered" id="promo_btn_dn">
                                <a href="#promo_anchor_caption" title="Summer PROMO" class=""><img src="img/promo/btn_dn.png"/></a>
                                <br/><br/>
                            </div>
                        </div>

                        <div class="row" style="">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-9 col-centered">
                                <h1 style="color:white;text-transform: none;">Summer is Awesome and so is Our $1000 PROMO!</h1>
                                <br/>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 col-centered">
                                <img src="img/promo/promo201808_1.jpg"  style="z-index: 3"/>
                            </div>
                            <div class="promo_spacer"></div>
                            <div class="col-lg-8 col-centered">
                                <img src="img/promo/promo201808_2.jpg"  style="z-index: 3"/>
                            </div>
                            <div class="promo_spacer"></div>
                            <div class="col-lg-8 col-centered">
                                <img src="img/promo/promo201808_3.jpg"  style="z-index: 3"/>
                            </div>
                            <div class="promo_spacer"></div>
                            <div class="col-lg-8 col-centered">
                                <img src="img/promo/promo201808_4.jpg"  style="z-index: 3"/>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 30px">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <h4 style="color:#fff;text-transform: none;">Order a new Hobbit or Zephyr car from one of our dealers between August 1st and September 30th and receive a FREE complimentary package value at $1000.</h4>
                                <br/>
                                <p style="color:#fff;">*Promotion applies to new and pre-ordered cars only.</p>
                                <br/>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2 col-centered" style="margin-top: -10px">
                                <a href="dealer-directory.php" title="Find a dealer to get the promo today!" id="promo_btn_dealer" class="">Locate a Dealer</a>
                                <br/><br/>
                            </div>
                        </div>
《--above is summer promo code on index.php (for the release version)--》

《--301 redirect for divided stream of same site(www & non-www), in (.htaccess) file--》
RewriteCond %{HTTP_HOST} ^agtecars\.com$ [NC]
RewriteRule ^/?$ "http\:\/\/www\.agtecars\.com\/" [R=301,L]


===

<div class="row">
    <!--            <div class="col-sm-12">-->
    <!--                <h1 class="">Why choose Zephyr?</h1>-->
    <!--            </div>-->
    <!--        </div>-->
    <!---->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-10">-->
    <!--                <p>All <a href="zephyr.php">Zephyr</a> models are equipped with LED-->
    <!--                    energy efficient headlights. The LED lights emit-->
    <!--                    brighter light and last up to 3 times longer than-->
    <!--                    the average conventional headlights.-->
    <!--                </p>-->
    <!--            </div>-->
    <!--            <div class="col-lg-2">-->
    <!--                <img src="img/promo/zephyr_led_light.png" width="360" />-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <br />-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-10">-->
    <!--                <p>Enjoy your new ride with family and friends. The-->
    <!--                    Zephyr models are highly versatile when it-->
    <!--                    comes to capacity and can seat anywhere-->
    <!--                    between 2 to 6 individuals.-->
    <!--                </p>-->
    <!--            </div>-->
    <!--            <div class="col-lg-2">-->
    <!--                <img src="img/promo/zephyr_seats.png" width="360" />-->
    <!--            </div>-->
    <!--        </div>-->

<?php
$mail = new PHPMailer(true);
try {
    //Server settings
//    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
//    $mail->isSMTP();                                      // Set mailer to use SMTP
//    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//    $mail->SMTPAuth = true;                               // Enable SMTP authentication
//    $mail->Username = 'smtp.jasonzhang5195@gmail.com';                 // SMTP username
//    $mail->Password = 'xxxxxx33';                           // SMTP password
////    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//    $mail->Port = 587;                                    // TCP port to connect to

//    $mail->smtpConnect(
//        array(
//            "ssl" => array(
//                "verify_peer" => false,
//                "verify_peer_name" => false,
//                "allow_self_signed" => true
//            )
//        )
//    );

    //Recipients
    $mail->setFrom($email_from, $email_from_name);
    $mail->addAddress($email_to, $email_to_name);     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC($email_CC);
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments

    $new_coupon_code = generate_unique_coupon_code($conn);
    $new_email = 'haha@hhahah';
    $current_time = date("Y-m-d H:i:s");
    $new_status='aaa';
    $new_type='aaaa';

    $stmt = $conn -> prepare("INSERT INTO `coupon` (`coupon_code`, `email`, `status`, `type`, `time_generated`) VALUES (?,?,?,?,?)");
    $stmt -> bind_param("issss",$new_coupon_code,$new_email,$new_status,$new_type,$current_time);
    $stmt -> execute();

    $gd_img = imagecreatefromjpeg('../img/promo/youhuijuan_empty.jpg');

//imagealphablending($photo, true);
//$fontsize = 14;
//$font = 'VeraSe.ttf';
//    $fontcolor = imagecolorallocate($photo, 255, 255, 255);
//$angle = 0;
//$x = 590;
//$y = 30;
    $text_to_draw = 'Coupon code: '.$new_coupon_code;
//imagettftext($photo, $fontsize, $angle, $x, $y, $fontcolor, $font, $text);

    $gd_img = draw_text_to_img($gd_img, 14, 'VeraSe.ttf', 255, 255, 255, 0, 590, 30, $text_to_draw);

    $str_data="";
    ob_start();
    imagejpeg($gd_img);
    $str_data=ob_get_contents();

    ob_end_clean();

//    $mail->addAttachment('../img/promo/banner_promo_page.jpg', 'new.jpg');    // Optional name
    $mail->addStringAttachment($str_data,"coupon.jpg");
    $mail->addStringEmbeddedImage($str_data,"cid_of_the_photo");

    $img = "<img src=\"cid:cid_of_the_photo\">";
    $emailHTML .= "</table>{$img}</body></html>";


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $email_subject;
    $mail->Body    = $emailHTML;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $result['message'] = "Thank you for contacting AGT Electric Cars, your email was sent successfully.";
    $result['type'] = "success";
} catch (Exception $e) {
    $result['message'] = "We're sorry. Your request cannot be completed at the moment, please try again later.{$mail->ErrorInfo}";
    $result['type'] = "error";
//    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

echo json_encode($result);

// Close the statement and connection for security purpose
$stmt -> close();
$conn -> close();

//zz some assets:
//<!--I wish to receive AGT news, announcements and updates.-->
//<!--(AGT always treats your personal info with ultimate care and will never sell them to other companies)-->


