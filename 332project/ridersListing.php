<?php
include 'menu.php';
require 'dbconnect.php';

$sql = "SELECT * FROM Riders";
if (!$result = $mysqli->query($sql)) {
   
    echo "Error: Our query failed to execute and here is why: </br>";
    echo "Query: " . $sql . "</br>";
    echo "Errno: " . $mysqli->errno . "</br>";
    echo "Error: " . $mysqli->error . "</br>";
    exit;
}

echo "<table border=1>";
echo "<tr><th>First Name</th><th>Last Name</th><th>DOB</th><th>Sex</th><th>Action</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["firstName"] . "</td>";
    echo "<td>" . $row["lastName"] . "</td>";
    echo "<td>" . $row["dob"] . "</td>";
    echo "<td>" . $row["sex"] . "</td>";
    echo "<td><a href='delrider.php?id=" . $row["id"] . "'>DEL</a> ";
    echo "<a href='editrider.php?id=" . $row["id"] . "'>EDIT</a></td>";
    echo "<tr>";
}
echo "<table>";

?>

</table>
<a href="addrider.htm">Add New Rider</a>