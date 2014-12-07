<?php
$error = false;
$error_msg = array();

if (! empty($_POST)) {
	include "connect.php";

	if (empty($_POST['name'])) {
		$error = true;
		$error_msg['name'] = "This field is required";
	} else {
		$name = input_value($_POST['name']);
		if(! preg_match("/^[a-zA-Z ]*$/",$name)) {
			$error = true;
			$error_msg['name'] = "Only letters and white space allowed";
		}
	}
	if (empty($_POST['email'])) {
		$error = true;
		$error_msg[] = "email field is required";
	} else {
		$email = input_value($_POST['email']);
		if ( !preg_match(".*[@].*", $email)) {
			$error = true;
			$error_msg[] = "Invalid e-mail id";
		}
	}
	if (empty($_POST['dateofbirth'])) {
		$error = true;
		$error_msg[] = " date of birth field is required";

	} else {
		$dob = input_value($_POST['dateofbirth']);
		if (!$dob == 'YYYY-MM-DD') {
			$error = true;
			$error_msg[]  = "Enter YYYY-MM-DD format";
		}
	}
	if (empty($_POST['phoneno'])) {
		$error = true;
		$error_msg[]  = "Phone number field is required"; 
	} else {
		$phoneno = input_value($_POST['phoneno']);
		if ((!preg_match("/(^[+-][0-9]{4})-([0-9]{1,2})-([0-9]{1,2})/", '', $phoneno)) && strlen($phoneno  ) == 10) {
			$error = true;
			$error_msg[]  = "Enter valid phonenumber";
		}

	}
	$image = $_FILES['image']['name'];
	if ($image) {
		
		$imageuniqname = sha1(uniqid(). $image . time());
		$imagearray = explode ('.', $image);
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$ext = $imagearray[count($imagearray)-1];

		if (in_array($ext, $allowedExts)) {
			$destimagename = $imageuniqname . '.' . $ext;

			$target_folder = 'images/';

			if (is_uploaded_file($_FILES['image']['tmp_name'])) {
				move_uploaded_file($_FILES['image']['tmp_name'], $target_folder . $destimagename) or die ('cannot upload');
			}

		}
		else {
			echo "Invalid file extension";
		}
	} 
	$address = ($_POST['address']);
	if ($address) {
		$address = input_value($_POST['address']);
	}
	if (!$error) {
		$insertQuery = "INSERT INTO persons (name, email, dateofbirth, phonenumber, image, address) VALUES ('$name', '$email', '$dob', '$phoneno', '$destimagename', '$address')";    

		$insertOk = mysql_query($insertQuery);
	} 
}	

function input_value($data) {
	$data = trim($data);
	$data = mysql_escape_string($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
       
        <title>Registration Page</title>
        <!-- BOOTSTRAP CORE STYLE CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLE CSS -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLE CSS -->
        <link href="assets/css/style.css" rel="stylesheet" />    
        <!-- GOOGLE FONT -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>

    <body>
        <div class="container">
            <div class="row text-center pad-top">
                <div class="col-md-12">
                    <h2>Address Book</h2>
                </div>
            </div>

             <div class="row  pad-top">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <strong>Details</strong>  
                                </div>
                                <div class="panel-body">
                                    <form role="form" action="" method="POST" enctype="multipart/form-data" >
    <br/>
											<?php if ($error && ! empty($error_msg['name'])): ?>
												<div class="alert alert-danger"><?=$error_msg['name']?></div>
											<?php endif; ?>

                                            <div class="form-group input-group <?=($error && $error_msg['name']) ? 'has-error' : ''?>">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" name="name" class="form-control" placeholder="Contact Name" />
                                                
                                            </div>
                                            
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input type="text" name="email" class="form-control" placeholder="Email" />
                                                
                                            </div>  
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-calendar"  ></i></span>
                                                <input type="text" name="dateofbirth" class="form-control" placeholder="Date of birth YYYY-MM-DD" />
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-phone"  ></i></span>
                                                <input type="text" name="phoneno" class="form-control" placeholder="Phone Number" />
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-camera"  ></i></span>
                                                <input type="file" name="image"class="form-control" placeholder="Photo Upload" />
                                                
                                            </div>
                                            <div class="form-group input-group">
                                                <span class="input-group-addon"><i class="fa fa-home"  ></i></span>
                                                <textarea rows="4" cols ="50" name="address"class="form-control" placeholder="Address"></textarea>
                                            </div>
                                         
                                         <button type="submit" class="btn btn-success ">Add</button>
                                       
                                        </form>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
   
        <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
        <!-- CORE JQUERY  -->
        <script src="assets/plugins/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS  -->
        <script src="assets/plugins/bootstrap.js"></script>
   
 
      <a href ="list.php">ListingPage</a>
   </body>
</html>
