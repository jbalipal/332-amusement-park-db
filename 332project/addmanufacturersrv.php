<?php

require 'dbconnect.php';

$name = $_REQUEST['name'];
$country = $_REQUEST['country'];
$year = $_REQUEST['year'];


$sql = "insert into Manufacturer (name, country, year) VALUES ('$name', '$country', '$year')";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
window.location='manufacturerListing.php';
</script>