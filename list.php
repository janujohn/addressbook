<?php
include "connect.php";
$target_folder = 'images/';

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
	echo "<td>" . trim($row['id']) . "</td>\n"; 
	echo "<td>" . trim($row['name']) . "</td>\n";
	echo "<td>" . trim($row['email']) . "</td>\n";
	echo "<td>" . trim($row['dateofbirth']) . "</td>\n";
	echo "<td>" . trim($row['phonenumber']) . "</td>\n";
	echo '<td><img height="50" src="' . $target_folder . trim($row['image']). '"></td>' . "\n";
	echo "<td>" . trim($row['address']) . "</td>\n";
	echo "</tr>\n";
}	
echo "</table>"; 

