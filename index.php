<div class="container">
             <div class="navbar">
     <ul class="nav nav-pills">
<li class="active"><a href="index.php">Contacts</a></li>
 <li style="font-size:25px;"><a href="add.php"><i class="fa fa-plus-circle"></i></a></li> 
</ul>
</div>
</div>
<?php
include "header.php";
include "connect.php";
$target_folder = 'images/';

$selectQuery = "SELECT * FROM persons";

$exe = mysql_query($selectQuery);
echo '<div class="table-responsive">
<table class="table table-striped table-bordered" width="100">
  <thead>
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>E-mail</th>
	<th>Dateofbirth</th>
	<th>Phoneno</th>
	<th>Image</th>
	<th>Address</th>
	<th>Action</th>

</tr>
</thead><tbody>';

while($row = mysql_fetch_array($exe)) {
	echo "<tr>";
	echo "<td>" . trim($row['id']) . "</td>\n"; 
	echo "<td>" . trim($row['name']) . "</td>\n";
	echo "<td>" . trim($row['email']) . "</td>\n";
	echo "<td>" . trim($row['dateofbirth']) . "</td>\n";
	echo "<td>" . trim($row['phonenumber']) . "</td>\n";
	echo '<td><img height="50" src="' . $target_folder . trim($row['image']). '"></td> ' . "\n";
	echo "<td>" . trim($row['address']) . "</td>\n";
	echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a>' . "</td>\n";
	echo "</tr>\n";
}	
echo "</tbody>";
echo "</table>";
echo "</div>";

include "footer.php"; 
?>

