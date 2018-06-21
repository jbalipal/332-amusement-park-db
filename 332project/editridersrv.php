<?php

require 'dbconnect.php';

$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$dob = $_REQUEST['dob'];
$sex = $_REQUEST['sex'];

$sql = "update Riders set " ;
$sql .= "firstName = '" . $_REQUEST['firstName'] ."', " ;
$sql .= "lastName = '" . $_REQUEST['lastName'] ."', " ;
$sql .= "dob = '" . $_REQUEST['dob'] ."', " ;
$sql .= "sex = '" . $_REQUEST['sex'] ."' " ;
$sql .= "where id = " . $_REQUEST['id'];


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