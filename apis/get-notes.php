<?php

include( "db-conf.php" );
include( "misc-function.php" );

// post reques
$slug = $_GET["slug"];

$sql = "SELECT notes from note where slug='$slug'";
$result = $conn->query( $sql );

$response = array();

if ( $result->num_rows == 1 ) {
    $row = mysqli_fetch_assoc( $result );
    $response["notes"] = $row["notes"];	
} else {
    $response["notes"] = "";
}

$conn->close();
echo $response["notes"];
