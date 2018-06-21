<?php

include 'dbconnect.php';
$sql = "select * from Owner where name = '" . $_REQUEST['name'] . "'";

if (!$result = $mysqli->query($sql)) {   
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

$row = $result->fetch_assoc()

?>

<form action="editownersrv.php">

Name:<input type="text" name="name" value="<?php echo $row['name']?>"/></br>
Year:<input type="text" name="year" value="<?php echo $row['year']?>"/></br>
State:<input type="text" name="state" value="<?php echo $row['state']?>"/></br>

<input type="submit"/>

</form>