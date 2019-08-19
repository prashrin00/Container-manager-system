<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maersk-Group</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/bootstrap/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="CSS/js/bootstrap.min.js">
  </script<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
      <a class="navbar-brand" href="#"><img src="image/logo.svg" alt="MaerskLine logo" height="50px" width="150px" class="img-fluid"></a>
    </div>
	<div class="navbar-collapse collapse">
	<ul class="nav navbar-nav navbar-left">
      <li><a href="Createvessel.php"> Home</a></li>
      <li><a href="Createvessel.php"></span> Create Vessel</a></li>
	  <li><a href="Shipschedule.php"></span> Shipping Schedule</a></li>
	  <li><a href="viewbooking.php"></span> View Booking</a></li>
	  <li><a href="viewcustomer.php"></span> View Customer</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">LOGOUT</a></li>
	  </ul>
	  </div>
  </div>
  </nav>
  
  <div class="wrapper">
    <form class="form-horizontal" action="update.php" method="post" >
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <h3>Please edit the input values and submit to update the record.</h3>
                     <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
	        <input type="text" class="form-control" name="name" > 			
    </div>
   	     </div>
		
		 <div class="form-group">
	       <label class="control-label col-sm-2" for="select">Capacity:</label>
      <div class="col-sm-10">          
        <select class="form-control"  name="capacity" >
		<option>100 pcs</option>
        <option>300 pcs</option>
		<option>500 pcs</option>
        <option>1000 pcs</option>
		<option>1500 pcs</option>
      
          </select>
      </div>
	     </div>
                       <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="update" >Submit</button>
		 <a href="updatevessel.php" class="btn btn-default">Cancel</a>
      </div>
    </div>
                      
                       
                    
                </div>
            </div>        
        </div>
		</form>
		</div>
  
	</body>
	</html>
	<?php
// Include config file
require_once ('connection.php');
 
// Define variables and initialize with empty values

 if (isset($_POST['update'])) {
 if (isset($_GET['id'])) {
	$id = $_GET['id'];
	
	
	$sql=mysqli_query( "UPDATE `container` SET  Name=?, Capacity='?' WHERE id='$id'");

$res = mysqli_query($db, $sql);

	
echo "<script>alert('Updated Successfully')</script>";

}
 }
 
 
	
?>

