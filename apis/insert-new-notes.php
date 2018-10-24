<?php
include( "db-conf.php" );
include( "misc-function.php" );

// post reques
$notes = $_POST["notes"];
$password = "";
$slug = random_string(6);
$active = "1";
$ip = $_SERVER['REMOTE_ADDR'];
$created_date_time = date( "Y-m-d h:i:s" );
$last_modified_date_time = date( "Y-m-d h:i:s" );
$csrf_token = $_POST["csrf"]; 

$sql = "INSERT INTO note ( notes, password, slug, active, ip, created_date_time, last_modified_date_time ) VALUES ('$notes', '$password', '$slug', '$active', '$ip', '$created_date_time', '$last_modified_date_time' )";

$response = array();

if ( $conn->query( $sql ) === TRUE) {
    $response["code"] = 200;
    $response["message"] = "Notes created successfully";
    $response["slug"] = PROJECT_PATH.'view.php?slug='.$slug;
} else {
    $response["code"] = 500;
    $response["message"] = "Something went wrong";
 	$response["slug"] = "";
}

echo json_encode( $response );
$conn->close();


?>

