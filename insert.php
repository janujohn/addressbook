<?php
include "connect.php";
$name = "john O' conner";
$email = 'john@gmail.com';
$dob = '1992/11/23';
$phoneno = '8849406779';
$password = 'johh';
$insertQuery = "INSERT INTO persons (name, email, dateofbirth, phonenumber, image, password) VALUES ('$name', '$email', '$dob', '$phoneno', '$image', '$password')";    
echo $insertQuery;
