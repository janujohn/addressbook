<?php
include "connect.php";
$selectQuery = "SELECT * FROM persons";

$exe = mysql_query($selectQuery);
echo "<table border ='2'>
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>E-mail</th>
	<th>Dateofbirth</th>
	<th>Phoneno</th>
	<th>Image</th>
	<th>Address</th>
</tr>";

while($row = mysql_fetch_array($exe)) {
	echo "<tr>";
	echo "<td>" . trim($row['id']) . "</td>";
	echo "<td>" . trim($row['name']) . "</td>";
	echo "<td>" . trim($row['email']) . "</td>";
	echo "<td>" . trim($row['dateofbirth']) . "</td>";
	echo "<td>" . trim($row['phoneno']) . "</td>";
	echo "<td>" . $target_folder . trim($row['image']) . "</td>";
	echo "<td>" . trim($row['address']) . "</td>";
	echo "</tr>";
}	
echo "</table>"; 

