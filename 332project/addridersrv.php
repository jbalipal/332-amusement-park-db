<?php

require 'dbconnect.php';

$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$dob = $_REQUEST['dob'];
$sex = $_REQUEST['sex'];

$sql = "insert into Riders (firstName, lastName, dob, sex) VALUES ('$firstName', '$lastName', '$dob', '$sex')";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
window.location='ridersListing.php';
</script>