<?php

include 'dbconnect.php';
$sql = "select * from Riders where id = " . $_REQUEST['id'];

if (!$result = $mysqli->query($sql)) {   
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

$row = $result->fetch_assoc()

?>

<form action="editridersrv.php">
<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
First Name:<input type="text" name="firstName" value="<?php echo $row['firstName']?>"/></br>
Last Name:<input type="text" name="lastName" value="<?php echo $row['lastName']?>"/></br>
DOB:<input type="text" name="dob" value="<?php echo $row['dob']?>"/></br>
Sex:<input type="text" name="sex" value="<?php echo $row['sex']?>"/></br>
<input type="submit"/>

</form>