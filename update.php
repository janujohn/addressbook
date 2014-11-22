<?php
include "header.php";
include "connect.php";

if(! empty($_POST['id'])) {
	$id = mysql_escape_string($_POST['id']);
	$name = mysql_escape_string($_POST['name']);
	$email = mysql_escape_string($_POST['email']);
	$dob = mysql_escape_string($_POST['dateofbirth']);
	$phoneno = mysql_escape_string($_POST['phonenumber']);
	$address = mysql_escape_string($_POST['address']);
	$target_folder = 'images/';

	$image_sql = mysql_query("select image from persons where id=$id");
	$imgResult = mysql_fetch_array($image_sql);
	$image = $imgResult['image'];
	
	// A new file is uploaded
	if (! empty($_FILES['image']['name']) && $_FILES['image']['size'] > 0) {
		unlink($target_folder . $image);
		$imageuniqname = sha1(uniqid() . $image . time());
		$imagearray = explode ('.', $image);
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$ext = $imagearray[count($imagearray)-1];
		if (in_array($ext, $allowedExts)) {
			$destimagename = $imageuniqname . '.' . $ext;
			$target_folder = 'images/';
			if (is_uploaded_file($_FILES['image']['tmp_name'])) {
				move_uploaded_file($_FILES['image']['tmp_name'], $target_folder . $destimagename) or die ('cannot upload');
				mysql_query("UPDATE persons set image='$destimagename' where id=$id");
			}
		}
		else {
			echo "Invalid file extension";
		}
	}

	$update = "UPDATE persons 
					SET
						name ='$name',
						email='$email',
						dateofbirth ='$dob',
						phonenumber='$phoneno',
  						address='$address'
  					where 
  						id = '$id'";

	$result = mysql_query($update);	
	header('Location: list.php');
}