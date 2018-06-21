<?php

include 'dbconnect.php';
$sql = "select * from Parks where name = '" . $_REQUEST['name'] . "' and state = '" . $_REQUEST['state'] . "'";

if (!$result = $mysqli->query($sql)) {   
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

$row = $result->fetch_assoc()

?>

<form action="editparksrv.php">
<input type="hidden" name="name" value="<?php echo $row['name']?>"/>
<input type="hidden" name="state" value="<?php echo $row['state']?>"/>
Park Name:<input type="text" name="name" value="<?php echo $row['name']?>"/></br>
State:<input type="text" name="state" value="<?php echo $row['state']?>"/></br>
Ticket Price:<input type="text" name="price" value="<?php echo $row['price']?>"/></br>
Annual Attendance:<input type="text" name="attendance" value="<?php echo $row['attendance']?>"/></br>
Owned by:<input type="text" name="owner" value="<?php echo $row['owner']?>"/></br>
Year Built:<input type="text" name="built" value="<?php echo $row['built']?>"/></br>
<input type="submit"/>

</form>