<?php

require 'dbconnect.php';


$sql = "update Rides set " ;
$sql .= "name= '" . $_REQUEST['name'] . "', " ;
$sql .= "opened= " . $_REQUEST['opened'] . ", " ;
$sql .= "park= '" . $_REQUEST['park'] . "', ";
$sql .= "manufacturer= '" . $_REQUEST['manufacturer'] . "', ";
$sql .= "type= '" . $_REQUEST['type'] . "' ";

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
window.location='rideListing.php';
</script>