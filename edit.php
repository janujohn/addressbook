
<?php
include "header.php";
include "connect.php";
$id = $_GET['id'];

$edit = mysql_query("SELECT * FROM persons where id='$id'");
$row = mysql_fetch_array($edit);
?>

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
                        <form role="form" action="update.php" method="POST" enctype="multipart/form-data" >
<br/>
                              
                              
                                    
                                    <input type="hidden" name="id" value ="<?php echo $row['id']?>" />
                               
                              <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Contact Name" value = "<?php echo $row['name'];?>" />
                                </div>
                                
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="text" name="email" class="form-control" placeholder="Email" value = "<?php echo $row['email'];?>" />
                                </div>  
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-calendar"  ></i></span>
                                    <input type="text" name="dateofbirth" class="form-control" placeholder="Date of birth YYYY-MM-DD" value = "<?php echo $row['dateofbirth'];?>" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"  ></i></span>
                                    <input type="text" name="phoneno" class="form-control" placeholder="Phone Number" value = "<?php echo $row['phonenumber'];?>" />
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-camera"  ></i></span>
                                    <input type="file" name="image" class="form-control" placeholder="Photo Upload" value="<?php echo $row['image'];?>"/>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-home"  ></i></span>
                                    <textarea rows="4" cols ="50" name="address" class="form-control" placeholder="Address"><?php echo $row['address'];?></textarea>
                                </div>
                             
                              <button type="submit" class="btn btn-success" name="update">Update</button>
                           
                           
                            </form>
                    </div>
                </div>
            </div>
</div>
<?php 
//include "update.php";
include "footer.php";	?>