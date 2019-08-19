<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maersk-Group</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS/bootstrap/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="CSS/js/bootstrap.min.js"></script>
 
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
      <li><a href="index.php">LOGOUT </a></li>
	  </ul>
	  </div>
  </div>
  </nav>
  <div class="container">
  <h2>Vessel</h2>
  <form class="form-horizontal" action="Createvessel.php" method="post" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
	        <input type="text" class="form-control" name="vname"  required> 			
    </div>
   	     </div>
		 <div class="form-group">
	       <label class="control-label col-sm-2" for="select">Capacity:</label>
      <div class="col-sm-10">          
        <select class="form-control"  name="sel">
		<option>100kg</option>
        <option>300kg</option>
		<option>500kg</option>
        <option>1000kg</option>
		<option>1500kg</option>
      
          </select>
      </div>
	     </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary"name="save" >Add</button>
		 <a href="updatevessel.php" class="btn btn-default">Show List</a>
      </div>
    </div>

  </form>
</div>
  
  
  <footer class="container">
 <center> <p>© MaerskLine-2019</p></center>
</footer>
</body>
</html>
  <?php
  
  require_once('connection.php');

  if (isset($_POST['save'])) {
		$vname = $_POST['vname'];
		$sel = $_POST['sel'];

		mysqli_query($db, "INSERT INTO container (Name, Capacity) VALUES ('$vname', '$sel')"); 
		echo "<script>alert('Vessel Added Successfully')</script>";
		
		
	}

?>