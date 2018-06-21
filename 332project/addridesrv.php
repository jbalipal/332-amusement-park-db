<?php

require 'dbconnect.php';

$name = $_REQUEST['name'];
$opened= $_REQUEST['opened'];
$park= $_REQUEST['park'];
$manufacturer= $_REQUEST['manufacturer'];
$type= $_REQUEST['type'];

$sql = "insert into Rides (name, opened, park, manufacturer, type) VALUES ('$name', '$opened', '$park', '$manufacturer', '$type')";


if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
window.location='rideListing.php';
</script>