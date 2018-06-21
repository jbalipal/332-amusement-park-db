<?php

require 'dbconnect.php';

$name = $_REQUEST['name'];
$year= $_REQUEST['year'];
$state= $_REQUEST['state'];


$sql = "insert into Owner (name, year, state) VALUES ('$name', '$year', '$state')";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
window.location='ownerListing.php';
</script>