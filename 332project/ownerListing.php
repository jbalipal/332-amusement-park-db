<?php
include 'menu.php';
require 'dbconnect.php';

$sql = "SELECT * FROM Owner";
if (!$result = $mysqli->query($sql)) {
   
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<table border=1>";
echo "<tr><th>Name</th><th>Year</th><th>State</th><th>Action</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["year"] . "</td>";
    echo "<td>" . $row["state"] . "</td>";
    
    echo "<td><a href='delowner.php?name=" . $row["name"] . "'>DEL</a> ";
    echo "<a href='editowner.php?name=" . $row["name"] . "'>EDIT</a></td>";
    echo "<tr>";
}
echo "<table>";

?>

</table>
<a href="addowner.htm">Add New Owner</a>