<?php

require 'dbconnect.php';

$name = $_REQUEST['name'];
$state = $_REQUEST['state'];
//$price = $_REQUEST['price'];
//$sex = $_REQUEST['sex'];

$sql = "delete from Parks where name = '" . $_REQUEST['name'] . "' and state = '" . $_REQUEST['state'] . "'";

if (!$result = $mysqli->query($sql)) {
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

?>

<script>
window.location='parksListing.php';
</script>