<?php
include 'menu.php';
require 'dbconnect.php';

$sql = "SELECT * FROM Parks";
if (!$result = $mysqli->query($sql)) {
   
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<table border=1>";
echo "<tr><th>Park</th><th>State</th><th>Price($)</th><th>Attendance</th><th>Owner</th><th>built</th><th>Action</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["state"] . "</td>";
    echo "<td>" . $row["price"] . "</td>";
    echo "<td>" . $row["attendance"] . "</td>";
    echo "<td>" . $row["owner"] . "</td>";
    echo "<td>" . $row["built"] . "</td>";
    echo "<td><a href='delpark.php?name=" . $row['name'] . "&state=" . $row['state'] . "'>DEL</a> ";
    echo "<a href='editpark.php?name=" . $row['name'] . "&state=" . $row['state'] . "'>EDIT</a></td>";
    echo "<tr>";
}

echo "<table>";

?>

</table>
<a href="addpark.htm">Add New Park</a>