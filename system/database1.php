<?php
/**
 * Created by PhpStorm.
 * Date: 2018-11-27
 * Time: 5:00 PM
 */

// Open connection to database
$servername = "localhost";
$username = "root";
$password = "agtEcars123";
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

function get_db_connection(){
    return $conn;
}