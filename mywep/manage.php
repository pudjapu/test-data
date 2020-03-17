<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Surname</th>
<th>Product Name</th>
<th>Product ID</th>
</tr>

<?php
require(connect.php);
$sql = "SELECT ID, FName, LName, ProductName, ProductID FROM manage";
$result = mysqli_query($connect,$sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["FName"] . "</td><td>"
. $row["LName"]. "</td></tr>" . $row["ProductName"]. "</td><td>" . $row["ProductID"]. "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>