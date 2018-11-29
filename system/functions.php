<?php


// Function to display length string (cm - inches)
function display_length($length,$mode = "cm"){

	if($mode == "cm"){
		$length_cm = $length;

		// Conversation from centimeter to inches
		$length_inch = round($length_cm / 2.54,1);

		if($length_cm == 0){
			echo "TBD";
		} else {
			echo "{$length_cm} cm ({$length_inch}'')";
		}
	} else if($mode == "m") {
		$length_m = $length;

		$length_feet = round($length_m * 3.28084,1);

		if($length_feet == 0){
			echo "TBD";
		} else {
			echo "{$length_m} m ({$length_feet} ft.)";
		}
	}
	
	
}

// Function to display weight string (kg - pound)
function display_weight($weight){

	$weight_kg = $weight;

	// Conversation from kilogram to pound
	$weight_lbs = round($weight_kg * 2.2046226218);

	if($weight_kg == 0){
		echo "TBD";
	} else {
		echo "{$weight_kg}kg ({$weight_lbs}lbs.)";	
	}
	
}

function generate_unique_coupon_code($conn){
    $isUnique = false;
    $new_coupon_code="";
    while(!$isUnique){
        $new_coupon_code = mt_rand(100000,999999);
        $query = "SELECT * FROM coupon WHERE coupon_code='".$new_coupon_code."';";

        $result_set = mysqli_query($conn,$query) or die(mysql_error());

        $result_array = $result_set -> fetch_assoc();

        if(count($result_array)==0){
            $isUnique = true;
        }
    }

    return $new_coupon_code;
}

function draw_text_to_img($gd_img, $font_size, $font_file, $fontcolor_r, $fontcolor_g, $fontcolor_b, $angle, $x, $y, $text) {
    $gd_img1 = $gd_img;
    $fontcolor = imagecolorallocate($gd_img1, $fontcolor_r, $fontcolor_g, $fontcolor_b);
    imagettftext($gd_img1, $font_size, $angle, $x, $y, $fontcolor, $font_file, $text);
    return $gd_img1;
}



?>