<?php

$servername = "govpac.com";
$username = "gpascom_manton";
$password = "yekcim23";
$dbname = "gpascom_manton";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
    
}


print_r($conn);

?>

	
	
