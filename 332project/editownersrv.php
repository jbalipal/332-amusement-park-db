<?php

require 'dbconnect.php';


$sql = "update Owner set " ;
$sql .= "name= '" . $_REQUEST['name'] ."', " ;
$sql .= "year= " . $_REQUEST['year'] .", " ;
$sql .= "state= '" . $_REQUEST['state'] ."'";

$sql .= " where name = '" . $_REQUEST['name'] . "'";


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