<?php
$link = mysql_connect("localhost" , "root" , "root") or die(mysql_error());
$db = mysql_select_db("persondetails") or die("cannot connect to database");
?>