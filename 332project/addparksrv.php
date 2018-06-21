<?php

require 'dbconnect.php';

$name = $_REQUEST['name'];
$state = $_REQUEST['state'];
$price = $_REQUEST['price'];
$attendance = $_REQUEST['attendance'];
$owner = $_REQUEST['owner'];
$built = $_REQUEST['built'];

$sql = "insert into Parks (name, state, price, attendance, owner, built) VALUES ('$name', '$state', '$price', '$attendance', '$owner', '$built')";

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