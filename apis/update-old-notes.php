<?php
include( "db-conf.php" );
include( "misc-function.php" );

// post reques
$notes = random_string( 100 );
$slug = '4cmwv1';
$ip = $_SERVER['REMOTE_ADDR'];
$last_modified_date_time = date( "Y-m-d h:i:s" );
$csrf_token = $_POST["csrf_token"]; 

$sql = "UPDATE note SET notes='$notes', last_modified_date_time='$last_modified_date_time' WHERE slug='$slug'";

if ( $conn->query($sql) === TRUE) {
    $response["code"] = 200;
    $response["message"] = "Notes updated successfully";
    $message["url"] = $slug;
} else {
    $response["code"] = 500;
    $response["message"] = "Something went wrong";
}

echo json_encode( $response );
$conn->close();


?>

