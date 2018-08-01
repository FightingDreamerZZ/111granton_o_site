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


?>