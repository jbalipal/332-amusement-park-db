<?php

include 'dbconnect.php';

$sql = "select * from Manufacturer where name = '" . $_REQUEST['name'] . "'";

if (!$result = $mysqli->query($sql)) {   
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

$row = $result->fetch_assoc()

?>

<form action="editmanufacturersrv.php">

Manufacturer:<input type="text" name="name" value="<?php echo $row['name']?>"/></br>
Country:<input type="text" name="country" value="<?php echo $row['country']?>"/></br>
Year:<input type="text" name="year" value="<?php echo $row['year']?>"/></br>
<input type="submit"/>

</form>