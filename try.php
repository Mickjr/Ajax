<?php

function dbconnect(){

 $servername = "192.186.254.9";
 $username = "mantonhortonjr";
 $password = "mantrell23";
 $dbname = "ninjamax_mw1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

	}

	return $conn;

}

$c = dbconnect();

// print_r($c);

$result_array = array();

$sql = "SELECT * FROM bgea_churchgroup_enrollment";

$result = $c->query($sql);

 // print_r($sql);


 while ($row = $result->fetch_assoc()) {

    $r = array();

    $r['id'] = $row['id'];

    $r['email'] = $row['email'];

    $r['firstname'] = $row['firstname'];

    $r['lastname'] = $row['lastname'];

    $r['city'] = $row['city'];

    $r['country'] = $row['country'];

    $r['zip'] = $row['zip'];

    $r['church'] = $row['church'];

    $r['coursecatidnumber'] = $row['coursecatidnumber'];

    $result_array[$row['id']] = $r;



}

// $jfo = json_encode($result_array);

// exit(print_r($jfo));

exit(json_encode($result_array));

?>
