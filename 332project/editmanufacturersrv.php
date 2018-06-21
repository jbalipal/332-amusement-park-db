<?php

require 'dbconnect.php';


$sql = "update Manufacturer set " ;
$sql .= "name= '" . $_REQUEST['name'] ."', " ;
$sql .= "country= '" . $_REQUEST['country'] ."', " ;
$sql .= "year= " . $_REQUEST['year'];

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
window.location='manufacturerListing.php';
</script>