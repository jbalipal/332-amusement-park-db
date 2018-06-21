<?php

include 'dbconnect.php';

$sql = "select * from Rides where name = '" . $_REQUEST['name'] . "'";

if (!$result = $mysqli->query($sql)) {   
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

$row = $result->fetch_assoc()

?>

<form action="editridesrv.php">

Name:<input type="text" name="name" value="<?php echo $row['name']?>"/></br>
Opened:<input type="text" name="opened" value="<?php echo $row['opened']?>"/></br>
Park:<input type="text" name="park" value="<?php echo $row['park']?>"/></br>
Manufacturer:<input type="text" name="manufacturer" value="<?php echo $row['manufacturer']?>"/></br>
Type:<input type="text" name="type" value="<?php echo $row['type']?>"/></br>
<input type="submit"/>

</form>