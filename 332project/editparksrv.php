<?php

require 'dbconnect.php';

$sql = "update Parks set " ;
$sql .= "name = '" . $_REQUEST['name'] . "', " ;
$sql .= "state = '" . $_REQUEST['state'] . "', " ;
$sql .= "price = '" . $_REQUEST['price'] . "', " ;
$sql .= "attendance = '" . $_REQUEST['attendance'] . "', " ;
$sql .= "owner = '" . $_REQUEST['owner'] . "', " ;
$sql .= "built = " . $_REQUEST['built'];
$sql .= " where name = '" . $_REQUEST['name'] . "'";

//die($sql);

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