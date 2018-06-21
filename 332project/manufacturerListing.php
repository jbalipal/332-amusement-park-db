<?php
include 'menu.php';
require 'dbconnect.php';

$sql = "SELECT * FROM Manufacturer";
if (!$result = $mysqli->query($sql)) {
   
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<table border=1>";
echo "<tr><th>Manufacturer</th><th>Country</th><th>Year</th><th>Action</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["country"] . "</td>";
    echo "<td>" . $row["year"] . "</td>";
    
    echo "<td><a href='delmanufacturer.php?name=" . $row["name"] . "'>DEL</a> ";
    echo "<a href='editmanufacturer.php?name=" . $row["name"] . "'>EDIT</a></td>";
    echo "<tr>";
}
echo "<table>";

?>

</table>
<a href="addmanufacturer.htm">Add New Manufacturer</a>