<?php
include 'menu.php';
require 'dbconnect.php';

$sql = "SELECT * FROM Rides";
if (!$result = $mysqli->query($sql)) {
   
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<table border=1>";
echo "<tr><th>Name</th><th>Opened</th><th>Park</th><th>Manufacturer</th><th>Type</th><th>Action</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["opened"] . "</td>";
    echo "<td>" . $row["park"] . "</td>";
    echo "<td>" . $row["manufacturer"] . "</td>";
    echo "<td>" . $row["type"] . "</td>";
    
    echo "<td><a href='delride.php?name=" . $row["name"] . "'>DEL</a> ";
    echo "<a href='editride.php?name=" . $row["name"] . "'>EDIT</a></td>";
    echo "<tr>";
}
echo "<table>";

?>

</table>
<a href="addride.htm">Add New Ride</a>