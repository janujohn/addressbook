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
                                    <form role="form" action="insert.php" method="POST" enctype="multipart/form-data" >
    <br/>
                                            <div class="form-group input-group">
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
                                                <textarea rows="4" cols ="50" name="address"class="form-control" placeholder="Address">
                                                </textarea>
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
   
    </body>
</html>
<?php

  include "connect.php";
$nameErr = $emailerr= $doberr = $phonenoerr = $imageerr = $adderr =""; 
$name  = $email = $dob = $phoneno = $image = $address  ="" ;

 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Missing";
    }
    else {
        $name = $_POST["name"];
    }
 
    if (empty($_POST["email"])) {
        $addrErr = "Missing";
    }
    else {
        $address = $_POST["email"];
    }
 
    if (empty($_POST["dataofbirth"]))  {
        $emailErr = "Missing";
    }
    else {
        $email = $_POST["dateofbirth"];
    }
 
    if (!isset($_POST["phonenumber"])) {
        $phonenoerr = "You must give 10 number";
    }
    else {
        $phoneno = $_POST["phonenumber"];
    }
 
    if (empty($_POST["image"])) {
        $imageerr = "set profile picture";
    }
    else {
        $target ="images/";
        $image = $target . basename($_FILES["image"]["name"]);
        
        if (file_exists($target . $_FILES["image"]["name"])) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}     

        elseif (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
    }
    if (empty($_POST["address"])) {
        $adderr = "Missing";
    }
    else {
        $address = $_POST["address"];
    }
    /*if (empty($_POST["retypepassword"])) {
        $repwderr = "Missing";
    }
    else {
        if ($_POST["password"] == $_POST["retypepassword"])
        {
        $repwd = $_POST["retypepassword"];
    }
    else
    {
        echo "password not match";
    }
    } */
}
?>