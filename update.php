<?php
include "header.php";
include "connect.php";
$id = $_POST['id'];

if(isset($_POST['update'])) {
	$name = mysql_escape_string($_POST['name']);
$email = mysql_escape_string($_POST['email']);
$dob = mysql_escape_string($_POST['dateofbirth']);
$phoneno = mysql_escape_string($_POST['phonenumber']);
/*$image = $_FILES['image']['name'];
$imageuniqname = sha1(uniqid(). $image . time());
$imagearray = explode ('.', $image);
$allowedExts = array("gif", "jpeg", "jpg", "png");
$ext = $imagearray[count($imagearray)-1];
if (in_array($ext, $allowedExts))
{
	$destimagename = $imageuniqname . '.' . $ext;

	$target_folder = 'images/';

	if(is_uploaded_file($_FILES['image']['tmp_name'])) {
		move_uploaded_file($_FILES['image']['tmp_name'], $target_folder . $destimagename) or die ('cannot upload');
	}

}
else
{
	echo "Invalid file extension";
}*/

$address = mysql_escape_string($_POST['address']);

$update = "UPDATE persons SET name ='$name',
							  email='$email',
							  dateofbirth ='$dob',
							  phonenumber='$phoneno',
							
							  address='$address' where id = '$id'";
$result = mysql_query($update);	

if ($update)
{
	header('Location: list.php');
}						  

}
